@extends('layouts.master')

@section('content')

@include('components.header')
<section class="hero-wrap" style="background-image: url(images/our-products.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('our-products.index')  }}">Product</a></p>
                <h1 class="mb-5 bread">Transportation Engineering</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Danobat</h3>
                    <img src="images/danobat.png" alt="" class="img-fluid">

                    <div class="p-4">
                        <p><a href="https://railways.danobatgroup.com/en/dynamic-bogie-test-rig" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Zephir</h3>
		            <img src="images/zephir.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://zephir.eu/en/electric-range/" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>

                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Intercomp</h3>
		            <img src="images/intercomp.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://www.intercompcompany.com/wheelandaxle_scales.html" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Trainwiegh</h3>
		            <img src="images/trainweigh.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://www.weighbridgeservices.co.uk//" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Komerční Železniční Výzkum</h3>
		            <img src="images/kzv.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://kzv.cz/services/" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>

                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Schenck Process</h3>
		            <img src="images/schenck.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="https://www.schenckprocess.com/products/multirail-bogieload-pro" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
                </div>
                
                <div class="col-md-4 mb-3 text-center ftco-animate">
		          <div class="pricing p-4 py-5">
		            <h3 class="mb-3">Universal Mechanism</h3>
		            <img src="images/universal.png" alt="" class="img-fluid">
		            <div class="p-4">
                        <p><a href="http://www.universalmechanism.com/en/plugins/catalogue/index.php?id=3" class="btn btn-primary px-4 py-3">More detail click here</a></p>
                    </div>
		          </div>
		        </div>
		        
		      </div>
		    </div>
		  </section>
@endsection