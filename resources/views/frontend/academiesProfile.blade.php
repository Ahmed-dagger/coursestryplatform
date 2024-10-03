@extends('frontend.includes.site')
@push('css')
@endpush
@section('pageTitle', $pageTitle)

@section('content')


    <!--Profile-->
    <div class="container mt-5 Profile">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">

                        <div class="ProfileInfo">
                            <div class="profile-section mb-3">

                                <div class="container text-center my-5">
                                    <img src="{{ $academy->getdefImageUrl($academy->name) }}"
                                        class="rounded-circle AcademyImg" alt="Profile Image" width="50" height="50">
                                    <h5 class="card-title">{{ $academy->name }}</h5>
                                    <p class="card-text">0 Subscriber</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center mb-3">
                                {{-- <a href=""><button
                                        class="ConfgButton me-2">Configuration</button></a>
                                <a href="AddingCourses" class="  text-decoration-none"><button
                                        class="ConfgButton d-flex text-center">Add Courses</button></a> --}}
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 col-md-12">

    </div>

    <div class="container">

        <div class="justify-content-center">
            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active TabsTitle text-danger" id="info-tab" data-bs-toggle="tab" href="#info"
                        role="tab" aria-controls="info" aria-selected="true">Academy information</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link TabsTitle text-danger" id="courses-tab" data-bs-toggle="tab" href="#courses"
                        role="tab" aria-controls="courses" aria-selected="false">Categories and Courses</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link TabsTitle text-danger" id="instructors-tab" data-bs-toggle="tab" href="#instructors"
                        role="tab" aria-controls="courses" aria-selected="false">Instructors</a>
                </li>
            </ul>
            <br>
            <div class="mt-4 col-md-12">

            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">

                    <div class="container justify-content-center">
                        <div class="row text-center gx-5 justify-content-center CounterRow">
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Categories</p>
                                <h4 class="text-danger counter" data-count="{{ count($categories) }}">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Tutors</p>
                                <h4 class="text-danger counter" data-count="{{ count($teachers) }}">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center text-center AcadmeyCounter">
                                <p>Students</p>
                                <h4 class="text-danger counter" data-count="0">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Courses</p>
                                <h4 class="text-danger counter" data-count="{{ count($courses) }}">0</h4>
                            </div>

                        </div>
                    </div>


                    <div class="container">
                        <div class="row g-3">
                            <div class="class col-md-5">


                            </div>
                            <div class="class col-md-7" data-aos="fade-right">

                            </div>
                        </div>

                    </div>



                </div>



                <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                    <div class="container mt-5">
                        <div class="row g-3">
                            <div class="container my-4 carouselContainer">
                                <div id="categoryCarousel" class="carousel slide carousel-dark" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($categories->chunk(5) as $chunkIndex => $chunk)
                                            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                                                <div class="d-flex justify-content-center flex-wrap">
                                                    @foreach ($chunk as $category)
                                                        <button class="text-center category-Btn m-1"
                                                            data-content-id="content-{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </button>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev mr-5" href="#categoryCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon CarousalControl" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next ml-5" href="#categoryCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon CarousalControl"
                                            aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>










                            <div id="contentDisplay" class="mt-4">

                                @foreach ($categories as $category)
                                    <div id="content-{{ $category->id }}" class="content">
                                        <div class="container">
                                            <div class="row g-3">

                                                @php
                                                    // Filter the courses that belong to this category
                                                    $relatedCourses = $courses->filter(function ($course) use (
                                                        $category,
                                                    ) {
                                                        return $course->category_id == $category->id;
                                                    });
                                                    
                                                @endphp

                                                <!-- Check if the category has related courses -->
                                                @if ($relatedCourses->isNotEmpty())
                                                    @foreach ($relatedCourses as $course)
                                                        <div class="col-md-3 mb-4">
                                                            @include(
                                                                'frontend.includes.components.coursecard',
                                                                ['course' => $course]
                                                            )
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Display "Can't find what you are looking for" only if no courses are found -->
                                                    <div
                                                        class="container justify-content-center align-items-center text-center my-5">
                                                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                        <lord-icon src="https://cdn.lordicon.com/pagmnkiz.json"
                                                            trigger="loop" stroke="bold"
                                                            colors="primary:#c71f16,secondary:#ee6d66"
                                                            style="width:250px;height:250px">
                                                        </lord-icon>
                                                        <h3 class="text-center">Can't find what you are looking for</h3>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Default content -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="instructors" role="tabpanel" aria-labelledby="instructors-tab">
                    <div class="container-fluid TeamMembers">
                        <div class="container justify-content-center d-flex my-4">
                            <h2 class="text-center font-weight-bold my-5">Our Collabrated Teachers</h2>
                        </div>
                        <div class="container text-center justify-content-center text-center TeamMembers">
                            <div class="row g-3 mb-4">

                                @foreach ($teachers as $teacher)
                                    <div class="col-sm justify-content-center text-center">
                                        <a href="">
                                            <img class="rounded-circle img-fluid MembersImg"
                                                src="{{ $teacher->getdefImageUrl($teacher->name) }}" alt=""></a>
                                        <div class="container my-3">
                                            <a class="text-decoration-none text-dark" href="">
                                                <h5 class="text-dark text-center">{{ $teacher->name }}</h5>
                                            </a>

                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="container-fluid BannerAcademyinfo align-items-center my-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7  text-center BannerCol align-items-center">
                <h5 class="text-light align-items-center BannerAcademyHead">Best blace for enhancing your skills</h5>
                <p class="text-light BannerAcademyP">Access for easy learning <br>
                    Access for courses forever <br>
                    Expert tutors
                </p>
                <a href="{{ route('site.courses') }}"><button class="btn btn-danger text-light">Look for
                        courses</button></a>
            </div>



            <div class="col-md-5 justify-content-start">
                <img src="img/freepik-export-20240701083100pwgA.png" class="BannerAcademyImg pt-5" alt="">

            </div>

        </div>

    </div>


    @push('js')
    @endpush

@endsection
