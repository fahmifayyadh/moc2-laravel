<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\TransactionCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function sear()
    {
        $course = TransactionCourse::where([['user_id', auth()->user()->id], ['status', 'selesai'], ['batas', '>=', Carbon::now()->format('Y-m-d')]])->orWhere([['batas',null],['user_id', auth()->user()->id], ['status', 'selesai']])->with(['paket' => function($z){
            $z->withTrashed();
        }])->get();
        $c = [];
        foreach ($course as $v) {
            foreach ($v->paket->course as $k) {
                $c[] = $k->id;
            }
        }
        return $c;
    }
    public function index()
    {
        $c= $this->sear();
        $file = File::whereIn('course_id', $c)->orderBy('type')->get();
        return view('tests.file.index',compact('file'));
    }
    public function filter(Request $request)
    {
        $c= $this->sear();
        $file = File::where('type',$request->type)->whereIn('course_id', $c)->orderBy('type')->get();
        return view('tests.file.index',compact('file'));
        
    }
    public function kelola(Course $course)
    {
        $file = File::where('course_id', $course->id)->get();
        // return view('tests.file.detail',compact(['file','course']));

        // V2
        return view('V2.Admin.kelola-produk.kelola-file',compact(['file','course']));
    }
    public function create(Course $course)
    {
        // return view('tests.file.create',compact(['course']));

        // V2
        return view('V2.Admin.kelola-produk.create-file',compact(['course']));
    }
    public function store(Request $request,$id)
    {
        File::create([
            'course_id' => $id,
            'nama' => $request->nama,
            'link' => $request->link,
            'type' => $request->type,
        ]);
        return redirect()->route('file.kelola',$id);
    }
    public function edit(File $file)
    {
        // return view('tests.file.edit',compact('file'));

        // V2
        return view('V2.Admin.kelola-produk.edit-file',compact(['file']));
    }
    public function update(Request $request,File $file)
    {
        
        $file->update([
            'nama' => $request->nama,
            'link' => $request->link,
            'type' => $request->type,
        ]);
        return redirect()->route('file.kelola',$file->course_id);
    }
    public function delete(File $file)
    {
        $file->delete();
        toastr()->success('Sukses Menghapus', 'success');
        return redirect()->back();
    }
}
