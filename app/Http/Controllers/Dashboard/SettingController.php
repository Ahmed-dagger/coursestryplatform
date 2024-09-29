<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\DataTables\Dashboard\Admin\CourseDataTable;
use App\Models\Category;
use App\Models\Course;
use App\Models\Playlist;
use App\Models\Teacher;

class SettingController extends Controller
{
    public function index() {
        return view('dashboard.Admin.settings', ['pageTitle' => trans('dashboard/header.settings')]);
    }

    public function store(Request $request) {
        setting($request->all())->save();
        session()->flash('success', 'Data added successfully');
        return redirect()->back();
    }
}
