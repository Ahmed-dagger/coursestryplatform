<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\DataTables\Dashboard\Admin\AdminDataTable;
use App\Models\Category;

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

    public function create()
    {
        return view('dashboard.Admin.categories.create', ['pageTitle' => trans('dashboard/admin.categories')] );

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000', // Adjust length if needed
            
        ]);

        // Create a new playlist record
        Category::create([
            'name' => $validated['name'],
            'description' => $validated['description'], 
        ]);

        return redirect()->route('admin.playlist.playlists.index')->with('success', 'Admin created successfully.');
    }


    
}
