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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
