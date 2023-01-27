const express = require("express");
const app = express();
const http = require("http");
const server = require("http").createServer(app);
const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

// LIB FOR MYSQL
const mysql = require("mysql2");
const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    database: "production-app",
});

io.on("connection", (socket) => {
    console.log("Connection Berhasil");

    socket.on("disconnect", (socket) => {
        console.log("Koneksi Terputus");
    });

    var mesin1;
    var shift1;
    var date1;
    var forklift1;
    var material1;

    socket.on("Hello", (mesin, shift, date) => {
        // console.log("ini adalah shift" + shift); // world
        // console.log("ini adalah tanggal" + date); // world
        mesin1 = mesin;
        shift1 = shift;
        date1 = date;
    });

    socket.on("levelMolten", (forklift, material) => {
        // console.log(forklift, material);
        forklift1 = forklift;
        material1 = material;
    });

    setInterval(function () {
        connection.query(
            "SELECT * FROM lhp_melting WHERE mesin='" +
                mesin1 +
                "' AND shift='" +
                shift1 +
                "' AND tanggal='" +
                date1 +
                "' ORDER BY id DESC",
            (err, res) => {
                socket.emit("tv_melting_kiri", res, mesin1);
            }
        );
        connection.query(
            "SELECT * FROM mesin_casting WHERE material='" + material1 + "'",
            (err, res) => {
                socket.emit("levelMolten_client", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-1' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-1", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-2' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-2", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-3' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-3", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Swift_Asia' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanSwift_Asia", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-1", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-2' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-2' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-2", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-3' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-3' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-3", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Swift_Asia' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Swift_Asia' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananSwift_Asia", res);
            }
        );
    }, 3000);
});

server.listen(1553, () => {
    console.log("listening on *:1553");
});
