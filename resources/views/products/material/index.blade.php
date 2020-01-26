@extends('layouts.master')

@section('content')

@include('components.header')
<section class="hero-wrap" style="background-image: url(images/our-products.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('our-products.index')  }}">Product</a></span></p>
                <h1 class="mb-5 bread">Material Research</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Zwick / Roell</h3>
                    <img src="images/zwick_logo.png" alt="" class="img-fluid">

                    <div class="p-4">
                        <p><a href="https://www.zwick.com/static-materials-testing-machine" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Ossila enabling materials science</h3>
		            <img src="images/ossila.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://www.ossila.com/" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>

                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">TA Instruments</h3>
		            <img src="images/ta_instrument.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://www.tainstruments.com/" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Allied High Tech Products</h3>
		            <img src="images/allied.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="http://www.alliedhightech.com/" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Salt</h3>
		            <img src="images/salt.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="http://light-salt.kr/eng/product/product01.php?ptype=view&prdcode=1603310002" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
		        </div>
		        
		      </div>
		    </div>
		  </section>
@endsection