@extends('frontend.includes.site')
@push('css')
@endpush
@section('pageTitle', $pageTitle)

@section('content')
    <div>
        <div class="container-fluid Home-Banner justify-content-center align-items-center mt-3">
            <div class="row g-3 justify-content-center align-items-center">
                <div class="col-md p-5 g-3 justify-content-center align-items-center">
                    <div class="container">
                        <h2> {{  __('content/home-content.home_banner_title')}}</h2>
                        <p>{{  __('content/home-content.home_banner_subtitle')}}</p>
                    </div>
                    <div class="container mt-4">
                        <a href=""><button class="StartButton text-center"> {{  __('content/home-content.home_banner_start_button')}} </button></a> <a href="">
                            <button
                                class="WVideo text-center" > {{  __('content/home-content.home_banner_video_button')}} </button></a>
                    </div> <br>
                    <div class="container py-2">
                        <button class="text-center USersBtn">170+ <br> <span class="text-danger USersTitle">{{  __('content/home-content.home_banner_users_number')}}</span></button>
                        <button class="text-center USersBtn">940+ <br> <span class="text-danger USersTitle">{{  __('content/home-content.home_banner_Courses_number')}}</span></button>
    
                    </div>
                </div>
    
                <div class="col-md">
                    <img width="560px" class="homeBannerGirl" src="  {{ asset('dashboard/assets/img/GirlHomeBanner.png') }}" alt="">
                </div>
    
            </div>
    
        </div>
    
        <div class="mt-4 col-md-12">
            <!--Margin Space-->
        </div>
    
    
        <div class="container align-items-center">
            <div class="row justify-content-between g-3 d-flex align-items-center">
                <div class="col-sm align-items-center text-center">
                    <h3 class="text-center">{{  trans('content/home-content.home_course_category_title1')}} <span class="text-danger" style="font-weight: 700;">COURSES</span> {{  trans('content/home-content.home_course_category_title2')}}</h3>
    
                </div>
    
                <div class="col-sm text-right d-flex align-items-center">
                    <div class="container text-right">
                        <div class="search-container text-right d-flex">
    
                            <input type="text" class="search-input" placeholder="{{  __('content/home-content.home_course_search')}}">
                            <button class="search-button mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                        </div>
    
                    </div>
    
                </div>
            </div>
    
        </div>
    
        <div class="container my-4 carouselContiner">
          <div id="categoryCarousel" class="carousel slide carousel-dark" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="d-flex justify-content-center flex-wrap">
                          <button class="text-center category-Btn active m-1" data-content-id="content-1">UI/UX Design</button>
                          <button class="text-center category-Btn m-1" data-content-id="content-2">Development</button>
                          <button class="text-center category-Btn m-1" data-content-id="content-3">Data Science</button>
                          <button class="text-center category-Btn m-1" data-content-id="content-4">Business</button>
                          <button class="text-center category-Btn m-1" data-content-id="content-5">Financial</button>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="d-flex justify-content-center flex-wrap">
                          <button class="text-center category-Btn m-1">Category 6</button>
                          <button class="text-center category-Btn m-1">Category 7</button>
                          <button class="text-center category-Btn m-1">Category 8</button>
                          <button class="text-center category-Btn m-1">Category 9</button>
                          <button class="text-center category-Btn m-1">Category 10</button>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev mr-5" href="#categoryCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon CarousalControl" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next ml-5" href="#categoryCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon CarousalControl" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    
    
    
    
    
    
    
      <div id="contentDisplay" class="mt-4">
        <!-- Default content -->
        <div id="content-1" class="content">
            
            <div class="container">
    
                <div class="row g-3">
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text text-center online">Online</p>
                                        <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                          </div>
        
                                    </div>
                                <h5 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                        
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
        
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center offline">Offline</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center online">Online</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center offline">Offline</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        <div id="content-2" class="content">
            
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/055.webp" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text text-center online">Online</p>
                                        <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                          </div>
        
                                    </div>
                                <h5 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                        
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
        
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/055.webp" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center offline">Offline</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center online">Online</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text text-center offline">Offline</p>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                      </div>
        
                                </div>
                                <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)</h5>
                                
                                
                                <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                          </svg>
                                        
                                        Riydah, Qasr Rabie</p>
        
                                    <p class="Location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                          </svg>
                                        
                                        50 videos</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        <div id="content-3" class="content">Content for Data Science</div>
        <div id="content-4" class="content">Content for Business</div>
        <div id="content-5" class="content">Content for Financial</div>
    </div>
    
        <div class="mt-4 col-md-12">
            <!--Margin Space-->
        </div>
        <div class="mt-4 col-md-12">
            <!--Margin Space-->
        </div>
        <div class="mt-4 col-md-12">
            <!--Margin Space-->
        </div>
    
    
        <div class="container justify-content-center">
    
            <div class="container text-center">
                <h2 class="text-center">{{  __('content/home-content.home_parteners_title')}}</h2>
    
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-sm justify-content-center text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image.png') }}" alt="">
        
                </div>
                <div class="col-sm text-center">
                    <img src="{{ asset('dashboard/assets/Parteners/Image-2.png') }}">
                </div>
                <div class="col-sm text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image-3.png') }}">
        
                </div>
                <div class="col-sm text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image-4.png') }}">
        
                </div>
        
        
            </div>
            <div class="mt-4 col-md-12">
                <!--Margin Space-->
            </div>
    
            <div class="row g-3">
                <div class="col-sm text-center">
                    <img src="{{ asset('dashboard/assets/Parteners/Image-5.png') }}" alt="">
        
                </div>
                <div class="col-sm text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image-6.png') }}">
        
                </div>
                <div class="col-sm text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image-7.png') }}">
        
                </div>
                <div class="col-sm text-center">
        
                    <img src="{{ asset('dashboard/assets/Parteners/Image-1.png') }}">
        
                </div>
        
        
            </div>
    
    
        </div>
    
        <div class="mt-5 col-md-12">
            <!--Margin Space-->
        </div>
    
        <div class="mt-5 col-md-12">
            <!--Margin Space-->
        </div>
        <div class="mt-5 col-md-12">
            <!--Margin Space-->
        </div>
    </div>

    @push('js')
    @endpush
@endsection
