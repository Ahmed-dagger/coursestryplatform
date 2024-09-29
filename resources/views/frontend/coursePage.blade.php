@extends('frontend.includes.site')
@push('css')
@endpush
@section('pageTitle', $pageTitle)

@section('content')


    <div class="container-fluid justify-content-center align-items-center SubHeader">
        <div class="container align-items-center justify-content-center">
            <div class="row justify-content-center align-items-center">
                <div class="container d-flex  pt-5 mt-3">
                    <a class="text-decoration-none" href="{{ route('site.home') }}">
                        <h5 class="text-light pr-1">Home </h5>
                    </a>
                    <h6 class="text-danger d-flex">🔴</h6>
                    <a href="{{ route('site.courses') }}" class="text-decoration-none">
                        <h5 class="text-light pl-1">Courses</h5>
                    </a>
                    <h6 class="text-danger d-flex">🔴</h6>
                    <a href="#" class="text-decoration-none">
                        <h5 class="text-light pl-1">{{ $course->name }}</h5>
                    </a>

                </div>

                <div class="container d-flex mt-3">
                    <button class="badgeSail mt-2">-39%</button>
                    <p class="text-danger pt-2 ml-2">Angular Course</p>

                </div>

                <div class="container mt-3">
                    <h3 class=" text-light ">{{ $course->name }}</h3>
                </div>

                <div class="container d-flex mt-3">
                    <img src="../img/Bannerwoman.png" width="30" class="rounded-circle" alt="">
                    <h6 class="text-light pt-2 pl-3">{{ $teacher -> name }}</h6>
                    <h6 class="text-light pt-2 pl-3">|</h6>
                    <h6 class="pt-2 pl-3 text-light">Released At: {{ $course -> created_at }}</h6>
                </div>
                <div class="container py-4 d-flex mb-3">
                    <img width="25" height="25"
                        src="https://img.icons8.com/pastel-glyph/264/ffffff/person-male--v3.png" alt="person-male--v3" />
                    <h6 class="text-light pt-2">20 Student enrolled</h6>
                </div>

                <div class="col-sm">
                    <div class="mb-5">

                        <div class="">
                            <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Join Them Now</button>
                            </div>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">{{ $course->name }}</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="card shadow-sm">
                                    <div class="card-img-top">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                                allowfullscreen></iframe>
                                        </div>

                                    </div>
                                    <div class="card-body">



                                        <div class="container mb-5">
                                            <div class="justify-content-between d-flex">
                                                @if ($course->Price == 0)
                                                    <h5 class="text-danger">FREE</h5>
                                                @else
                                                    <h5 class="text-danger">{{ $course->Price }} USD</h5>
                                                @endif

                                                <button class="badgeSail">-39%</button>

                                            </div>
                                            <div class="justify-content-between d-flex border-bottom ">

                                                <p> <img class="mr-1" width="18" height="18"
                                                        src="https://img.icons8.com/material-outlined/128/vertical-settings-mixer.png"
                                                        alt="vertical-settings-mixer" />Level</p>
                                                <p>{{ $course->courseLevel }}</p>
                                            </div>
                                            <div class="justify-content-between d-flex border-bottom ">

                                                <p> <img class="mr-1" width="18" height="18"
                                                        src="https://img.icons8.com/ios-glyphs/128/clock--v1.png"
                                                        alt="clock--v1" />Watch Time</p>
                                                <p>16 Hours</p>
                                            </div>
                                            <div class="justify-content-between d-flex border-bottom ">

                                                <p> <img class="mr-1" width="18" height="18"
                                                        src="https://img.icons8.com/ios-filled/128/circled-play.png"
                                                        alt="vertical-settings-mixer" />Videos</p>
                                                <p>69 videos</p>
                                            </div>
                                            <div class="justify-content-between d-flex border-bottom ">

                                                <p> <img class="mr-1" width="18" height="18"
                                                        src="https://img.icons8.com/material-sharp/128/price-tag.png"
                                                        alt="vertical-settings-mixer" />Subject</p>
                                                <p>Angular</p>
                                            </div>
                                            <div class="justify-content-between d-flex border-bottom ">

                                                <p> <img class="mr-1" width="18" height="18"
                                                        src="https://img.icons8.com/ios-filled/128/language.png"
                                                        alt="vertical-settings-mixer" />Language</p>
                                                <p>{{ $course->courseLanguage }}</p>
                                            </div>

                                            <h5>Course Includes: </h5>
                                            <ul>
                                                <li>Angular</li>
                                                <li>FrameWorks</li>
                                                <li>DB</li>
                                            </ul>

                                        </div>

                                        <div class="container">

                                            <form action="" method="POST">

                                                @csrf
                                                <button class="LogINBtn" style="font-weight: 700;">
                                                    <img class="mb-1" width="20" height="20"
                                                        src="https://img.icons8.com/ios/128/ffffff/shopping-bag--v1.png"
                                                        alt="shopping-bag--v1" />
                                                    Buy This Course
                                                </button>
                                            </form>

                                        </div>

                                        <div class="mt-3">
                                            <h4>
                                                Related courses
                                            </h4>

                                            <div class="row d-flex mb-3">
                                                <div class="col-sm-6">

                                                    <img style="width: 100%;" src="../img/cardImage.jpeg" alt="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Python course 2020 (Full-guide)</h6>
                                                    <h6 class="text-danger">250 USD</h6>
                                                </div>

                                            </div>
                                            <div class="row d-flex mb-3">
                                                <div class="col-sm-6">

                                                    <img style="width: 100%;" src="../img/cardImage.jpeg" alt="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Python course 2020 (Full-guide)</h6>
                                                    <h6 class="text-danger">250 USD</h6>
                                                </div>

                                            </div>
                                            <div class="row d-flex mb-3">
                                                <div class="col-sm-6">

                                                    <img style="width: 100%;" src="../img/cardImage.jpeg" alt="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Python course 2020 (Full-guide)</h6>
                                                    <h6 class="text-danger">250 USD</h6>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <h3>About This Course</h3>
            <p>
                {{ $course -> desc }}
            </p>

        </div>

    </div>

    <div class="container CourseINclud">
        <div class="row">
            <h3 class="mt-3">what you will learn</h3>
            <div class="col-md">
                <div class="container justify-content-start">
                    <ul class="LearnList">
                        <li>you gonna leratn about Learn modern Angular, including standalone components & signals from the
                            ground up & in great detail!</li>
                        <li>you gonna leratn about Develop modern, complex, responsive and scalable web applications with
                            Angular</li>
                        <li>you gonna leratn about Learn TypeScript, a modern JavaScript superset, along the way </li>
                        <li>you gonna leratn about Create single-page or fullstack applications with one of the most modern
                            JavaScript frameworks out there</li>
                        <li>you gonna leratn about Create single-page or fullstack applications with one of the most modern
                            JavaScript frameworks out there</li>
                    </ul>

                </div>

            </div>

            <div class="col-md">
                <div class="container justify-content-end">
                    <ul class="LearnList">
                        <li>you gonna leratn about Learn modern Angular, including standalone components & signals from the
                            ground up & in great detail!</li>
                        <li>you gonna leratn about Develop modern, complex, responsive and scalable web applications with
                            Angular</li>
                        <li>you gonna leratn about Learn TypeScript, a modern JavaScript superset, along the way </li>
                        <li>you gonna leratn about Create single-page or fullstack applications with one of the most modern
                            JavaScript frameworks out there</li>
                        <li>you gonna leratn about Create single-page or fullstack applications with one of the most modern
                            JavaScript frameworks out there</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>


    <div class="container my-5">
        <h3 class="font-weight-bold my-4">Course Content</h3>
        <div class="accordion" id="accordionExample">
            
            @foreach ($playlists as $playlist)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $playlist -> id }}">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $playlist -> id }}" aria-expanded="true" aria-controls="collapse{{ $playlist -> id }}">
                  {{ $playlist -> name }}
                  </button>
                </h2>
                <div id="collapse{{ $playlist -> id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $playlist -> id }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    {{ $playlist-> desc }}
                  </div>
                </div>
              </div>
            @endforeach
        </div>

    </div>








    <div class="container">
        <h3 class="mb-5">The Tutor of the course</h3>
        <div class="row">
            <div class="col-sm-2">
                <img style="max-width: 100%" src="../img/GirlHomeBanner.png" alt="">

            </div>

            <div class="col-sm-5 ">
                <h3>{{ $teacher -> name }}</h3>
                {{-- <div class="d-flex flex-row mt-1 mb-4 text-danger">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="text-secondary pl-3">4.7/5</span>
                </div> --}}
                <div class="d-flex flex-row">
                    <img width="18" height="18" src="https://img.icons8.com/ios-filled/128/circled-play.png"
                        alt="circled-play" />
                    <p class="mx-2 pb-3">{{ $courseCount }} courses</p>
                    <img width="18" height="18" src="https://img.icons8.com/ios-glyphs/128/speech-bubble--v1.png"
                        alt="speech-bubble--v1" />
                    <p class="mx-2 pb-3">125 Videos</p>
                    <img width="18" height="18" src="https://img.icons8.com/ios-glyphs/128/person-male.png"
                        alt="person-male" />
                    <p class="mx-2 pb-3">120 Students Enrolled</p>
                </div>
                <button class="btn btn-outline-danger">Show More</button>




            </div>

        </div>

    </div>

    <div class="container my-5">
        <h3 class="my-5">Our students Reveiws</h3>
        <div class="row">
            <div class="col-sm-2 my-5 shadow-sm">
                <h2 class="text-danger text-center">4.4</h2>
                <p class="text-center">8 Reviews</p>
            </div>

            <div class="col-sm-7 justify-content-center text-center align-items-center">
                <div class="container justify-content-center text-center align-items-center d-flex">
                    <p>75%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-secondary pl-3">4.7/5</span>
                    </div>
                </div>
                <div class="container justify-content-center text-center align-items-center d-flex">
                    <p>75%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-secondary pl-3">4.7/5</span>
                    </div>
                </div>
                <div class="container justify-content-center text-center align-items-center d-flex">
                    <p>75%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-secondary pl-3">4.7/5</span>
                    </div>
                </div>
                <div class="container justify-content-center text-center align-items-center d-flex">
                    <p>75%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-secondary pl-3">4.7/5</span>
                    </div>
                </div>

            </div>

        </div>

    </div>


    @push('js')
    @endpush
@endsection
