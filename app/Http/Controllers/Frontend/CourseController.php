<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function __invoke() {
        return view('frontend.courses', ['pageTitle' => trans('site/site.course_page_title')]);
    }
}
