<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\DataTables\Dashboard\Admin\PlaylistDataTable;
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
}
