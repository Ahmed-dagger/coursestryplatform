$(document).ready(function() {
    $('#video_input-file').on('change', function() {
        $('#video_upload-wrapper').css('display', 'none');
        $('#video_properties').css('display', 'block');

        var video = this.files[0];
        var videoName = video.name.split('.').slice(0, -1).join('.');
        var videoId = $(this).data('video-id');
        var url = $(this).data('url');

        $('#video_name').val(videoName);

        var formData = new FormData();
        formData.append('video_id', videoId);
        formData.append('name', videoName);
        formData.append('video', video);
        console.log(url);
        $.ajax({
            url: url,
            data: formData,
            method: 'POST',
            processData: false,
            contentType: false,
            cache: false,

            success: function(video) {

            },
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(evt) {
                    if(evt.lengthComputable) {
                        var percentComplete = Math.round(evt.loaded / evt.total * 100) + "%";
                    }
                }, false);
                return xhr;
            }
        })
    });
});
