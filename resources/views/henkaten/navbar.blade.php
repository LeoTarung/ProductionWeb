<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/UI/style.css">  </head>
    <title>HENKATEN FORM</title>
</head>
<body>
    <div class="container-fluid" id="form"> 
      <div class="row">
        <div class="col-4 d-flex justify-content-start  "><p class="fs-4">Striko -1</div>
        <div class="col-4 d-flex justify-content-center "><p class="fs-3">Henkaten Form</p></div>
        <div class="col-4 d-flex justify-content-end ">
          <div id= "date" class="fs-5"> </div>
        </div>
        

        <script>
          //==============================['FUNCTION JAM DI LHP']==============================//
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
        hari = "Minggu";
        break;
    case 1:
        hari = "Senin";
        break;
    case 2:
        hari = "Selasa";
        break;
    case 3:
        hari = "Rabu";
        break;
    case 4:
        hari = "Kamis";
        break;
    case 5:
        hari = "Jum'at";
        break;
    case 6:
        hari = "Sabtu";
        break;
}
switch (bulan) {
    case 0:
        bulan = "Jan";
        break;
    case 1:
        bulan = "Feb";
        break;
    case 2:
        bulan = "Mar";
        break;
    case 3:
        bulan = "Apr";
        break;
    case 4:
        bulan = "Mei";
        break;
    case 5:
        bulan = "Jun";
        break;
    case 6:
        bulan = "Jul";
        break;
    case 7:
        bulan = "Ags";
        break;
    case 8:
        bulan = "Sept";
        break;
    case 9:
        bulan = "Okt";
        break;
    case 10:
        bulan = "Nov";
        break;
    case 11:
        bulan = "Des";
        break;
}
var tampilTanggal = tanggal + " " + bulan + " " + tahun;
document.getElementById("date").innerHTML = tampilTanggal;

function showTime() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "WIB";

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " ";
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);
}
showTime();
        </script>
        

        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link {{( $page === "man") ? 'active' : ''}}" href="/tampilan">MAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{( $page === "metode") ? 'active' : ''}}" href="/metode">METHOD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{( $page === "mesin") ? 'active' : ''}}" href="mesin">MACHINE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{( $page === "material") ? 'active' : ''}}" href="material">MATERIAL</a>
            </li>
          </ul>
          
       @yield('content')
</body>
</html>