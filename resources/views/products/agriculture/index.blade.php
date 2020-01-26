@extends('layouts.master')

@section('content')

@include('components.header')
<section class="hero-wrap" style="background-image: url(images/our-products.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('our-products.index')  }}">Product</a></span> </p>
                <h1 class="mb-5 bread">Agriculture</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Seedburo</h3>
                    <img src="images/seedburo_logo.png" alt="" class="img-fluid">

                    <div class="p-4">
                        <p><a href="http://seedburo.com" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>

                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Dickey-john</h3>
                    <img src="images/dickey_logo.png" alt="" class="img-fluid">

                    <div class="p-4">
                        <p><a href="http://dickey-john.com" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>

                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Kett Science of Sensing</h3>
                    <img src="images/kett_logo.png" alt="" class="img-fluid">

                    <div class="p-4">
                        <p><a href="http://kett.com" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
		        
		      </div>
		    </div>
		  </section>
@endsection