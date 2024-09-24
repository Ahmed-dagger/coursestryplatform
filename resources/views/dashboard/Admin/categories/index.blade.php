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
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" >
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-light btn-active-primary" >
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->اضافة فئة جديدة</a>
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
