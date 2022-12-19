<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM | {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style2.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-all.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boxicons/css/boxicons.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">


</head>


<body>
    <div id="app">
        @include('partial.sidebar')
        <div id="main">


            @yield('content')

            @include('partial.navbar')

        </div>
        @include('partial.footer')
    </div>
    {{-- <script>
        const toggle = document.getElementById('toggle');
        const sidebar = document.getElementById('sidebar');

        // document.onclick = function(e) {
        //     if (e.target.id !== 'sidebar' && e.target.id !== 'toggle') {
        //         toggle.classList.remove('active');
        //         sidebar.classList.remove('active');
        //     }
        }
        toggle.onclick = function() {
            toggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }
        // var sidebarItems = document.querySelectorAll('.sidebar-item.has-sub');

        // var _loop = function _loop() {
        //     var sidebarItem = sidebarItems[i];
        //     sidebarItems[i].querySelector('.sidebar-link').addEventListener('click', function(e) {
        //         e.preventDefault();
        //         var submenu = sidebarItem.querySelector('.submenu');
        //         if (submenu.classList.contains('active')) submenu.classList.remove('active');
        //         else submenu.classList.add('active');
        //     });
        // };

        // for (var i = 0; i < sidebarItems.length; i++) {
        //     _loop();
    </script> --}}
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow

                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".toggle-menu");
        console.log(sidebarBtn);

        // document.onclick = function(e) {


        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        // document.onclick = function(e) {
        //     if (e.target.id !== 'sidebar' && e.target.id !== 'toggle-menu') {

        //         sidebar.classList.toggle("close");

        //     }
        // }
    </script>


</body>

</html>
