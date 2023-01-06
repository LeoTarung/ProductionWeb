<nav class="nav shadow-lg ">
    <ul>
        <li> <a href="{{ url('/lhp-melting') }}" class="navitems">
                <div class="rectangle-logo shadow">
                    <img class="navbarimg" src="{{ url('/img/nusametal.png') }}" alt="Image" />
                </div>
            </a></li>

        <li>
            <a href="" data-bs-toggle="modal" data-bs-target="#shift">
                <div class="shift border-bottom">
                    {{ $shift }}
                </div>
            </a>
        </li>
        <li class="ms-2 ">
            <!-- <a href="" class="time1"> -->
            <a href="" class="time shadow-lg navitems">
                <div id="MyClockDisplay" class="clock " onload="showTime()"></div>
                <!-- <div class="kotak">
                        </  div> -->
                <div id="date-1">
                </div>

            </a>
            <!-- </a> -->
        </li>
        <li>
            <a href="{{ url('/lhp-melting') }}" class="navitems">
                @if ($nrp != 0)
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                @else
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH MESIN </div>
                    </div>
                @endif
            </a>
        </li>
        <li>
            <a href="{{ url('/lhp-melting') }}" class="machine shadow-lg">
                <div class="mesin">
                    @if ($mesin == 'FORKLIFT')
                        <div class="font-white "> {{ $mesin }} </div>
                    @else
                        <div class="font-white choose_machine"> {{ $mesin }} </div>
                    @endif
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="information" data-bs-toggle="modal" data-bs-target="#instruksi-kerja">
                    <i class='bx bx-info-circle bx-md '></i>
                </div>
            </a>
        </li>
    </ul>
</nav>
<div class="modal fade" id="shift" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-content">
                <table class="table">
                    <caption>List of ....</caption>

                    <tbody>
                        <td>
                            <tr>Durasi</tr>
                            <tr>Ingot </tr>
                            <tr>Scraf </tr>
                            <tr>Tapping </tr>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="instruksi-kerja" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Intruksi Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
        </div>
    </div>
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
