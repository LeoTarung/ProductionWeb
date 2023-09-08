//==============================['AGAR SIDE BAR BISA DIBUKA DI PRODUCTION WEB']==============================//

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

//==============================['FUNCTION JAM DI PRODUCTION WEB']==============================//
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

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    var time = h + ":" + m + ":" + s + "\xa0" + session;
    // console.log(time)
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);
}
showTime();
//==============================['FUNCTION HARI DI PRODUCTION WEB']==============================//
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
        bulan = "Januari";
        break;
    case 1:
        bulan = "Februari";
        break;
    case 2:
        bulan = "Maret";
        break;
    case 3:
        bulan = "April";
        break;
    case 4:
        bulan = "Mei";
        break;
    case 5:
        bulan = "Juni";
        break;
    case 6:
        bulan = "Juli";
        break;
    case 7:
        bulan = "Agustus";
        break;
    case 8:
        bulan = "September";
        break;
    case 9:
        bulan = "Oktober";
        break;
    case 10:
        bulan = "November";
        break;
    case 11:
        bulan = "Desember";
        break;
}
var tampilTanggal = tanggal + " " + bulan + " " + tahun;
// document.getElementById("date-1").innerHTML = tampilTanggal;
// document.getElementById("date-2").innerHTML = hari + ", " + tampilTanggal;
