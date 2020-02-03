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
      @include('9ourpartner')
   
    @include('10calltoaction')


  </main>

  @include('partials.footer')

</body>

</html>
