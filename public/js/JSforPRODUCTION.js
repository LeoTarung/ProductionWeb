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
