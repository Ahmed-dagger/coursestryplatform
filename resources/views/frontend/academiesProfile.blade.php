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
                                    <img src="{{ $academy->getdefImageUrl($academy-> name) }}" class="rounded-circle AcademyImg"
                                        alt="Profile Image" width="50" height="50">
                                    <h5 class="card-title">{{$academy->name }}</h5>
                                    <p class="card-text">1250 Subscriber</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center mb-3">
                                <a href=""><button
                                        class="ConfgButton me-2">Configuration</button></a>
                                <a href="AddingCourses" class="  text-decoration-none"><button
                                        class="ConfgButton d-flex text-center">Add Courses</button></a>
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
                        role="tab" aria-controls="courses" aria-selected="false">Courses and Training</a>
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
                                <p>Views</p>
                                <h4 class="text-danger counter" data-count="0">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Tutors</p>
                                <h4 class="text-danger counter" data-count="0">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center text-center AcadmeyCounter">
                                <p>Students</p>
                                <h4 class="text-danger counter" data-count="0">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Courses</p>
                                <h4 class="text-danger counter" data-count="0">0</h4>
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
                           courses here
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
                <a href="{{ route('site.courses') }}"><button class="btn btn-danger text-light">Look for courses</button></a>
            </div>



            <div class="col-md-5 justify-content-start">
                <img src="img/freepik-export-20240701083100pwgA.png" class="BannerAcademyImg pt-5" alt="">

            </div>

        </div>

    </div>


    @push('js')
    @endpush

@endsection
