<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AcademicRepositoryInterface;
use App\DataTables\Dashboard\Admin\AcademicDataTable;
use App\Models\Academic;
use Illuminate\Support\Facades\Hash;



class AcademicController extends Controller implements AcademicRepositoryInterface
{
    public function __construct(protected AcademicDataTable $academicDataTable, protected AcademicRepositoryInterface $academicInterface) {
        $this->academicInterface = $academicInterface;
        $this->academicDataTable = $academicDataTable;
    }

    public function index(AcademicDataTable $teacherDataTable) {
        return $this->academicInterface->index($this->academicDataTable);
    }

    public function show($uuid) {
        $academic = Academic::whereHas('profile', function($query) use ($uuid) {
            $query->whereUuid($uuid);
        })->firstOrFail();
        //return view('admin.show', compact('admin'));
        return $academic;
    }


    public function create()
    {
        return view('dashboard.Admin.academics.create', ['pageTitle' => trans('dashboard/admin.academics')]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:academics,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed', // Ensure passwords match
            'status' => 'required|in:active,inactive',
        ]);

        Academic::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => bcrypt($validated['password']), // Hash the password
            'status' => $validated['status'],
        ]);

        return redirect()->route('admin.academics.index')->with('success', 'Academic created successfully.');
    }

    public function destroy($id)
    {
        $academic = Academic::findOrFail($id);
        $academic->delete();
        

        return back()->with('success','Deleted successfully');
    }
    public function restore($id)
    {
        $academic = Academic::withTrashed()->findOrFail($id);
        if($academic -> trashed())
        {
            $academic->restore();
        }
        return back()->with('success','Restored successfully');
    }


    public function edit($id)
    {
        $academic = Academic::findOrFail($id);

        return view('dashboard.Admin.academics.edit', ['pageTitle' => trans('dashboard/admin.academics')] , compact(['academic']));
    }

    public function update(Request $request,$id)
    {
        $academic = Academic::findOrFail($id);


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:academics,email,' . $id,
            'phone' => 'required|string|max:20',
            'password' => 'nullable|string|min:6|confirmed', // Ensure passwords match
            'status' => 'required|in:active,inactive',
        ]);

        if (!empty($request->password)) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            // Remove the password field from the validated data if the user didn't change it
            unset($validatedData['password']);
        }

        
    
        if ($academic) {
            // Update the playlist with validated data
            $academic->update($validatedData);
    
            // Redirect with a success message
            return redirect()->route('admin.academics.index')->with('success', 'Academic updated successfully.');
        } 
        
        else {
            // Handle the case where the playlist is not found
            return redirect()->route('admin.academics.index')->with('error', 'Course not found.');
        }
    }
}
