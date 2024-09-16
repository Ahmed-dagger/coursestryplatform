@extends('dashboard.layouts.master')

@section('css')

@endsection

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('content')
    @include('dashboard.layouts.common._partial.messages')
    <div id="kt_content_container" class="container-xxl">
        <div class="mb-5 card card-xxl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="pt-5 border-0 card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="mb-1 card-label fw-bolder fs-3">{{$pageTitle}}</span>
                    <span class="mt-1 text-muted fw-bold fs-7">{{$pageTitle}}</span>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" >
                    </div>
                </h3>
            </div>
            <div class="py-3 card-body">
                <!--begin::Table container-->
                <div id="jstree"></div>
                <!--end::Table container-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <!--begin::Body-->
        </div>
@endsection

@push('js')

<script>
    $('#jstree').jstree({
    "core" : {

        'data' : {!! loadcategories(old('parent')) !!},
        "themes" : {
        "variant" : "large"
      }

    },

    "checkbox" : {
      "keep_selected_style" : false
    },
    "plugins" : [ "wholerow", "checkbox" ]
  });
</script>




@endpush
