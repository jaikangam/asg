<!DOCTYPE html>
<html lang="en">  
<head>
  @include('partials.head')
</head>

<body>

  @include('partials.header')
  
  <main>

      <!-- Open Banner -->
      <section class="section section-lg gradient-overlay " id="hero-banner"> 
        <div class="container py-md">
          <div class="row align-items-center justify-content-center pt-100 pb-100">
            <div class=" col-lg-8 text-center">
              <h2 class=" display-3 text-white">Alliance Study Group Hostel, Delhi   </h2>
              <h4 class=" display-4 text-white font-weight-500">Exclusively for North East Student  </h4>
            </div>
          </div>
        </div>
        
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div> <!-- Close SVG separator -->
      </section> <!-- Close Banner -->


        <!-- Open the testiomonail Section -->
    <section> 
      <div class="container  mt--150" >
        <div class="row text-center">
         
          <div class="col-md-4 col-lg-4">
            <div class="card card-lift--hover card-margin  py-3 px-4">
              <div class="hero-card"> 
                <img src="{{ asset('frontend/img/icons/money.png')}}" width="80" alt="promo" class="img-fluid">
                <h5 class="font-weight-600 brand-color ">Reasonable Rate  </h5>
                <p class="description font-weight-500">Reasonable rate in the capital with all the facilities available to build your career staying with us. </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4">
            <div class="card card-lift--hover card-margin  py-3 px-4">
              <div class="hero-card"> 
                <img src="{{ asset('frontend/img/icons/dish.png')}}" width="80" alt="promo" class="img-fluid">
                <h5 class="font-weight-600 brand-color">Notheast Cuisine  </h5>
                <p class="description font-weight-500">Argon Design System is a "Developer First" product, with a lot of variables for colors, fonts, sizes and other elements.</p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-lg-4">
            <div class="card card-lift--hover card-margin  py-3 px-4">
              <div class="hero-card"> 
                <img src="{{ asset('frontend/img/icons/mentor.png')}}" width="80" alt="promo" class="img-fluid">
                <h5 class="font-weight-600 brand-color "> Experience Mentor  </h5>
                <p class="description font-weight-500">We have an experience mentor to provide guidance, motivation, support and role modeling.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section> <!-- Close the testimonial Section -->

      @include('2message')
     
      @include('4facilities')
      @include('5room')
      @include('6gallery')
      @include('7testimonial')
      @include('8ourstudent')
    
      @include('10calltoaction')
  </main>

  @include('partials.footer')

</body>

</html>
