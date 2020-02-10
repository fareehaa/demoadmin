@include('user.layouts.head')

<body>

  <!-- Navigation -->
  @include('user.layouts.navbar')

  <!-- Page Header -->
  @include('user.layouts.header')

  @section('main-section')
  @show

  <!-- Footer -->
 @include('user.layouts.footer')
  

</body>

</html>
