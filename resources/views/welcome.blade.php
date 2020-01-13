@extends('layouts.master')

@section('content')
      <header>
        <div class="colorlib-navbar-brand text-center">
          <a class="colorlib-logo" href="index.html">Garda Multi Solusi Teknika</a>
        </div>
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
      </header>

      <section class="home-slider owl-carousel">
        <a href="portfolio.html" class="slider-item" style="background-image: url(images/bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">#01 Exterior Building</h1>
              </div>
            </div>
          </div>
        </a>

        <a href="portfolio.html" class="slider-item" style="background-image: url('images/bg_2.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#02 American Building</h1>
              </div>
            </div>
          </div>
        </a>

        <a href="portfolio.html" class="slider-item" style="background-image: url('images/bg_3.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#03 Louie's Residences</h1>
              </div>
            </div>
          </div>
        </a>

        <a href="portfolio.html" class="slider-item" style="background-image: url('images/bg_4.jpg');">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-end justify-content-center">
              <div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#04 Business Building</h1>
              </div>
            </div>
          </div>
        </a>
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
                </div>
              </div>
              <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">
                
                <div class="tab-content pl-md-5" id="v-pills-tabContent">

                  <div class="tab-pane fade show active py-5" id="v-pills-research" role="tabpanel" aria-labelledby="v-pills-research-tab">
                    <span class="icon mb-3 d-block flaticon-house-plans"></span>
                    <h2 class="mb-4">Material Research</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-agriculture" role="tabpanel" aria-labelledby="v-pills-agriculture-tab">
                    <span class="icon mb-3 d-block flaticon-ideas"></span>
                    <h2 class="mb-4">Agriculture</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-automation" role="tabpanel" aria-labelledby="v-pills-automation-tab">
                    <span class="icon mb-3 d-block flaticon-modern-house"></span>
                    <h2 class="mb-4">Automation System</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-engineering" role="tabpanel" aria-labelledby="v-pills-engineering-tab">
                    <span class="icon mb-3 d-block flaticon-skyline"></span>
                    <h2 class="mb-4">Engineering</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-medicine" role="tabpanel" aria-labelledby="v-pills-medicine-tab">
                    <span class="icon mb-3 d-block flaticon-skyline"></span>
                    <h2 class="mb-4">Medicine</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-energy" role="tabpanel" aria-labelledby="v-pills-energy-tab">
                    <span class="icon mb-3 d-block flaticon-skyline"></span>
                    <h2 class="mb-4">Energy</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-transportation" role="tabpanel" aria-labelledby="v-pills-transportation-tab">
                    <span class="icon mb-3 d-block flaticon-skyline"></span>
                    <h2 class="mb-4">Transportation Engineering</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>

                  <div class="tab-pane fade py-5" id="v-pills-photonic" role="tabpanel" aria-labelledby="v-pills-photonic-tab">
                    <span class="icon mb-3 d-block flaticon-skyline"></span>
                    <h2 class="mb-4">Photonic Technology & Smart</h2>
                    <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
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
                    <p><a href="#" class="btn btn-primary px-4 py-3">More Info</a></p>
                  </div>
                </div>
                <div class="col-md-4 mb-3 text-center ftco-animate">

                </div>
              </div>
            </div>
          </section>
@endsection