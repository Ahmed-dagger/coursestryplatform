<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\DataTables\Dashboard\Admin\AdminDataTable;

class CategoryController extends Controller implements CategoryRepositoryInterface
{
    public function __construct(protected AdminDataTable $adminDataTable, protected CategoryRepositoryInterface $CategoryInterface) {
        $this->CategoryInterface = $CategoryInterface;
        $this->adminDataTable = $adminDataTable;
    }


    public function index(AdminDataTable $adminDataTable)
    {
        return $this->CategoryInterface->index($this->adminDataTable);
    }


    
}
