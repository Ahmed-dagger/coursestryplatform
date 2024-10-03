<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AcademiesController extends Controller
{
    public function __invoke()
    {
        $academies = Academic::all();

        return view('frontend.Academies', ['pageTitle' => trans('site/site.academy_page_title')], compact('academies'));
    }

    public function show($id)
    {
        $academy = Academic::with(['categories.courses', 'teachers'])->findOrFail($id);

        // Retrieve the related data from the loaded relationships
        $teachers = $academy->teachers; // Already eager-loaded
        $categories = $academy->categories; // Already eager-loaded

        // You can get the courses by looping through categories
        $courses = $categories->flatMap(function ($category) {
            return $category->courses; // This retrieves courses for each category
        });

        return view('frontend.academiesProfile', ['pageTitle' => trans('site/site.academy_page_title')], compact('academy', 'categories', 'teachers', 'courses'));
    }
}
