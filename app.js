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

    setInterval(function () {
        // connection.query(
        //     "SELECT * FROM datatimbangan WHERE nama_timbangan ='Tibangan_Melting'",
        //     (err, res) => {
        //         socket.emit("mysqla", res);
        //     }
        // );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko1", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-2' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-2' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko2", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-3' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-3' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko3", res);
            }
        );

        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Swift_Asia' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now()) GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Swift_Asia' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananSwift_Asia", res);
            }
        );

        connection.query(
            "SELECT * FROM lhp_melting WHERE id = '2' ",
            (err, res) => {
                socket.emit("stok_molten_Striko1", res);
            }
        );
    }, 3000);
});

server.listen(3000, () => {
    console.log("listening on *:3000");
});
