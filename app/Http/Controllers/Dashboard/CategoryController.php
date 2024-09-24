<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\DataTables\Dashboard\Admin\AdminDataTable;
use App\Models\Category;
use App\Models\CategoryTranslation;

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
            'parent' => 'nullable|exists:categories,id',
            'name.ar' => 'required|string|max:255',
            'name.en' => 'required|string|max:255',
            'description.ar' => 'nullable|string|max:1000',
            'description.en' => 'nullable|string|max:1000',
        ]);
    
        // Step 1: Create the Category (parent)
        $category = Category::create([
            'parent' => $request->input('parent'),
        ]);
    
        // Step 2: Add translations (CategoryTranslation)
        foreach (['ar', 'en'] as $locale) {
            CategoryTranslation::create([
                'category_id' => $category->id,
                'locale' => $locale,
                'name' => $validated['name'][$locale],
                'description' => $validated['description'][$locale] ?? null,
            ]);
        }
    
        // Redirect with success message
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }


    
}
