<?php

namespace App\Http\Controllers;

use \App\Course;
use App\Paket;
use \App\SubCourse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->generateID = mt_rand(1000000000,9999999999);
        $this->generateUnique = mt_rand(1000000000,9999999999);
    }
    public function index()
    {
        $c = Course::get();
        // return view('tests.course.index', compact('c'));

        // V2
        return view('V2.Admin.kelola-produk.course', compact('c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = Paket::get();
        return view('tests.course.form',compact('paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $fileName = null;
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
        ], $msg);
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/course/main/',$fileName);
        }
        $named = $request->name;
        $c = Course::create([
            'id'   => $this->generateID,
            'name' => Str::title($named),
            'slug' => Str::slug($named),
            'desc' => $request->desc,
            'image'=> $fileName,
            
        ]);
        return redirect()->route('babCourse.index', $c->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Course::where('slug',$slug)->firstOrFail();
        dd($course);
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $paket = Paket::get();
        // return view('tests.course.edit', compact(['course','paket']));

        // V2
        return view('V2.Admin.kelola-produk.edit-course', compact(['course','paket']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
            'commission' => 'numeric|nullable',
        ], $msg);
        
        $p = Course::findOrFail($id);
        $fileName = $p->image; 
        if ($request->file('image') != null) {
            File::delete(storage_path('app/public/course/main/'.$fileName));
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/course/main/',$fileName);
        }

        $named = $request->name;
        $p->update([
            'name' => Str::title($named),
            'slug' => Str::slug($named),
            'desc' => $request->desc,
            'image'=> $fileName,
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        $course->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $c = Course::where('name','like','%'.$request->name.'%')
        ->orWhere('desc',$request->desc)
        ->get();
        // ->orWhere('desc','like','%'.$request->desc.'%')
        // return view('tests.course.index', compact('c'));

        // V2
        return view('V2.Admin.kelola-produk.course', compact('c'));
    }
    public function paket()
    {
        $paket = Paket::with('course')->with('sales')->get();
        $course = Course::get();
        // return view('tests.course.paket',compact(['paket','course']));

        // V2
        return view('V2.Admin.kelola-produk.kelola-paket',compact(['paket','course']));
    }
    public function paketCreate()
    {
        // return view('tests.course.createpaket');

        // V2
        return view('V2.Admin.kelola-produk.create-paket');
    }
    public function paketStore(Request $request)
    {
        $fileName = null;
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
            'point_pembeli' => 'nullable|numeric|min:0',
            'point_sponsor' => 'nullable|numeric|min:0',
            'commission' => 'numeric|nullable',
            'batas' => 'nullable|numeric|numeric',
            'price' => 'nullable|numeric|min:0',
        ], $msg);
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/paket/',$fileName);
        }
        $named = $request->name;
        $c = Paket::create([
            'id'   => $this->generateID,
            'name' => Str::title($named),
            'slug' => Str::slug($named).Str::random(1),
            'desc' => $request->desc,
            'image'=> $fileName,
            'batas' => $request->batas,
            'price' => $request->price,
            'is_member' => $request->is_member,
            'point_pembeli' => $request->point_pembeli,
            'point_sponsor' => $request->point_sponsor,
            'commission' => $request->commission,
        ]);
        return redirect()->route('course.paket');
    }
    public function paketEdit(Paket $paket)
    {
        $course= $paket;
        // return view('tests.course.editpaket',compact('course'));

        // V2
        return view('V2.Admin.kelola-produk.edit-paket',compact('course'));
    }
    public function paketUpdate(Request $request,Paket $paket)
    {
        $msg = [
            'numeric' => 'Inputan :attribute harus berupa angka',
            'required' => 'Inputan :attribute wajib diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
            'commission' => 'numeric|nullable',
        ], $msg);
        $fileName = $paket->image; 
        if ($request->file('image') != null) {
            File::delete(storage_path('app/public/paket/'.$fileName));
            $file = $request->file('image');
            $fileName = substr(md5(microtime()), 0, 100).'.'.$file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/paket/',$fileName);
        }

        $named = $request->name;
    $paket->update([
        'name' => Str::title($named),
        'slug' => Str::slug($named),
        'desc' => $request->desc,
            'image'=> $fileName,
            'batas' => $request->batas,
            'price' => $request->price,
            'is_member' => $request->is_member,
            'point_pembeli' => $request->point_pembeli,
            'point_sponsor' => $request->point_sponsor,
            'commission' => $request->commission,
        ]);
        return redirect()->route('course.paket');
    }
    public function paketDelete(Paket $paket)
    {
        $paket->delete();
        return redirect()->back();
    }
    public function coursePaket(Request $request,Paket $paket)
    {
        $paket->course()->attach($request->course);
        return redirect()->back();
    }
    public function addCourseDelete(Request $request,Paket $paket)
    {
        $paket->course()->detach($request->courseId);
        return redirect()->back();
    }
}
