<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('css/create.css') }}" rel="stylesheet" type="text/css" />
    <!-- Vendor CSS Files -->
  <link href="{{asset('aos.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="asset{{('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="asset{{('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="asset{{('glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="asset{{('remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="asset{{('swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('Haoua')
    </div>
    <script src="{{ asset ('js/app.js') }}" type="text/js"></script>
    
</body>
</html>