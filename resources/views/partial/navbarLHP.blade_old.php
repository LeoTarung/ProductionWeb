<nav class="nav navbar-header nav-expand shadow-sm rounded">
    <img class="navbarimg" src="{{ url('/img/ppp.png') }}" alt="Image" />
    <div class="rectangle-logo"></div>
    <a href="{{ url('/melting') }}"><img class="logo" src="{{ url('/img/nusametal.png') }}" alt="Image" /></a>
    <label id="MyClockDisplay" class="clock " onload="showTime()">
    </label>
    <div class="shift">
        <div class="font-white"> {{ $shift }}</div>
    </div>
    <div class="kotak"></div>
    <div id="date-1">
    </div>

            @if ($nrp != 0)
    <div class="nrp">
        <div class="font-white"> NRP : </div>
    </div>
    <div class="nrp-child">
        <div class="font-white fs-3 fw-bold">{{$nrp}}</div>
    </div> 
            @else
    <div class="nrp">
        <div class="font-white"> BELUM PREPARATION </div>
    </div>
            @endif
    <div class="mesin">
        <div class="font-white fs-2"> {{$mesin}} </div>
    </div>
    <script>
        var date = new Date();
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        var tanggal = date.getDate();
        var hari = date.getDay();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        switch (hari) {
            case 0:
                hari = 'Minggu';
                break;
            case 1:
                hari = 'Senin';
                break;
            case 2:
                hari = 'Selasa';
                break;
            case 3:
                hari = 'Rabu';
                break;
            case 4:
                hari = 'Kamis';
                break;
            case 5:
                hari = "Jum'at";
                break;
            case 6:
                hari = 'Sabtu';
                break;
        }
        switch (bulan) {
            case 0:
                bulan = 'Jan';
                break;
            case 1:
                bulan = 'Feb';
                break;
            case 2:
                bulan = 'Mar';
                break;
            case 3:
                bulan = 'Apr';
                break;
            case 4:
                bulan = 'Mei';
                break;
            case 5:
                bulan = 'Jun';
                break;
            case 6:
                bulan = 'Jul';
                break;
            case 7:
                bulan = 'Ags';
                break;
            case 8:
                bulan = 'Sept';
                break;
            case 9:
                bulan = 'Okt';
                break;
            case 10:
                bulan = 'Nov';
                break;
            case 11:
                bulan = 'Des';
                break;
        }
        var tampilTanggal = tanggal + ' ' + bulan + ' ' + tahun;
        document.getElementById('date-1').innerHTML = tampilTanggal;
    </script>
    <script>
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "WIB";

            // if (h == 0) {
            //     h = 12;
            // }

            // if (h > 12) {
            //     h = h - 12;
            //     session = "PM";
            // }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " ";
            // console.log(time)
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();
    </script>

</nav>