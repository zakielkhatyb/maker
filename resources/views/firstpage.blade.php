@extends('layout.nav')

@section("content")
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="m-2 text-center  carousel-item active"> 
              <div class=" ">
                <a href="{{ route('tone') }}">
                  <img src="{{ asset('themes/theme1.jpeg') }}"  alt="" srcset=""></a>
               </div>
            </div>
            <div class="m-2  text-center carousel-item"> 
              <div class=" ">
                <a href="{{ route('ttwo') }}">
                  <img src="{{ asset('themes/theme2.jpeg') }}"  alt="" srcset="">
                </a>            
              </div>
            </div>
            <div class="m-2 text-center carousel-item">
              <div class=" ">
                <a href="{{ route('tthree') }}">
                  <img src="{{ asset('themes/theme3.jpeg') }}"  alt="" srcset="">
                </a>
               </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
@endsection