<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\DataTables\Dashboard\Admin\CourseDataTable;

class CoursesController extends Controller implements CourseRepositoryInterface
{
    public function __construct(protected CourseDataTable $courseDataTable, protected CourseRepositoryInterface $courseRepositoryInterface) {
        $this->courseRepositoryInterface = $courseRepositoryInterface;
        $this->courseDataTable = $courseDataTable;
    }

    public function index(CourseDataTable $courseDataTable) {
        return $this->courseRepositoryInterface->index($this->courseDataTable);
    }
}
