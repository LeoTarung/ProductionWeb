<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM | {{ $title }} </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style_lhp.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-all.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boxicons/css/boxicons.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">


</head>


<body>
    {{-- <div class="container-fluid"> --}}
    <div id="app">

        {{-- @include('partial.sidebar2') --}}
        <div id="main">

            @include('partial.navbarLHP')

            @yield('content')
            @include('partial.footerLHP')
        </div>
    </div>
    {{-- </div> --}}

</body>

</html>
