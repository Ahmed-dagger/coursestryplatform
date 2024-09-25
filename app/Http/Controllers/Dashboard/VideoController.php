<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\VideoRepositoryInterface;
use App\DataTables\Dashboard\Admin\VideoDataTable;
use App\Jobs\StreamVideo;
use App\Models\Course;
use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Foundation\Bus\DispatchesJobs;  // Add this

class VideoController extends Controller implements VideoRepositoryInterface
{
    use DispatchesJobs;  // Add this

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
        $video = Video::FindOrFail($request->video_id);
        $video->update([
            'name'  => $request->name,
            'path'  => $request->file('video')->store('videos'),
        ]);


        $this->dispatch(new StreamVideo($video));
        return $video;
    }

    public function show(Video $video)
    {
        return $video;

    }// end of show
}
