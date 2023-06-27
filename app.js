const express = require("express");
const app = express();
const http = require("http");
const server = require("http").createServer(app);
const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

//==========[' LIB FOR MYSQL ']==========//
const mysql = require("mysql2");
const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    database: "production-app",
});

const connection2 = mysql.createConnection({
    host: "localhost",
    user: "root",
    database: "trial",
});

//==========[' DECLARE VARIABLE ']==========//
var shift;
var tanggal;
var forklift1;
var material1;
var lhpCasting1;

//==========[' DECLARE SHIFT ']==========//
function showTime() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var d = ("0" + date.getDate()).slice(-2);
    var b = ("0" + (date.getMonth() + 1)).slice(-2);
    var t = date.getFullYear();

    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;
    var time = h + ":" + m + ":" + s + " ";
    var tanggall = t + "-" + b + "-" + d;
    if (time >= "00:00:00" && time < "07:10:00") {
        shiftt = "SHIFT-1";
    } else if (time >= "07:10:00" && time < "16:00:00") {
        shiftt = "SHIFT-2";
    } else if (time >= "16:00:00" && time <= "23:59:59") {
        shiftt = "SHIFT-3";
    } else {
        shiftt = "SHIFT TIDAK TERDEFINISI";
    }
    // console.log("SEKARANG ADALAH SHIFT " + shift);
    // console.log("SEKARANG ADALAH tanggal " + tanggal);
    shift = shiftt;
    tanggal = tanggall;
    setTimeout(showTime, 1000);
}
showTime();

io.on("connection", (socket) => {
    console.log("Connection Berhasil");

    socket.on("disconnect", (socket) => {
        console.log("Koneksi Terputus");
    });

    socket.on("levelMolten", (forklift, material) => {
        forklift1 = forklift;
        material1 = material;
    });


      //==========[' RUNNING ON LHP CASTING ']==========//


    socket.on("lhp_casting", (id_lhp) => {
        lhpCasting1 = id_lhp;
        // console.log( lhpCasting1 );
    });



    setInterval(function () {
        connection.query(
            "SELECT * FROM input_kv8000 WHERE area='MA'",
            (err, HasilA) => {
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][1] + "'WHERE ID='4-95-69-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][6] + "'WHERE ID='4-95-69-2'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][11] + "'WHERE ID='4-95-69-3'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][46] + "'WHERE ID='4-91-68-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][51] + "'WHERE ID='4-91-68-2'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][56] + "'WHERE ID='4-91-68-3'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][16] + "'WHERE ID='4-92-68-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][21] + "'WHERE ID='4-92-68-2'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][26] + "'WHERE ID='4-92-68-3'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][31] + "'WHERE ID='4-93-68-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][36] + "'WHERE ID='4-93-68-2'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][41] + "'WHERE ID='4-93-68-3'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][61] + "'WHERE ID='4-89-26-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][66] + "'WHERE ID='4-94-70-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][71] + "'WHERE ID='4-94-70-2'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][91] + "'WHERE ID='4-96-125-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][96] + "'WHERE ID='4-97-96-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][101] + "'WHERE ID='4-98-95-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][101] + "'WHERE ID='4-98-97-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][106] + "'WHERE ID='4-99-122-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][106] + "'WHERE ID='4-99-90-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][116] + "'WHERE ID='4-90-86-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][121] + "'WHERE ID='1-10-22-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][131] + "'WHERE ID='1-11-20-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][136] + "'WHERE ID='1-12-108-1'",
                    (err, HasilB) => {
                    }
                );
                connection2.query(
                    "UPDATE input SET TOTAL_PRODUKSI='" + HasilA[0][141] + "'WHERE ID='1-13-94-1'",
                    (err, HasilB) => {
                    }
                );
            }
        );
        //==========[' SELECT ALL FROM MESIN CASTING ']==========//
        connection.query(
            "SELECT * FROM mesin_casting WHERE material='" + material1 + "'",
            (err, res) => {
                socket.emit("levelMolten_client", res, material1);
            }
        );


       //==========[' SELECT ALL status quality ']==========//
       connection.query(
        "SELECT * FROM status_quality",
        (err, res) => {
            socket.emit("status_quality", res);
        }
    );

        //==========[' SELECT ALL  FROM MESIN CASTING ']==========//
        connection.query("SELECT * FROM mesin_casting", (err, res) => {
            socket.emit("levelMolten_settings", res);
            console.log('test lagi lagi');
        });

        //==========[' SELECT DATA LHPStriko-1 ']==========//
        connection.query(
            "SELECT * FROM lhp_melting WHERE mesin='Striko-1' AND shift='" +
                shift +
                "' AND tanggal='" +
                tanggal +
                "' ORDER BY id DESC",
            (err, res) => {
                socket.emit("KiriStriko-1", res);
            }
        );

        //==========[' SELECT DATA LHPStriko-2 ']==========//
        connection.query(
            "SELECT * FROM lhp_melting WHERE mesin='Striko-2' AND shift='" +
                shift +
                "' AND tanggal='" +
                tanggal +
                "' ORDER BY id DESC",
            (err, res) => {
                socket.emit("KiriStriko-2", res);
            }
        );

        //==========[' SELECT DATA LHPStriko-3 ']==========//
        connection.query(
            "SELECT * FROM lhp_melting WHERE mesin='Striko-3' AND shift='" +
                shift +
                "' AND tanggal='" +
                tanggal +
                "' ORDER BY id DESC",
            (err, res) => {
                socket.emit("KiriStriko-3", res);
            }
        );

        //==========[' SELECT DATA LHPSwift_Asia ']==========//
        connection.query(
            "SELECT * FROM lhp_melting WHERE mesin='Swift_Asia' AND shift='" +
                shift +
                "' AND tanggal='" +
                tanggal +
                "' ORDER BY id DESC",
            (err, res) => {
                socket.emit("KiriSwift_Asia", res);
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

         //==========[' SELECT ALL LHP CASTING WHERE ID MESIN = x ']==========//
        connection.query(
            "SELECT * FROM lhp_casting WHERE id_mesincasting='" + lhpCasting1 + "' AND tanggal='" + tanggal + "' AND shift='" +
            shift + "'",
            (err, res) => {
                // console.log( lhpCasting1 );
                socket.emit("lhp_casting", res, lhpCasting1);
            }
        );


        //==========[' UPDATE AKTUAL PRODUCTION CASTING ']==========//
        connection.query(
            "SELECT * FROM input_kv8000 WHERE area='CA'",
            (err, HasilQueryA) => {
                //==========[' UPDATE MC-47 ']==========//
                //========[' UPDATE COUNTER MC-47 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][231] +
                        " WHERE mc= 47"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-47 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][234] +
                        " WHERE mc= 47"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-48 ']==========//
                //========[' UPDATE COUNTER MC-48 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][236] +
                        " WHERE mc= 48"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-48 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][239] +
                        " WHERE mc= 48"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-51 ']==========//
                //========[' UPDATE COUNTER MC-51 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][251] +
                        " WHERE mc= 51"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-51 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][254] +
                        " WHERE mc= 51"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-52 ']==========//
                //========[' UPDATE COUNTER MC-52 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][256] +
                        " WHERE mc= 52"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-52 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][259] +
                        " WHERE mc= 52"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-53 ']==========//
                //========[' UPDATE COUNTER MC-53 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][261] +
                        " WHERE mc= 53"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-53 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][264] +
                        " WHERE mc= 53"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-56 ']==========//
                // //========[' UPDATE COUNTER MC-56 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][276] +
                        " WHERE mc= 56"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-56 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][279] +
                        " WHERE mc= 56"
                ),
                    (err, Hasilupdate) => {};

                //==========[' UPDATE MC-57 ']==========//
                //========[' UPDATE COUNTER MC-57 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET total_produksi=" +
                        HasilQueryA[0][281] +
                        " WHERE mc= 57"
                ),
                    (err, Hasilupdate) => {};

                //========[' UPDATE MOLTEN MC-57 ']==========//
                connection.query(
                    "UPDATE mesin_casting SET aktual_molten=" +
                        HasilQueryA[0][284] +
                        " WHERE mc= 57"
                    ),
                        (err, Hasilupdate) => {};
            }
        );
    }, 3000);
});

server.listen(5322, () => {
    console.log("listening on *:5322");
});
