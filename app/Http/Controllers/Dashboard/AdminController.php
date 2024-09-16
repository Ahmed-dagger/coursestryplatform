<?php
namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AdminRepositoryInterface;
use App\DataTables\Dashboard\Admin\AdminDataTable;


class AdminController extends Controller implements AdminRepositoryInterface {

    public function __construct(protected AdminDataTable $adminDataTable, protected AdminRepositoryInterface $adminInterface) {
        $this->adminInterface = $adminInterface;
        $this->adminDataTable = $adminDataTable;
    }

    public function index(AdminDataTable $adminDataTable) {
        return $this->adminInterface->index($this->adminDataTable);
    }

    public function show($uuid) {
        $admin = Admin::whereHas('profile', function($query) use ($uuid) {
            $query->whereUuid($uuid);
        })->firstOrFail();
        //return view('admin.show', compact('admin'));
        return $admin;
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        

        return back()->with('success','Deleted successfully');
    }
    public function restore($id)
    {
        $admin = Admin::withTrashed()->findOrFail($id);
        if($admin -> trashed())
        {
            $admin->restore();
        }
        
        
        

        return back()->with('success','Restored successfully');
    }
}
