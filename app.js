const { count } = require("console");
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

    socket.on("ForSettingslevelMolten", () => {
        // console.log(forklift, material);
        // forklift1 = forklift;
        // material1 = material;
        // mc1 = mc;
    });

    setInterval(function () {
        //==========[' SELECT ALL FROM LHP MELTING ']==========//
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

        //==========[' SELECT ALL FROM MESIN CASTING ']==========//
        connection.query(
            "SELECT * FROM mesin_casting WHERE material='" + material1 + "'",
            (err, res) => {
                socket.emit("levelMolten_client", res);
            }
        );

         //==========[' SELECT  FROM MESIN CASTING ']==========//
         connection.query(
            "SELECT * FROM mesin_casting",
            (err, res) => {
                socket.emit("levelMolten_settings", res);
            }
        );

        //==========[' SELECT DATA TahunanStriko-1 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-1' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-1", res);
            }
        );

        //==========[' SELECT DATA TahunanStriko-2 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-2' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-2", res);
            }
        );

        //==========[' SELECT DATA TahunanStriko-3 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Striko-3' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanStriko-3", res);
            }
        );

        //==========[' SELECT DATA TahunanSwift_Asia ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting where mesin = 'Swift_Asia' AND YEAR(tanggal) = YEAR(now()) GROUP BY MONTH(tanggal)",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("TahunanSwift_Asia", res);
            }
        );

        //==========[' SELECT DATA bulananStriko-1 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting WHERE tanggal BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE() AND mesin = 'Striko-1' GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-1' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-1", res);
            }
        );

        //==========[' SELECT DATA bulananStriko-2 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting WHERE tanggal BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE() AND mesin = 'Striko-2' GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-2' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-2", res);
            }
        );

        //==========[' SELECT DATA bulananStriko-3 ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting WHERE tanggal BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE() AND mesin = 'Striko-3' GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Striko-3' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananStriko-3", res);
            }
        );

        //==========[' SELECT DATA bulananSwift_Asia ']==========//
        connection.query(
            "SELECT tanggal, SUM(total_charging) AS total_chargings, SUM(ingot) as ingots, IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing)* 100, 0 ) as persen_loss, IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 0) as persen_ingots FROM lhp_melting WHERE tanggal BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE() AND mesin = 'Swift_Asia' GROUP BY tanggal;",
            // "SELECT * FROM lhp_melting where mesin = 'Swift_Asia' AND MONTH(tanggal) = MONTH(now()) AND YEAR(tanggal) = YEAR(now())",
            (err, res) => {
                socket.emit("bulananSwift_Asia", res);
            }
        );

        //==========[' TESTING QUERY NICH ']==========//
        // connection.query("SELECT * FROM input_kv8000", function (err, results) {
        //     console.log(results);
        // });

        // connection.query(
        //     "SELECT * FROM input_kv8000 WHERE area='HP'",
        //     (err, HasilQueryA) => {
        //         // console.log(HasilQueryA[0][2]);
        //         connection.query(
        //             "UPDATE mesin_casting SET aktual_molten=" +
        //                 HasilQueryA[0][2] +
        //                 " WHERE mc=2"
        //         ),
        //             (err, Hasilupdate) => {
        //                 console.log("berhasil Update..!");
        //             };
        //     }
        // );
    }, 3000);
});

connection.query(
    "SELECT `1`,`2`,`4`,`5`,`6`,`7`,`10`,`12`,`15`,`20`,`21`,`22`,`23`,`24`,`25`,`27`,`28`,`29`,`30`,`31`,`32`,`33`,`34`,`35`,`36`,`37`,`38`,`39`,`40`,`41`,`42`,`43`,`44`,`45`,`46`,`47`,`48`,`49`,`50`,`51`,`52`,`53`,`54`,`55` FROM input_kv8000 WHERE area='ME' ",
    function (err, hasil) {
        // console.log(hasil[0].length);
        for (i = 0; i < hasil[0]; i++) {
            console.log("data mc-" + hasil[0][i]);
        }
    }
);

// connection.query("SELECT mc FROM mesin_casting", function (err, nomc) {
//     // console.log(nomc[2].mc);
//     var nomc1 = [];
//     for (i = 0; i < nomc.length; i++) {
//         nomc1.push(nomc[i].mc);
//     }
//     console.log(nomc1[]);
//     connection.query(
//         "SELECT `" + nomc1 + "` FROM input_kv8000 WHERE area='ME' ",
//         function (err, hasil) {
//             // console.log(hasil);
//             // console.log(i);
//             // console.log(hasil[0][i]);
//         }
//     );
// });

server.listen(1553, () => {
    console.log("listening on *:1553");
});
