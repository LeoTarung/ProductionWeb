<!DOCTYPE html>
<html lang="en" class="notranslate">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM | {{ $title }} </title>
    {{-- //============[ CSS IN HERE ]============// --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style_lhp.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boxicons/css/boxicons.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    {{-- //============[ JS IN HERE ]============// --}}
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</head>

<body>
    <div id="app">
        <div id="main">

            @if (session()->has('calladmin'))
                <div class="alert alert-danger" role="alert">Silahkan Hubungi Admin Digitalization Untuk Melanjutkan.
                </div>
            @elseif(session()->has('preulang'))
                <?php toast('Silahkan Preparation Ulang.', 'error'); ?>
            @elseif(session()->has('behasilditambahkan'))
                <?php toast('Data Berhasil Ditambahkan', 'success'); ?>
            @endif

            @include('partial.navbarLHP')

            @yield('content')
            @include('partial.footerLHP')
        </div>
    </div>
    {{-- //============[ JS IN HERE ]============// --}}
    <script src="{{ asset('/js/Socketio454.js') }}"></script>
    <script src="{{ asset('/js/JSforLHP.js') }}"></script>
    @include('sweetalert::alert')

    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
