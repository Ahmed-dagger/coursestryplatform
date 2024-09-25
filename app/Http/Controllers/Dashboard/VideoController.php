<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\VideoRepositoryInterface;
use App\DataTables\Dashboard\Admin\VideoDataTable;
use App\Models\Course;
use App\Models\Video;
use App\Models\Playlist;

class VideoController extends Controller implements VideoRepositoryInterface
{
    public function __construct(protected VideoDataTable $videoDataTable, protected VideoRepositoryInterface $videoRepositoryInterface) {
        $this->videoRepositoryInterface = $videoRepositoryInterface;
        $this->videoDataTable = $videoDataTable;
    }

    public function index(VideoDataTable $videoDataTable) {
        return $this->videoRepositoryInterface->index($this->videoDataTable);
    }

    public function create()
    {
        $playlists = Playlist::get();
        $video = Video::create([]);
        return view('dashboard.Admin.videos.create', [
            'pageTitle' => trans('dashboard/admin.playlists')],
            compact('playlists', 'video'));

    }

    public function store(Request $request)
    {
        return $request->all();
    }

}
