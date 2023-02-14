<!DOCTYPE html>
<html lang="en" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM | {{ $title }}</title>
    {{-- //============[ CSS IN HERE ]============// --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boxicons/css/boxicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    {{-- //============[ JS IN HERE ]============// --}}
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>


</head>
<body>
    @if (session()->has('calladmin'))
    <div class="alert alert-danger" role="alert">Silahkan Hubungi Admin Digitalization Untuk Melanjutkan.</div>
    @elseif(session()->has('preulang'))
    <?php toast('Silahkan Preparation Ulang.', 'error'); ?>
    @elseif(session()->has('behasilditambahkan'))
    <?php toast('Data Berhasil Ditambahkan', 'success'); ?>
    @elseif(session()->has('behasiledit'))
    <?php toast('Data Berhasil Dirubah', 'success'); ?>
    @elseif(session()->has('behasilDownload'))
    <?php toast('Data Berhasil DiDownload', 'success'); ?>
    @elseif(session()->has('gagal'))
    <?php toast('Permintaan Anda Gagal', 'error'); ?>
    @endif
    <div id="app">
    {{-- Resources chart 1 --}}
    <script src="/js/amchart/Dailychart-Melting/index.js"></script>
    <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
    <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>
   
    {{-- Resources --}}
    <script src="/js/amchart/LossesChart-Melting/core.js"></script>
    <script src="/js/amchart/LossesChart-Melting/charts.js"></script>
    <script src="/js/amchart/LossesChart-Melting/Animated.js"></script>
        @include('partial.sidebar')
        <div id="main">
            @include('partial.navbar')
            <div id="content" class="main-content">
                @yield('content')
            </div>
            @include('partial.footer')
        </div>
    </div>
    {{-- //============[ JS IN HERE ]============// --}}
    <script src="{{ asset('/js/Socketio454.js') }}"></script>
   



    {{-- //============[ TEMPLATE SOCKET IO ]============// --}}
    {{-- <script>
        //     $(function(){
        //        let ip_node = '127.0.0.1';
        //        let socket_port = '3000';
        //        let socket = io(ip_node + ':' + socket_port);
        //        socket.on('connection');
        //     //    socket.on("mysql", (datasql) => {
        //     //        console.log(datasql[0].nama_timbangan);
        //     //        console.log(datasql[0].berat);
        //     //        $("#sql1").text(datasql[0].nama_timbangan);
        //     //        $(".sql1").text(datasql[0].berat);
        //     //    })

        //         socket.on("bulananStriko1", (datasql) => {
        //         console.log(datasql);
        //         //    console.log(datasql[0].nama_timbangan);
        //         //    console.log(datasql[0].berat);
        //         //    $("#sql1").text(datasql[0].nama_timbangan);
        //         //    $(".sql1").text(datasql[0].berat);
        //        })

        //    });
    </script> --}}

    <script src="{{ asset('/js/JSforPRODUCTION.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>
    @include('sweetalert::alert')
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
