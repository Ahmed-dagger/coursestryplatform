<?php

namespace App\DataTables\Dashboard\Admin;

use App\Models\Admin;

use App\DataTables\Base\BaseDataTable;
use App\Models\Playlist;
use Flasher\Laravel\Http\Request;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\Utilities\Request as DataTableRequest;

class PlaylistDataTable extends BaseDataTable
{

    protected function getParameters() {
        $parameters = parent::getParameters();
            $parameters['buttons'][] = [
                'text' => "<i class='fa fa-trash'></i> " . trans('dashboard/datatable.deleted'),
                'className' => 'btn btn-danger',
                'action' => '
                function(e, dt, node, config) {
                 window.location.href = "' . route('admin.admins.index' , ["filter"=>"deleted"]) . '"; } 
                 '
            ];
        

        

        
        return $parameters;
    }
    public function __construct(DataTableRequest $request)
    {
        parent::__construct(new Playlist());
        $this->request = $request;
    }

    public function dataTable($query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Playlist $playlist) {
                return view('dashboard.admin.admins.btn.actions', compact('admin'));
            })
            ->editColumn('created_at', function (Playlist $playlist) {
                return $this->formatBadge($this->formatDate($playlist->created_at));
            })
            ->editColumn('updated_at', function (Playlist $playlist) {
                return $this->formatBadge($this->formatDate($playlist->updated_at));
            })
            ->editColumn('deleted_at', function (Playlist $playlist) {
                return $this->formatBadge($this->formatDate($playlist->deleted_at));
            })
            ->editColumn('name', function (Playlist $playlist) {
                return '<a href="' . route('admin.admins.show', $playlist->profile->uuid) . '">' . $playlist->name . '</a>';
            })
            ->editColumn('status', function (Playlist $playlist) {
                return $this->formatStatus($playlist->status);
            })
            ->rawColumns(['action', 'created_at', 'updated_at','deleted_at', 'status', 'name']);
    }

    public function query(): QueryBuilder
    {
        return Playlist::query();
    }

    public function getColumns(): array
    {
        return [
            ['name' => 'id', 'data' => 'id', 'title' => '#', 'orderable' => false, 'searchable' => false,],
            ['name' => 'name', 'data' => 'name', 'title' => trans('dashboard/admin.name'),],
            ['name' => 'desc', 'data' => 'desc', 'title' => trans('dashboard/admin.desc'),],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => trans('dashboard/general.created_at'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => trans('dashboard/general.updated_at'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'deleted_at', 'data' => 'deleted_at', 'title' => trans('dashboard/general.deleted_at'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => trans('dashboard/general.actions'), 'orderable' => false, 'searchable' => false,],
        ];
    }
}
