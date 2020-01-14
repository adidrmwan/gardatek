@extends('layouts.master')

@section('content')
    <div>
    @include('components.header')

      <section class="hero-wrap" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
	            <h1 class="mb-5 bread">Contact Us</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website:</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-5 pr-md-5">
              <form action="#">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
            <div class="col-md-7">
                <div id="google_map">
                        <div class="map_container">
                            <div>
                                <div class="google_maps">
                                <iframe width="620" height="360" frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?q=JL.+Brawijaya+No.+209+Pungging+Mojokerto+:+61483&key= AIzaSyBLj6Lb52RueYReX9vdaeEdMOmONs545xE " allowfullscreen></iframe> 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection