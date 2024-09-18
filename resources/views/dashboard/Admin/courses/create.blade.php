@extends('dashboard.layouts.master')

@section('css')
@endsection

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section('content')
    @include('dashboard.layouts.common._partial.messages')

    <form class="form" method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>الاسم:</label>
                <input name="name" type="text" class="form-control form-control-solid" placeholder="ادخل اسم القائمة"
                    value="{{ old('name') }}" />
                <span class="form-text text-muted">ادخل اسم القائمة كاملا</span>
            </div>
            <div class="form-group">
                <label>الوصف:</label>
                <input name="description" type="text" class="form-control form-control-solid"
                    placeholder="ادخل وصف القائمة" value="{{ old('email') }}" />
                <span class="form-text text-muted">ادخل وصف القائمة</span>
            </div>
            <div class="form-group">
                <label> القائمة:</label>
                <div class="checkbox-list">
                    @foreach ($playlists as $playlist)
                        <label class="checkbox">
                            <input type="radio" name="playlist_id" value="{{ $playlist->id }}"
                                {{ old('playlist_id') == $playlist->id ? 'checked' : '' }} />
                            <span></span>
                            {{ $playlist->name }}
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <label> المشرف:</label>
                <div class="checkbox-list">
                    @foreach ($teachers as $teacher)
                        <label class="checkbox">
                            <input type="radio" name="teacher_id" value="{{ $teacher->id }}"
                                {{ old('teacher_id') == $teacher->id ? 'checked' : '' }} />
                            <span></span>
                            {{ $teacher->name }}
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" >$</span></div>
                    <input type="text" name="Price" class="form-control" placeholder="99.9"/>
                </div>
            </div>
            <div class="form-group">
				<label>File Browser</label>
				<div></div>
				<div class="custom-file">
					<input type="file" name="image" class="custom-file-input" id="customFile"/>
					<label class="custom-file-label" for="customFile">Choose file</label>
				</div>
            </div>
        </div>
        <div class="card-footer bg-none">
            <button type="submit" class="btn btn-primary mr-2">تأكيد</button>
            <button type="reset" class="btn btn-secondary">إلغاء</button>
        </div>
    </form>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endpush
