<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <title>Accueil | Climb</title>
</head>

<body>

    @yield('content')

    <script src="{{asset('asset/vendors/jquery/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('asset/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/vendors/font-awesome/js/all.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    @yield('script')
</body>
</html>
