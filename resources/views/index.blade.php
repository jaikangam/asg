<!DOCTYPE html>
<html lang="en">  
<head>
  @include('partials.head')
</head>

<body>

  @include('partials.header')
  
  <main>

      <!-- Open Banner -->
      <section class="section section-lg " id="hero-banner"> 
        <div class="container py-md">
          <div class="row align-items-center justify-content-center pt-100 pb-100">
            <div class=" col-lg-8 text-center">
              <h2 class=" display-3 text-white">Alliance Study Group Hostel, Delhi   </h2>
              <p class="lead text-white font-weight-500">Exclusively for North East Student  </p>
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

      @include('2message')
      @include('3whostay')
      @include('4facilities')
      @include('5room')
      @include('6gallery')
      @include('7testimonial')
      @include('8ourstudent')
      @include('9ourpartner')
      @include('10calltoaction')
  </main>

  @include('partials.footer')

</body>

</html>
