<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/performa_melting.css" media="all"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    <title>NM | TV MELTING</title>
  </head>

 <body onload="tampilbody()" >


    <script src="{{ asset('/js/Socketio454.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>


    <script>
        function tampilbody() {
            $.get("/tv/melting/Striko-1", {}, function (data, status) {
            $("body").html(data); //menampilkan view create di dalam id page
            });
        }
    </script>
        <script src="/js/amchart/Dailychart-Melting/index.js"></script>
        <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
        <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>

        <script src="/js/amchart/Dailychart-Melting/index.js"></script>
        <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
        <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>
</body>
</html>