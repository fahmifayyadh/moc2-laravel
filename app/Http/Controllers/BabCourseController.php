<?php

namespace App\Http\Controllers;

use App\Babcourse;
use App\Course;
use Illuminate\Http\Request;

class BabCourseController extends Controller
{
    public function index(Course $course)
    {
        $name = $course->name;
        $idd= $course->id;
        $course = Babcourse::where('course_id',$course->id)->with('course')->get();
        return view('tests.course.bab.detail',compact(['course','name','idd']));
    }
    public function create(Course $course)
    {
        return view('tests.course.bab.create',compact('course'));
    }
    public function store(Request $request, Course $course)
    {
       babCourse::create([
            'course_id' => $course->id,
            'name' => $request->name,
        ]);
        return redirect()->route('babCourse.index', $course->id);
    }
    public function edit(Babcourse $id)
    {
        $subCourse = $id;
        return view('tests.course.bab.edit', compact('subCourse'));
    }
    public function update(Request $request,Babcourse $id)
    {
        $id->update([
            'name' => $request->name,
        ]);
        return redirect()->route('babCourse.index', $id->course_id);
    }
    public function destroy(Babcourse $course)
    {
        $course->delete();
        return redirect()->back();
    }
}
