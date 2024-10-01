<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AcademiesController extends Controller
{
    public function __invoke() {

        $academies = Academic::all();

        return view('frontend.Academies', ['pageTitle' => trans('site/site.academy_page_title')],compact('academies'));
    }

    public function show($id)
    {
        $academy = Academic::findOrFail($id);

        return view('frontend.academiesProfile', ['pageTitle' => trans('site/site.academy_page_title')],compact('academy'));


    }
}
