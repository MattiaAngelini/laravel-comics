@extends('layouts.app')

@section('content')
 
    <!--AppHero-->
    <section>
        <div class="hero">
            <img class="img-fluid" src="{{Vite::asset ('/resources/img/jumbotron.jpg')}}" alt="logo">
        </div>
    </section>
   
    <!--Cards-->
    <section class="container cards d-flex flex-wrap mt-5">
        
        @foreach ($comics as $comic)
            <div class="card col-2 p-3">

                <div class="d-flex flex-column">
                    <img src="{{ $comic['thumb'] }}" alt="comics" class="card-img-top">
                    <h5 class="card-title ms">{{ $comic['title'] }}</h5>
                </div>
                
            </div>
        @endforeach
    </section>

    <!--Shop-->
    <section class="shop">
        
        <ul class="container list-unstyled d-flex justify-content-between mt-5 p-4">
            @foreach ($linkshop as $link)
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset($link['image']) }}" alt="shop-logo">
                <h6 class="card-title p-2">{{ $link['title'] }}</h6>
            </li>
            @endforeach
        </ul>
      

    </section>
    
    
@endsection