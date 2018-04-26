<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user/layouts/header')

  </head>

  <body>

    <!-- navbar -->
     @include('user/layouts/navbar')
    
    <!-- navbar -->

    <!-- Main Content -->
    @section('content')
    @show()

    <!-- Footer -->
    @include('user/layouts/footer')
  <!-- Footer -->

    

  </body>

</html>
