@extends('dashboard.layouts.master')

@push('css')
    <style>
        #video_upload-wrapper {
            margin:20px;
            display: flex;
            justify-content: center;
            align-items:center;
            height: 25vh;
            cursor: pointer;
            border: 1px solid black;
            flex-direction: column;
        }
        .progress {
            padding: 10px;
            border-radius:5px;

        }
    </style>
@endpush('css')

@section('pageTitle'){{ $pageTitle }}@endsection
@section('content')
@include('dashboard.layouts.common._partial.messages')


    <div class="card">
        <div id="video_upload-wrapper"
            onclick="document.getElementById('video_input-file').click()"
            >
            <i class="fa fa-video fa-3x"></i>
            <span>Click To Upload</span>
        </div>
        <input
            type="file"
            name=""
            data-video-id="{{ $video->id }}"
            data-url="{{ route('admin.videos.store') }}"
            id="video_input-file"
            style="display: none">

        <form id="video_properties" class="form" method="POST" action="{{ route('admin.videos.update', $video->id) }}" style="display: none" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="" style="margin-bottom:11px;">Uploading ...</label>
                    <div class="progress" id="video_upload-progress" role="progressbar"></div>
                </div>
                @include('dashboard.Admin.videos.form')
                <div class="">
                    <div class="row my-4 mx-3">
                        <div class="col-lg-10 text-lg-right">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

   
@endpush
