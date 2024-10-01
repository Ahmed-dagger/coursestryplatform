@extends('frontend.includes.site')
@push('css')

@endpush
@section('pageTitle', $pageTitle)

@section('content')

<div class="container-fluid justify-content-center align-items-center SubHeader">
    <div class="container align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="container pt-5">
                <h3 class="text-center text-light py-4">Academies</h3>

            </div>
            <div class="container d-flex text-center justify-content-center pb-5">
                <a class="text-decoration-none" href="{{ route('site.home') }}">
                    <h5 class="text-light pr-1">Home </h5>
                </a>
                <h6 class="text-danger d-flex">🔴</h6>
                <a href="{{ route('site.academies') }}" class="text-decoration-none">
                    <h5 class="text-light pl-1">Academies</h5>
                </a>

            </div>


        </div>

    </div>

</div>


<div class="container-fluid TeamMembers">
    <div class="container justify-content-center d-flex my-4">
        <h2 class="text-center font-weight-bold my-5">Our Associated academies</h2>
    </div>
    <div class="container text-center justify-content-center text-center TeamMembers">
        <div class="row g-3 mb-4">
            
            @foreach ($academies as $academy)

            <div class="col-sm justify-content-center text-center">
                <a href="{{ route('site.academies.show', $academy->id ) }}"><img class="rounded-circle img-fluid MembersImg" src="{{ $academy->getdefImageUrl($academy-> name ) }}" alt=""></a>
                <div class="container my-3">
                   <a class="text-decoration-none text-dark" href="{{ route('site.academies.show', $academy->id ) }}"> <h5 class="text-dark text-center">{{ $academy-> name }}</h5></a>

                </div>

            </div>
                
            @endforeach
        </div>
    </div>
</div>





@push('js')
    
@endpush
@endsection