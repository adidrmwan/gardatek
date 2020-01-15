@extends('layouts.master')

@section('content')
      @include('components.header')
      <section class="hero-wrap" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>News and Events</span></p>
	            <h1 class="mb-5 bread">News and Events</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <section class="ftco-section bg-light">
	      <div class="container">
	        <div class="row d-flex">
                <div class="col-md-2 ftco-animate">
                </div>
	          <div class="col-md-8 ftco-animate">
	            <div class="blog-entry align-self-stretch d-flex">
	              <a href="#" class="block-20 order-md-last d-flex justify-content-center align-items-center" style="background-image: url('images/image_1.jpg');">
	              </a>
	              <div class="text p-4 d-block">
	                <h3 class="heading mt-3">There is no news and events</h3>
	              </div>
	            </div>
	          </div>

	        </div>
	      </div>
	    </section>

@endsection