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
document.getElementById("date-1").innerHTML = tampilTanggal;
document.getElementById("date-2").innerHTML = hari + ", " + tampilTanggal;

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

//==============================['FUNCTION RESUME DI LHP']==============================//

function ModalResume(mesin, id) {
    console.log('asa')
    $.get(
        "/partial/resume-melting" + "/" + mesin + "/" + id,
        {},
        function (data, status) {
            $("#ModalNavbarLabel").html("Resume Input " + mesin); //Untuk kasih judul di modal
            $("#page").html(data); //menampilkan view create di dalam id page
            $("#ModalNavbar").modal("show"); //kalo ID pake "#" kalo class pake "."
        }
    );
}
//==============================['FUNCTION INSTRUKSI DI LHP MELTING']==============================//
function ModalInstruksi(mesin) {
    // console.log("asdasd");
    $.get("/partial/instruksi", {}, function (data, status) {
        $("#ModalNavbarLabel").html("Instruksi " + mesin); //Untuk kasih judul di modal
        $("#page").html(data); //menampilkan view create di dalam id page
        $("#ModalNavbar").modal("show"); //kalo ID pake "#" kalo class pake "."
    });
}

//==============================['FUNCTION RESUME DI LHP SUPPLY']==============================//

function ModalSupply(mesin, id) {
    // console.log('asad');
    $.get(
        "/partial/resume-forklift" + "/" + mesin + "/" + id,
        {},
        function (data, status) {
            $("#ModalNavbarLabel").html("Resume Input " + mesin); //Untuk kasih judul di modal
             $("#page").html(data); //menampilkan view create di dalam id page
             $("#ModalNavbar").modal("show"); //kalo ID pake "#" kalo class pake "."
             console.log(mesin);
        }
    );
}

//==============================['FUNCTION RESUME DI LHP CASTING']==============================//

function ModalCasting(mesin, id) {
    // console.log('asad');
    $.get(
        "/partial/resume-casting" + "/" + mesin + "/" + id,
        {},
        function (data, status) {
            $("#ModalNavbarLabel").html("Resume Input " + mesin); //Untuk kasih judul di modal
             $("#page").html(data); //menampilkan view create di dalam id page
             $("#ModalNavbar").modal("show"); //kalo ID pake "#" kalo class pake "."
             console.log(mesin);
        }
    );
}

//==============================['FUNCTION MODAL GAMBAR PART DI CASTING']==============================//
function ModalGambar(id,reject) {
    $.get(
        "/partial/modal-casting"+ "/" + id + "/" + reject,
        {},
        function (data) {
            $("#ModalGambarLabel").html("Jenis Reject: " + reject); //Untuk kasih judul di modal
            //  $("#page").load('/partial/modal-sementara'); //menampilkan view create di dalam id page
             $("#ModalGambar").modal("show"); //kalo ID pake "#" kalo class pake "."
             $('#ModalGambar .modal-body').load( '/partial/modal-casting' + '/' + id + "/" + reject);
             console.log(reject);
             console.log(id);
        }
    );
}

//==============================['FUNCTION MODAL GAMBAR PART DI FINAL INSPECTION']==============================//
function ModalGambarFinal(id,reject) {
    undo = 'reject';
    $.get(
        "/partial/modal-final-inspection"+ "/" + id + "/" + reject,
        {},
        function (data) {
            // $("#ModalGambarLabel").html("Resume Input " + mesin); //Untuk kasih judul di modal
            //  $("#page").load('/partial/modal-sementara'); //menampilkan view create di dalam id page
             $("#ModalGambarFinal").modal("show"); //kalo ID pake "#" kalo class pake "."
             $('#ModalGambarFinal .modal-body').load( '/partial/modal-final-inspection' + '/' + id + "/" + reject);
             console.log(reject);
             console.log(id);
        }
    );
}

