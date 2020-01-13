<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.head')
</head>

<body>
  @include('partials.header')
  <main>
    <div class="position-relative">
        @include('1hero')
    </div>
      @include('2message')
      @include('3whostay')
      @include('4facilities')
      @include('5room')
      @include('6gallery')
      @include('7testimonial')
      @include('8ourstudent')

    <section class="section pb-0 section-components">
      <div class="py-5 bg-secondary">
        <div class="container">
           @include('9ourpartner')
        </div>
      </div>
    </section>

  
  </main>

  @include('partials.footer')

</body>

</html>
