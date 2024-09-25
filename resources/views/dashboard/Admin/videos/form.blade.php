    <div class="form-group row" class="my-2">
        <div class="col-lg-6">
            <label class="mb-2">{{ __('dashboard/forms.fullname') }}</label>
            <input name="name" type="text" id="video_name" class="form-control form-control-solid" placeholder="Name"
                value="{{ old('name', isset($video) ? $video->name : '') }}" />
            <span class="form-text text-muted">Name</span>
        </div>
        <div class="col-lg-6">
            <label for="exampleTextarea" class="mb-2">{{ __('dashboard/forms.desc') }}</label>
            <textarea name="description" class="form-control form-control-solid" rows="1" placeholder="Description">{{ old('description', isset($video) ? $video->description : '') }}</textarea>
            <span class="form-text text-muted">Description</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label class="my-2">{{ __('dashboard/forms.courses') }}</label>
            <select name="playlist_id" id="playlist_id" class="form-control form-control-solid">
                <option value="">Select Your Playlist ...</option>
                @foreach ($playlists as $playlist)
                    <option value="{{ $playlist->id }}"
                        {{ old('playlist_id', isset($video) && $playlist->id == $video->playlist_id ? 'selected' : '') }}>
                        {{ $playlist->name }}
                    </option>
                @endforeach
            </select>
            <span class="form-text text-muted">Please select user group</span>
        </div>
    </div>
