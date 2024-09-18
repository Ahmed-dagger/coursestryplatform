<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\DataTables\Dashboard\Admin\PlaylistDataTable;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Playlist;
use App\Models\Teacher;
use App\Repositories\Contracts\PlaylistRepositoryInterface;

class PlaylistController extends Controller implements PlaylistRepositoryInterface
{
    public function __construct(protected PlaylistDataTable $playlistDataTable, protected PlaylistRepositoryInterface $playlistRepositoryInterface) {
        $this->playlistRepositoryInterface = $playlistRepositoryInterface;
        $this->playlistDataTable = $playlistDataTable;
    }

    public function index(PlaylistDataTable $playlistDataTable) {
        return $this->playlistRepositoryInterface->index($this->playlistDataTable);
    }

    public function create()
    {
        $categories = Category::all();
        $teachers = Teacher::all();

        return view('dashboard.Admin.playlists.create',
                     ['pageTitle' => trans('dashboard/admin.playlists')] 
                     ,compact(['categories','teachers']));

    }

    public function show()
    {
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000', // Adjust length if needed
            'teacher_id' => 'required|exists:teachers,id',
            'category_id' => 'sometimes|nullable',
        ]);

        // Create a new playlist record
        Playlist::create([
            'name' => $validated['name'],
            'desc' => $validated['description'],
            'teacher_id' => $validated['teacher_id'], 
            
        ]);

        return redirect()->route('admin.playlist.playlists.index')->with('success', 'Playlist created successfully.');
    }

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();
        

        return back()->with('success','Deleted successfully');
    }public function restore($id)
    {
        $playlist = Playlist::withTrashed()->findOrFail($id);
        if($playlist -> trashed())
        {
            $playlist->restore();
        }
        
        
        

        return back()->with('success','Restored successfully');
    }
}
