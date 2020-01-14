@extends('layouts.master')

@section('content')
      @include('components.header')

      <section class="hero-wrap" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Abot</span></p>
              <h1 class="mb-5 bread">About Us</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      <section class="testimony-section">
        <div class="container">
          <div class="row d-md-flex">
            <div class="col-md-4 last-order d-md-flex align-items-start heading-section aside-stretch ftco-animate">
              <div>
                <h2 class="mb-4">About Us</h2>
              </div>
            </div>
            <div class="col-md-8 first-order ftco-animate">
              <div class="col-lg-12">
              <h2>PT. Garda Teknika</h2>
              <p>PT. GARDA <span style="color: #fe4c50;"> TEKNIKA </span> is a company with extensive experience in the instrumentation products for measurement, monitoring and Quality control. <br>Our products and control systems bring enormous advantages to industry and also education with greater effectiveness in the implementation of industrial processes and as a direct result the client takes advantage of a greater performance and higher profitability of the available means. </p>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection