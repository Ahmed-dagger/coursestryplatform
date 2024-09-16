<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutContactController extends Controller
{
    public function About()
    {   
        return view('frontend.About', ['pageTitle' => trans('site/site.About_page_title')]);
    }

    public function Contact()
    {   
        return view('frontend.Contact', ['pageTitle' => trans('site/site.Contact_page_title')]);
    }
}
