<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function __invoke() {

        $courses = Course::all();

        return view('frontend.courses', ['pageTitle' => trans('site/site.course_page_title')],compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $teacher = $course->teacher;
        $playlists = $course->playlist;
        $courseCount = $teacher->course()->count();


        return view('frontend.coursePage' ,['pageTitle' => trans('site/site.course_page_title')],compact('course','teacher' ,'courseCount' ,'playlists') );
    }
}
