@extends('layouts.master')

@section('content')
    <div>
    @include('components.header')

      <section class="hero-wrap" style="background-image: url(images/our-products.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Product</span></p>
	            <h1 class="mb-5 bread">Our Products</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->
      <section class="ftco-section">
	    	<div class="container">
          <div class="row">
		    		<div class="col-md-4">
		    			<div class="row">
			    			<div class="col-md-12 heading-section ftco-animate mb-3">
								<h2 class="mb-4">Products</h2>
							</div>
	            		</div>
		    			<a href="{{ route('material-research.index') }}" class="portfolio ftco-animate">
		    				<div class="d-flex icon justify-content-center align-items-center">
		    					<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						Material Research
		    					</h3>
		    				</div>
		    				<img src="images/banner_1.jpeg" class="img-fluid" >
		    			</a>
		    			<a href="{{ route('agriculture.index') }}" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						Agriculture
		    					</h3>
		    				</div>
		    				<img src="images/banner_5.jpg" class="img-fluid" >
		    			</a>
		    			<a href="{{route('automation-system.index') }}" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
			    			</div>
			    			<div class="d-flex heading align-items-end">
		    					<h3>
		    						Automation System
		    					</h3>
		    				</div>
		    				<img src="images/banner_4.jpg" class="img-fluid" >
		    			</a>
		    		</div>
		    		<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
		    					<a href="{{ route('food-tech.index') }}" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
			    						<span class="ion-md-search"></span>
			    				  </div>
			    				  <div class="d-flex heading align-items-end">
				    					<h3>
				    						Food Tech
				    						
				    					</h3>
				    				</div>
				    				<img src="images/banner_foodtech_2.jpg" class="img-fluid" >
				    			</a>
		    				</div>
							<div class="col-md-8">
								<a href="{{ route('engineering.index') }}" class="portfolio ftco-animate">
									<div class="d-flex icon justify-content-center align-items-center">
											<span class="ion-md-search"></span>
									</div>
									<div class="d-flex heading align-items-end">
										<h3>
											Engineering
										</h3>
									</div>
									<img src="images/banner_engineering_2.jpg" class="img-fluid" >
								</a>
							</div>
							
						</div>
		    			<div class="row">
		    				<div class="col-md-6">
		    					<a href="{{ route('medicine.index') }}" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						Medicine
				    					</h3>
				    				</div>
				    				<img src="images/banner_medicine.jpg" class="img-fluid" >
				    			</a>
		    				</div>
		    				<div class="col-md-6">
		    					<a href="{{ route('energy.index') }}" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						Energy
				    					</h3>
				    				</div>
				    				<img src="images/banner_7.jpg" class="img-fluid" >
				    			</a>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-8">
		    					<a href="{{ route('transportation-engineering.index') }}" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						Transportation Engineering
				    					</h3>
				    				</div>
				    				<img src="images/banner_8.png" class="img-fluid" >
				    			</a>
		    				</div>
		    				<div class="col-md-4">
		    					<a href="{{ route('photonic-technology.index') }}" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
			    						<span class="ion-md-search"></span>
			    				  </div>
			    				  <div class="d-flex heading align-items-end">
				    					<h3>
				    						Photonic Technology & Smart
				    						
				    					</h3>
				    				</div>
				    				<img src="images/banner_photonic.jpg" class="img-fluid" >
				    			</a>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
	    </section>


    </div>

@endsection