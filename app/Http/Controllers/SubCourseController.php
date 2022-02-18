<?php

namespace App\Http\Controllers;

use App\Babcourse;
use \App\SubCourse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Babcourse $babCourse)
    {
        $course = SubCourse::where('babcourse_id', $babCourse->id)->with('babCourse')->get();
      
        $name   = $babCourse->name;
        // return view('tests.course.sub.detail', compact(['babCourse', 'course', 'name']));

        // V2
        return view('V2.Admin.kelola-produk.detail-sub-course', compact(['babCourse', 'course', 'name']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Babcourse $babCourse)
    {
        $course = $babCourse;
        // return view('tests.course.sub.create', compact('course'));

        // V2
        return view('V2.Admin.kelola-produk.create-sub-course', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        SubCourse::create([
            'babcourse_id' => $id,
            'name'         => $request->name,
            'sequence'     => $request->sequence,
            'value'        => $request->value,
        ]);
        return redirect()->route('subCourse.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCourse = SubCourse::findOrFail($id);
        // return view('tests.course.sub.edit', compact('subCourse'));

        // V2
        return view('V2.Admin.kelola-produk.edit-sub-course', compact('subCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $s = SubCourse::findOrFail($id);
        $s->update([
            'sequence' => $request->sequence,
            'name'     => $request->name,
            'value'    => $request->value,
        ]);
        return redirect()->route('subCourse.index', $s->babcourse_id);
        // return redirect()->route('test.c.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCourse $course)
    {
        $course->delete();
        toastr()->success('Sukses Menghapus', 'success');
        return redirect()->back();
    }
}
