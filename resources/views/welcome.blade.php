@extends('layouts.master-home')

@section('content')
      @include('components.header')

      <section class="home-slider owl-carousel">
        <a href="#" class="slider-item" style="background-image: url(images/homepage-1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                
              </div>
            </div>
          </div>
        </a>

        <a href="#" class="slider-item" style="background-image: url('images/homepage-2.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                
              </div>
            </div>
          </div>
        </a>

        <a href="#" class="slider-item" style="background-image: url('images/homepage-3.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                
              </div>
            </div>
          </div>
        </a>

        <a href="#" class="slider-item" style="background-image: url('images/homepage-4.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                
              </div>
            </div>
          </div>
        </a>
      </section>

      <section class="ftco-counter" id="section-counter">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-md-7 py-sm-3 py-md-5">
            <h3 class="mb-3">About Us</h3> 
              <p>PT. GARDA <span style="color: #fe4c50;"> TEKNIKA </span> is a company with extensive experience in the instrumentation products for measurement, monitoring and Quality control. <br>Our products and control systems bring enormous advantages to industry and also education with greater effectiveness in the implementation of industrial processes and as a direct result the client takes advantage of a greater performance and higher profitability of the available means. </p>
		        </div>
		        <div class="col-md-5 d-flex justify-content-center align-items-center img exp" >
            <img src="images/logo.png" alt="logo-gardateknika" class="img-fluid" style="width:70%;">
		        </div>
	        </div>
	    	</div>
      </section>
      
        <section class="ftco-services">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-5 ftco-animate py-5 nav-link-wrap aside-stretch">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h3 class="ml-3">Our Products</h3>
                  <a class="nav-link px-4 active" id="v-pills-research-tab" data-toggle="pill" href="#v-pills-research" role="tab" aria-controls="v-pills-research" aria-selected="true"><span class="mr-3 flaticon-house-plans"></span> Material Research</a>

                  <a class="nav-link px-4" id="v-pills-agriculture-tab" data-toggle="pill" href="#v-pills-agriculture" role="tab" aria-controls="v-pills-agriculture" aria-selected="false"><span class="mr-3 flaticon-ideas"></span> Agriculture</a>

                  <a class="nav-link px-4" id="v-pills-automation-tab" data-toggle="pill" href="#v-pills-automation" role="tab" aria-controls="v-pills-automation" aria-selected="false"><span class="mr-3 flaticon-modern-house"></span>Automation System</a>

                  <a class="nav-link px-4" id="v-pills-engineering-tab" data-toggle="pill" href="#v-pills-engineering" role="tab" aria-controls="v-pills-engineering" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> Engineering</a>

                  <a class="nav-link px-4" id="v-pills-medicine-tab" data-toggle="pill" href="#v-pills-medicine" role="tab" aria-controls="v-pills-medicine" aria-selected="true"><span class="mr-3 flaticon-house-plans"></span> Medicine</a>

                  <a class="nav-link px-4" id="v-pills-energy-tab" data-toggle="pill" href="#v-pills-energy" role="tab" aria-controls="v-pills-energy" aria-selected="false"><span class="mr-3 flaticon-ideas"></span> Energy</a>

                  <a class="nav-link px-4" id="v-pills-transportation-tab" data-toggle="pill" href="#v-pills-transportation" role="tab" aria-controls="v-pills-transportation" aria-selected="false"><span class="mr-3 flaticon-modern-house"></span> Transportation Engineering</a>

                  <a class="nav-link px-4" id="v-pills-photonic-tab" data-toggle="pill" href="#v-pills-photonic" role="tab" aria-controls="v-pills-photonic" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> Photonic Technology & Smart</a>

                  <a class="nav-link px-4" id="v-pills-food-tab" data-toggle="pill" href="#v-pills-food" role="tab" aria-controls="v-pills-food" aria-selected="false"><span class="mr-3 flaticon-skyline"></span> Food Tech</a>
                </div>
              </div>
              <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">
                
                <div class="tab-content pl-md-5" id="v-pills-tabContent">

                  <div class="tab-pane fade show active py-5" id="v-pills-research" role="tabpanel" aria-labelledby="v-pills-research-tab">
                    <h2 class="mb-4">Material Research</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_1.jpeg" alt="material-research" class="img-fluid" style="width:100%;">
                    </div>
                    <p><a href="{{ route('material-research.index')}}" class="btn btn-primary px-4 py-3">Click Me</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-agriculture" role="tabpanel" aria-labelledby="v-pills-agriculture-tab">
                    
                    <h2 class="mb-4">Agriculture</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_5.jpg" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('agriculture.index') }}" class="btn btn-primary px-4 py-3">Click Me </a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-automation" role="tabpanel" aria-labelledby="v-pills-automation-tab">
                    
                    <h2 class="mb-4">Automation System</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_4.jpg" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{route('automation-system.index') }}" class="btn btn-primary px-4 py-3">Click Me </a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-engineering" role="tabpanel" aria-labelledby="v-pills-engineering-tab">
                    
                    <h2 class="mb-4">Engineering</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/engineering.png" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('engineering.index') }}" class="btn btn-primary px-4 py-3">Click Me</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-medicine" role="tabpanel" aria-labelledby="v-pills-medicine-tab">
                    
                    <h2 class="mb-4">Medicine</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/medicine.png" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('medicine.index') }}" class="btn btn-primary px-4 py-3">Click Me </a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-energy" role="tabpanel" aria-labelledby="v-pills-energy-tab">
                    
                    <h2 class="mb-4">Energy</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_7.jpg" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('energy.index') }}" class="btn btn-primary px-4 py-3">Click Me </a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-transportation" role="tabpanel" aria-labelledby="v-pills-transportation-tab">
                    
                    <h2 class="mb-4">Transportation Engineering</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_8.png" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('transportation-engineering.index') }}" class="btn btn-primary px-4 py-3">Click Me </a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-photonic" role="tabpanel" aria-labelledby="v-pills-photonic-tab">
                    
                    <h2 class="mb-4">Photonic Technology & Smart</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/banner_9.png" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('photonic-technology.index') }}" class="btn btn-primary px-4 py-3">Click Me</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-food" role="tabpanel" aria-labelledby="v-pills-food-tab">
                    
                    <h2 class="mb-4">Food Tech</h2>
                    <div style="margin-bottom:40px;">
                      <img src="images/foodtech.png" alt="material-research" class="img-fluid" style="width:70%;">
                    </div>
                    <p><a href="{{ route('food-tech.index') }}" class="btn btn-primary px-4 py-3">Click Me</a></p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="ftco-section bg-light">
            <div class="container">
              
              <div class="text-center">
                  <h3 class="mb-3">Latest Blogs</h3> 
              </div>
              
              <div class="row">
                
                <div class="col-md-4 mb-3 text-center ftco-animate">

                </div>
                <div class="col-md-4 mb-3 text-center ftco-animate">
                  <div class="pricing p-4 py-5">
                    <div class="icon mb-2"><span class="flaticon-skyline"></span></div>
                    <!-- <h3 class="mb-3">Standard Plan</h3> -->
                    <p class="mb-4">No Upcoming event and news</p>
                    <!-- <p><a href="" class="btn btn-primary px-4 py-3">More Info</a></p> -->
                  </div>
                </div>
                <div class="col-md-4 mb-3 text-center ftco-animate">

                </div>
              </div>
            </div>
          </section>
@endsection