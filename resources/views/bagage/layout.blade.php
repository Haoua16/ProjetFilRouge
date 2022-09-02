@extends('gescourrierdash.dashboard')

@section('Mimi')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('css/create.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset ('js/app.js') }}" type="text/js"></script>
    
</body>
</html>
@endsection