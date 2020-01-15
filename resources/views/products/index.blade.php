@extends('layouts.master')

@section('content')
    <div>
    @include('components.header')

      <section class="hero-wrap" style="background-image: url(images/bg_2.jpg);">
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
		              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia </p> -->
		            </div>
	            </div>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
		    				<div class="d-flex icon justify-content-center align-items-center">
		    					<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Material Research</span><br>
		    						Work 01
		    					</h3>
		    				</div>
		    				<img src="images/image_3.jpg" class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
		    				</div>
		    				<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Agriculture</span><br>
		    						Work 02
		    					</h3>
		    				</div>
		    				<img src="images/image_2.jpg" class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    				<span class="ion-md-search"></span>
			    			</div>
			    			<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Automation System</span><br>
		    						Work 03
		    					</h3>
		    				</div>
		    				<img src="images/image_9.jpg" class="img-fluid" alt="Colorlib Template">
		    			</a>
		    		</div>
		    		<div class="col-md-8">
		    			<a href="portfolio.html" class="portfolio ftco-animate">
			    			<div class="d-flex icon justify-content-center align-items-center">
			    					<span class="ion-md-search"></span>
			    			</div>
			    			<div class="d-flex heading align-items-end">
		    					<h3>
		    						<span>Engineering</span><br>
		    						Work 04
		    					</h3>
		    				</div>
		    				<img src="images/image_1.jpg" class="img-fluid" alt="Colorlib Template">
		    			</a>
		    			<div class="row">
		    				<div class="col-md-6">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Medicine</span><br>
				    						Work 05
				    					</h3>
				    				</div>
				    				<img src="images/image_5.jpg" class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    				<div class="col-md-6">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Energy</span><br>
				    						Work 06
				    					</h3>
				    				</div>
				    				<img src="images/image_6.jpg" class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-8">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
				    					<span class="ion-md-search"></span>
				    				</div>
				    				<div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Transportation Engineering</span><br>
				    						Work 07
				    					</h3>
				    				</div>
				    				<img src="images/image_7.jpg" class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    				<div class="col-md-4">
		    					<a href="portfolio.html" class="portfolio ftco-animate">
			    					<div class="d-flex icon justify-content-center align-items-center">
			    						<span class="ion-md-search"></span>
			    				  </div>
			    				  <div class="d-flex heading align-items-end">
				    					<h3>
				    						<span>Photonic Technology & Smart</span><br>
				    						Work 08
				    					</h3>
				    				</div>
				    				<img src="images/image_4.jpg" class="img-fluid" alt="Colorlib Template">
				    			</a>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
	    </section>


    </div>

@endsection