<?php

namespace App\Http\Controllers;

use App\Course;
use App\Paket;
use App\Progress;
use App\TransactionCourse;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MycourseController extends Controller
{
    public function index()
    {
        $course = TransactionCourse::where([['user_id', auth()->user()->id], ['status', 'selesai'], ['batas', '>=', Carbon::now()->format('Y-m-d')]])->orWhere([['batas',null],['user_id', auth()->user()->id], ['status', 'selesai']])->with(['paket' => function($z){
            $z->withTrashed();
        }])->orderBy('created_at','DESC')->get();

        //return view('tests.materi.index', compact('course'));

        //V2
        return view('V2.Member.mycourse', compact('course'));
    }
    public function see($paketId,Course $course,TransactionCourse $trans)
    {
        try {
           $course = Paket::withTrashed()->where('id',$paketId)->whereHas('TransCourse',function($qq) use($paketId){
                    return $qq->where([
                        ['paket_id', $paketId], 
                        ['user_id', auth()->user()->id], 
                        ['status', 'selesai'], 
                        ['batas', '>=', Carbon::now()->format('Y-m-d')]
                        ])->orWhere([['batas',null],['user_id', auth()->user()->id], ['status', 'selesai']]);
                    })->first()->course->where('id',$course->id)->first();
             $jumlah =  $course->subCourse()->count();
            $t = $trans->progress()->where('course_id',$course->id)->get();
            $ar = [];
                foreach ($t as $value) {
                    $ar[] = $value->progres;
                }
            $prog = 100 * $t->count() / $jumlah;
            $subcourse = (clone $course)->SubCourse()->orderBy('babcourse_id')->orderBy('sequence')->paginate(1)->onEachSide(1000);
            $namaCourse = (clone $course)->SubCourse()->orderBy('babcourse_id')->orderBy('sequence')->get();
            $babCourse = (clone $course)->babCourses()->get();
        
            $trans = $trans->id;
        } catch (Exception $e) {
            toastr($e->getMessage(),'error');
            return redirect()->back();
        }
        //return view('tests.materi.materi', compact(['babCourse','ar','course','namaCourse','trans','subcourse', 'prog',]));

        //v2
        return view('V2.Member.mycourse-detail', compact(['babCourse','ar','course','namaCourse','trans','subcourse', 'prog',]));
    }
    public function sudaDibaca(TransactionCourse $trans,Course $course)
    {
        $jumlah =  $course->subCourse()->count();
        if(!Progress::where([['progres',request()->page],['transaction_course_id',$trans->id],['course_id',$course->id]])->exists() && $jumlah >= request()->page){
            Progress::create([
                'transaction_course_id' => $trans->id,
                'progres' => request()->page,
                'course_id' => $course->id
            ]);
        }
        return redirect()->back();
    }
}
