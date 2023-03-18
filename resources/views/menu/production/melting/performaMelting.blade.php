<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/performa_melting.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>

    <title>NM | TV MELTING</title>

  </head>

 <body>
  <nav class="nav nav-header ">
    <div class="row w-100">
      <div class="col-4 mb-2">
        <div class="d-flex justify-content-start">
          <img class="logo" src="{{ url('/img/nusametal.png') }}" alt="Image" />
        </div>
      </div>

      <div class="col-4">
        <div class="title section text-center fw-bold fs-1"> MELTING - SECTION </div>
      </div>

      <div class="col-4 d-flex justify-content-end">
        <label id="MyClockDisplay" class="clock shadow" onload="showTime()"></label>
      </div>


    </div>
  </nav>

    <div class="container-fluid profile">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-striko1-tab" data-bs-toggle="pill" data-bs-target="#pills-striko1" type="button" role="tab" aria-controls="pills-striko1" aria-selected="true">Striko-1</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-striko2-tab" data-bs-toggle="pill" data-bs-target="#pills-striko2" type="button" role="tab" aria-controls="pills-striko2" aria-selected="false">Striko-2</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-striko3-tab" data-bs-toggle="pill" data-bs-target="#pills-striko3" type="button" role="tab" aria-controls="pills-striko3" aria-selected="false">Striko-3</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-swiftAsia-tab" data-bs-toggle="pill" data-bs-target="#pills-swiftAsia" type="button" role="tab" aria-controls="pills-swiftAsia" aria-selected="false">swiftAsia</button>
            </li>
        </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-striko1" role="tabpanel" aria-labelledby="pills-striko1-tab" tabindex="0">
                <div class="row">
                    <div class="col-3 sidebar">
                        <div class="card shadow identitas">
                            <div class="col atas py-0">
                            <h1> STRIKO - 1</h1>
                            <h2 class="hd" id="material_S1"></h2>
                            </div>

                            <div class="gambar">
                            <img src="/img/profile.png" class="img-rounded">
                            </div>

                            <div class="col bawah">
                                <h2 id="nama_S1"></h2>
                                <h3 id="nrp_S1"></h3>
                            </div>
                            <div class="row">
                                <div class="col-10 produk">
                                    <div class="card tc">
                                        <div class="row">
                                            <div class="col-7 text-center">Total Charging </div>
                                            <div class="col-5 text-center" id="total_charging_S1"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 ingot">
                                        <div class="row">
                                            <div class="col-8"> Ingot </div>
                                            <div class="col-4" id="ingot_S1"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 eg">
                                        <div class="row">
                                            <div class="col-8"> Ex - Gate </div>
                                            <div class="col-4" id="exgate_S1"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 reject">
                                        <div class="row">
                                            <div class="col-8"> Reject Part </div>
                                            <div class="col-4" id="reject_parts_S1"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 tapping">
                                        <div class="row">
                                            <div class="col-8"> Tapping </div>
                                            <div class="col-4" id="tapping_S1"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2  dross">
                                        <div class="row">
                                            <div class="col-8"> Dross </div>
                                            <div class="col-4" id="dross_S1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 grafik">
                            <div class="row">
                                <div class="col daily">
                                    <div class="card shadow">
                                    <div class="card-header day"> Daily Report</div>
                                    <div id="chartdiv_S1"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col monthly">
                                    <div class="card shadow">
                                        <div class="card-header month">Monthly Report</div>
                                        <div id="chartdiv2_S1"> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-striko2" role="tabpanel" aria-labelledby="pills-striko2-tab" tabindex="0">
                <div class="row">
                    <div class="col-3 sidebar">
                        <div class="card shadow identitas">
                            <div class="col atas py-0">
                            <h1> STRIKO - 2</h1>
                            <h2 class="hd" id="material_S2"></h2>
                            </div>

                            <div class="gambar">
                            <img src="/img/profile.png" class="img-rounded">
                            </div>

                            <div class="col bawah">
                                <h2 id="nama_S2"></h2>
                                <h3 id="nrp_S2"></h3>
                            </div>
                            <div class="row">
                                <div class="col-10 produk">
                                    <div class="card tc">
                                        <div class="row">
                                            <div class="col-7 text-center">Total Charging </div>
                                            <div class="col-5 text-center" id="total_charging_S2"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 ingot">
                                        <div class="row">
                                            <div class="col-8"> Ingot </div>
                                            <div class="col-4" id="ingot_S2"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 eg">
                                        <div class="row">
                                            <div class="col-8"> Ex - Gate </div>
                                            <div class="col-4" id="exgate_S2"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 reject">
                                        <div class="row">
                                            <div class="col-8"> Reject Part </div>
                                            <div class="col-4" id="reject_parts_S2"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 tapping">
                                        <div class="row">
                                            <div class="col-8"> Tapping </div>
                                            <div class="col-4" id="tapping_S2"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2  dross">
                                        <div class="row">
                                            <div class="col-8"> Dross </div>
                                            <div class="col-4" id="dross_S2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 grafik">
                            <div class="row">
                                <div class="col daily">
                                    <div class="card shadow">
                                    <div class="card-header day"> Daily Report</div>
                                    <div id="chartdiv_S2"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col monthly">
                                    <div class="card shadow">
                                        <div class="card-header month">Monthly Report</div>
                                        <div id="chartdiv2_S2"> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-striko3" role="tabpanel" aria-labelledby="pills-striko3-tab" tabindex="0">
                <div class="row">
                    <div class="col-3 sidebar">
                        <div class="card shadow identitas">
                            <div class="col atas py-0">
                            <h1> STRIKO - 3</h1>
                            <h2 class="hd" id="material_S3"></h2>
                            </div>

                            <div class="gambar">
                            <img src="/img/profile.png" class="img-rounded">
                            </div>

                            <div class="col bawah">
                                <h2 id="nama_S3"></h2>
                                <h3 id="nrp_S3"></h3>
                            </div>
                            <div class="row">
                                <div class="col-10 produk">
                                    <div class="card tc">
                                        <div class="row">
                                            <div class="col-7 text-center">Total Charging </div>
                                            <div class="col-5 text-center" id="total_charging_S3"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 ingot">
                                        <div class="row">
                                            <div class="col-8"> Ingot </div>
                                            <div class="col-4" id="ingot_S3"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 eg">
                                        <div class="row">
                                            <div class="col-8"> Ex - Gate </div>
                                            <div class="col-4" id="exgate_S3"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 reject">
                                        <div class="row">
                                            <div class="col-8"> Reject Part </div>
                                            <div class="col-4" id="reject_parts_S3"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 tapping">
                                        <div class="row">
                                            <div class="col-8"> Tapping </div>
                                            <div class="col-4" id="tapping_S3"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2  dross">
                                        <div class="row">
                                            <div class="col-8"> Dross </div>
                                            <div class="col-4" id="dross_S3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 grafik">
                            <div class="row">
                                <div class="col daily">
                                    <div class="card shadow">
                                    <div class="card-header day"> Daily Report</div>
                                    <div id="chartdiv_S3"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col monthly">
                                    <div class="card shadow">
                                        <div class="card-header month">Monthly Report</div>
                                        <div id="chartdiv2_S3"> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-swiftAsia" role="tabpanel" aria-labelledby="pills-swiftAsia-tab" tabindex="0">
                <div class="row">
                    <div class="col-3 sidebar">
                        <div class="card shadow identitas">
                            <div class="col atas py-0">
                            <h1> SWIF ASIA</h1>
                            <h2 class="hd" id="material_SA"></h2>
                            </div>

                            <div class="gambar">
                            <img src="/img/profile.png" class="img-rounded">
                            </div>

                            <div class="col bawah">
                                <h2 id="nama_SA"></h2>
                                <h3 id="nrp_SA"></h3>
                            </div>
                            <div class="row">
                                <div class="col-10 produk">
                                    <div class="card tc">
                                        <div class="row">
                                            <div class="col-7 text-center">Total Charging </div>
                                            <div class="col-5 text-center" id="total_charging_SA"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 ingot">
                                        <div class="row">
                                            <div class="col-8"> Ingot </div>
                                            <div class="col-4" id="ingot_SA"></div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 eg">
                                        <div class="row">
                                            <div class="col-8"> Ex - Gate </div>
                                            <div class="col-4" id="exgate_SA"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 reject">
                                        <div class="row">
                                            <div class="col-8"> Reject Part </div>
                                            <div class="col-4" id="reject_parts_SA"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2 tapping">
                                        <div class="row">
                                            <div class="col-8"> Tapping </div>
                                            <div class="col-4" id="tapping_SA"> </div>
                                        </div>
                                    </div>
                                    <div class="card mt-2  dross">
                                        <div class="row">
                                            <div class="col-8"> Dross </div>
                                            <div class="col-4" id="dross_SA"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 grafik">
                            <div class="row">
                                <div class="col daily">
                                    <div class="card shadow">
                                    <div class="card-header day"> Daily Report</div>
                                    <div id="chartdiv_SA"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col monthly">
                                    <div class="card shadow">
                                        <div class="card-header month">Monthly Report</div>
                                        <div id="chartdiv2_SA"> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
          </div>



    </div>

    <script src="{{ asset('/js/Socketio454.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>
    <script src="/js/amchart/Dailychart-Melting/index.js"></script>
    <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
    <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

    <script>
    var gambar = 'Striko-1';
    setInterval(function () {
        //============[' gambar ']===========//
        if (gambar == 'Striko-1') {
        document.getElementById('pills-striko1-tab').classList.add('active');
        document.getElementById('pills-striko2-tab').classList.remove('active');
        document.getElementById('pills-striko3-tab').classList.remove('active');
        document.getElementById('pills-swiftAsia-tab').classList.remove('active');
        document.getElementById('pills-striko1').classList.add('show');
        document.getElementById('pills-striko1').classList.add('active');
        document.getElementById('pills-striko2').classList.remove('show');
        document.getElementById('pills-striko2').classList.remove('active');
        document.getElementById('pills-striko3').classList.remove('show');
        document.getElementById('pills-striko3').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        gambara = 'Striko-2';
        gambar = gambara;
        } else if (gambar == 'Striko-2') {
        document.getElementById('pills-striko1-tab').classList.remove('active');
        document.getElementById('pills-striko2-tab').classList.add('active');
        document.getElementById('pills-striko3-tab').classList.remove('active');
        document.getElementById('pills-swiftAsia-tab').classList.remove('active');
        document.getElementById('pills-striko1').classList.remove('show');
        document.getElementById('pills-striko1').classList.remove('active');
        document.getElementById('pills-striko2').classList.add('show');
        document.getElementById('pills-striko2').classList.add('active');
        document.getElementById('pills-striko3').classList.remove('show');
        document.getElementById('pills-striko3').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        gambara = 'Striko-3';
        gambar = gambara;
        } else if (gambar == 'Striko-3') {
        document.getElementById('pills-striko1-tab').classList.remove('active');
        document.getElementById('pills-striko2-tab').classList.remove('active');
        document.getElementById('pills-striko3-tab').classList.add('active');
        document.getElementById('pills-swiftAsia-tab').classList.remove('active');
        document.getElementById('pills-striko1').classList.remove('show');
        document.getElementById('pills-striko1').classList.remove('active');
        document.getElementById('pills-striko2').classList.remove('show');
        document.getElementById('pills-striko2').classList.remove('active');
        document.getElementById('pills-striko3').classList.add('show');
        document.getElementById('pills-striko3').classList.add('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.remove('active');
        gambara = 'Swift_Asia';
        gambar = gambara;
        } else if (gambar == 'Swift_Asia') {
        document.getElementById('pills-striko1-tab').classList.remove('active');
        document.getElementById('pills-striko2-tab').classList.remove('active');
        document.getElementById('pills-striko3-tab').classList.remove('active');
        document.getElementById('pills-swiftAsia-tab').classList.add('active');
        document.getElementById('pills-striko1').classList.remove('show');
        document.getElementById('pills-striko1').classList.remove('active');
        document.getElementById('pills-striko2').classList.remove('show');
        document.getElementById('pills-striko2').classList.remove('active');
        document.getElementById('pills-striko3').classList.remove('show');
        document.getElementById('pills-striko3').classList.remove('active');
        document.getElementById('pills-swiftAsia').classList.add('show');
        document.getElementById('pills-swiftAsia').classList.add('active');
        gambara = 'Striko-1';
        gambar = gambara;
        } else {
        gambara = 'Striko-1';
        gambar = gambara;
        }
    }, 20000);

            //============[' SIDE BAR KIRI ']===========//
            $(function(){
                let ip_node = location.hostname;
                let socket_port = '1553';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("KiriStriko-1", (data) => {
                    if(data.length == 0){
                    document.getElementById("material_S1").innerHTML = "BELUM PREPARATION";
                    document.getElementById("nama_S1").innerHTML = "";
                    document.getElementById("nrp_S1").innerHTML = "";
                    document.getElementById("total_charging_S1").innerHTML = "0 KG";
                    document.getElementById("ingot_S1").innerHTML = "0 KG";
                    document.getElementById("exgate_S1").innerHTML = "0 KG";
                    document.getElementById("reject_parts_S1").innerHTML = "0 KG";
                    document.getElementById("tapping_S1").innerHTML = "0 KG";
                    document.getElementById("dross_S1").innerHTML = "0 KG";
                    } else {
                    document.getElementById("material_S1").innerHTML = data[0].material;
                    document.getElementById("nama_S1").innerHTML = data[0].nama;
                    document.getElementById("nrp_S1").innerHTML = data[0].nrp;
                    document.getElementById("total_charging_S1").innerHTML = data[0].total_charging + " KG";
                    document.getElementById("ingot_S1").innerHTML = data[0].ingot + " KG";
                    document.getElementById("exgate_S1").innerHTML = data[0].exgate + " KG";
                    document.getElementById("reject_parts_S1").innerHTML = data[0].reject_parts + " KG";
                    document.getElementById("tapping_S1").innerHTML = data[0].tapping + " KG";
                    document.getElementById("dross_S1").innerHTML = data[0].dross + " KG";
                    }
                })
                socket.on("KiriStriko-2", (data) => {
                    if(data.length == 0){
                    document.getElementById("material_S2").innerHTML = "BELUM PREPARATION";
                    document.getElementById("nama_S2").innerHTML = "";
                    document.getElementById("nrp_S2").innerHTML = "";
                    document.getElementById("total_charging_S2").innerHTML = "0 KG";
                    document.getElementById("ingot_S2").innerHTML = "0 KG";
                    document.getElementById("exgate_S2").innerHTML = "0 KG";
                    document.getElementById("reject_parts_S2").innerHTML = "0 KG";
                    document.getElementById("tapping_S2").innerHTML = "0 KG";
                    document.getElementById("dross_S2").innerHTML = "0 KG";
                    } else {
                    document.getElementById("material_S2").innerHTML = data[0].material;
                    document.getElementById("nama_S2").innerHTML = data[0].nama;
                    document.getElementById("nrp_S2").innerHTML = data[0].nrp;
                    document.getElementById("total_charging_S2").innerHTML = data[0].total_charging + " KG";
                    document.getElementById("ingot_S2").innerHTML = data[0].ingot + " KG";
                    document.getElementById("exgate_S2").innerHTML = data[0].exgate + " KG";
                    document.getElementById("reject_parts_S2").innerHTML = data[0].reject_parts + " KG";
                    document.getElementById("tapping_S2").innerHTML = data[0].tapping + " KG";
                    document.getElementById("dross_S2").innerHTML = data[0].dross + " KG";
                    }
                })
                socket.on("KiriStriko-3", (data) => {
                    if(data.length == 0){
                    document.getElementById("material_S3").innerHTML = "BELUM PREPARATION";
                    document.getElementById("nama_S3").innerHTML = "";
                    document.getElementById("nrp_S3").innerHTML = "";
                    document.getElementById("total_charging_S3").innerHTML = "0 KG";
                    document.getElementById("ingot_S3").innerHTML = "0 KG";
                    document.getElementById("exgate_S3").innerHTML = "0 KG";
                    document.getElementById("reject_parts_S3").innerHTML = "0 KG";
                    document.getElementById("tapping_S3").innerHTML = "0 KG";
                    document.getElementById("dross_S3").innerHTML = "0 KG";
                    } else {
                    document.getElementById("material_S3").innerHTML = data[0].material;
                    document.getElementById("nama_S3").innerHTML = data[0].nama;
                    document.getElementById("nrp_S3").innerHTML = data[0].nrp;
                    document.getElementById("total_charging_S3").innerHTML = data[0].total_charging + " KG";
                    document.getElementById("ingot_S3").innerHTML = data[0].ingot + " KG";
                    document.getElementById("exgate_S3").innerHTML = data[0].exgate + " KG";
                    document.getElementById("reject_parts_S3").innerHTML = data[0].reject_parts + " KG";
                    document.getElementById("tapping_S3").innerHTML = data[0].tapping + " KG";
                    document.getElementById("dross_S3").innerHTML = data[0].dross + " KG";
                    }
                })
                socket.on("KiriSwift_Asia", (data) => {
                    if(data.length == 0){
                    document.getElementById("material_SA").innerHTML = "BELUM PREPARATION";
                    document.getElementById("nama_SA").innerHTML = "";
                    document.getElementById("nrp_SA").innerHTML = "";
                    document.getElementById("total_charging_SA").innerHTML = "0 KG";
                    document.getElementById("ingot_SA").innerHTML = "0 KG";
                    document.getElementById("exgate_SA").innerHTML = "0 KG";
                    document.getElementById("reject_parts_SA").innerHTML = "0 KG";
                    document.getElementById("tapping_SA").innerHTML = "0 KG";
                    document.getElementById("dross_SA").innerHTML = "0 KG";
                    } else {
                    document.getElementById("material_SA").innerHTML = data[0].material;
                    document.getElementById("nama_SA").innerHTML = data[0].nama;
                    document.getElementById("nrp_SA").innerHTML = data[0].nrp;
                    document.getElementById("total_charging_SA").innerHTML = data[0].total_charging + " KG";
                    document.getElementById("ingot_SA").innerHTML = data[0].ingot + " KG";
                    document.getElementById("exgate_SA").innerHTML = data[0].exgate + " KG";
                    document.getElementById("reject_parts_SA").innerHTML = data[0].reject_parts + " KG";
                    document.getElementById("tapping_SA").innerHTML = data[0].tapping + " KG";
                    document.getElementById("dross_SA").innerHTML = data[0].dross + " KG";
                    }
                })
            });

    </script>
    <script>
        //============[' CHART DAILY REPORT ']===========//
        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv_S1");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelY: "none"
            }));

            chart.zoomOutButton.set("forceHidden", true);

            // chart.get("colors").set("step", 2);

            chart.get("colors").set("colors",[

            am5.color(0x095256),
            am5.color(0xFF8B13),
            am5.color(0xF55050),
            ]);

            // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                    baseInterval: {
                        timeUnit: "day",
                        count: 1
                    },
                    renderer: am5xy.AxisRendererX.new(root, {
                        minGridDistance: 50
                    }),
                    tooltip: am5.Tooltip.new(root, {})
                }));
                var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
                chargingAxisRenderer.grid.template.set("forceHidden", true);
                var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: chargingAxisRenderer,
                    tooltip: am5.Tooltip.new(root, {})
                }));

                var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                    opposite: true
                });
                ingotAxisRenderer.grid.template.set("forceHidden", true);
                var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: ingotAxisRenderer,
                    // forceHidden: true
                    numberFormat: "#'%'"
                }));

                // Create series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis,
                    valueYField: "charging",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "Total Charging: {valueY} kg"
                    })
                }));
                chargingSeries.data.processor = am5.DataProcessor.new(root, {
                    dateFields: ["date"],
                    dateFormat: "yyyy-MM-dd"
                    });
                var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "loss",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "loss: {valueY}%"
                    })
                }));
                lossSeries.strokes.template.setAll({
                    strokeWidth: 2
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                lossSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        strokeWidth: 2,
                        radius: 5,
                        stroke: lossSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "ingot",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "ingot: {valueY} %"
                    })
                }));
                ingotSeries.strokes.template.setAll({
                    strokeWidth: 3
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                ingotSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        width: 5,
                        height: 5,
                        centerX: am5.p50,
                        centerY: am5.p50,
                        stroketWidth: 5,
                        stroke: ingotSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                // Add cursor
                // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                chart.set("cursor", am5xy.XYCursor.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis
                }));
                chargingSeries.data.setAll(data);
                lossSeries.data.setAll(data);
                ingotSeries.data.setAll(data);
                xAxis.data.setAll(data);
                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                chargingSeries.appear(1000);
                chart.appear(1000, 100);
                $(function() {
                    let ip_node = location.hostname;
                    let socket_port = '1553';
                    let socket = io(ip_node + ':' + socket_port);
                    socket.on('connection');

                    socket.on("bulananStriko-1", (datasql) => {
                        var data = [];
                        var ChartData = document.getElementById("chartdiv_S1").innerHTML;
                        for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                            0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                            0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                        data.push(obj);
                        }
                        chargingSeries.data.setAll(data);
                        lossSeries.data.setAll(data);
                        ingotSeries.data.setAll(data);
                        xAxis.data.setAll(data);
                    })
                });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv_S2");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelY: "none"
            }));

            chart.zoomOutButton.set("forceHidden", true);

            // chart.get("colors").set("step", 2);

            chart.get("colors").set("colors",[

            am5.color(0x095256),
            am5.color(0xFF8B13),
            am5.color(0xF55050),
            ]);

            // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                    baseInterval: {
                        timeUnit: "day",
                        count: 1
                    },
                    renderer: am5xy.AxisRendererX.new(root, {
                        minGridDistance: 50
                    }),
                    tooltip: am5.Tooltip.new(root, {})
                }));
                var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
                chargingAxisRenderer.grid.template.set("forceHidden", true);
                var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: chargingAxisRenderer,
                    tooltip: am5.Tooltip.new(root, {})
                }));

                var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                    opposite: true
                });
                ingotAxisRenderer.grid.template.set("forceHidden", true);
                var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: ingotAxisRenderer,
                    // forceHidden: true
                    numberFormat: "#'%'"
                }));

                // Create series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis,
                    valueYField: "charging",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "Total Charging: {valueY} kg"
                    })
                }));
                chargingSeries.data.processor = am5.DataProcessor.new(root, {
                    dateFields: ["date"],
                    dateFormat: "yyyy-MM-dd"
                    });
                var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "loss",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "loss: {valueY}%"
                    })
                }));
                lossSeries.strokes.template.setAll({
                    strokeWidth: 2
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                lossSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        strokeWidth: 2,
                        radius: 5,
                        stroke: lossSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "ingot",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "ingot: {valueY} %"
                    })
                }));
                ingotSeries.strokes.template.setAll({
                    strokeWidth: 3
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                ingotSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        width: 5,
                        height: 5,
                        centerX: am5.p50,
                        centerY: am5.p50,
                        stroketWidth: 5,
                        stroke: ingotSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                // Add cursor
                // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                chart.set("cursor", am5xy.XYCursor.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis
                }));
                chargingSeries.data.setAll(data);
                lossSeries.data.setAll(data);
                ingotSeries.data.setAll(data);
                xAxis.data.setAll(data);
                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                chargingSeries.appear(1000);
                chart.appear(1000, 100);
                $(function() {
                    let ip_node = location.hostname;
                    let socket_port = '1553';
                    let socket = io(ip_node + ':' + socket_port);
                    socket.on('connection');

                    socket.on("bulananStriko-2", (datasql) => {
                        var data = [];
                        var ChartData = document.getElementById("chartdiv_S2").innerHTML;
                        for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                            0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                            0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                        data.push(obj);
                        }
                        chargingSeries.data.setAll(data);
                        lossSeries.data.setAll(data);
                        ingotSeries.data.setAll(data);
                        xAxis.data.setAll(data);
                    })
                });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv_S3");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelY: "none"
            }));

            chart.zoomOutButton.set("forceHidden", true);

            // chart.get("colors").set("step", 2);

            chart.get("colors").set("colors",[

            am5.color(0x095256),
            am5.color(0xFF8B13),
            am5.color(0xF55050),
            ]);

            // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                    baseInterval: {
                        timeUnit: "day",
                        count: 1
                    },
                    renderer: am5xy.AxisRendererX.new(root, {
                        minGridDistance: 50
                    }),
                    tooltip: am5.Tooltip.new(root, {})
                }));
                var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
                chargingAxisRenderer.grid.template.set("forceHidden", true);
                var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: chargingAxisRenderer,
                    tooltip: am5.Tooltip.new(root, {})
                }));

                var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                    opposite: true
                });
                ingotAxisRenderer.grid.template.set("forceHidden", true);
                var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: ingotAxisRenderer,
                    // forceHidden: true
                    numberFormat: "#'%'"
                }));

                // Create series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis,
                    valueYField: "charging",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "Total Charging: {valueY} kg"
                    })
                }));
                chargingSeries.data.processor = am5.DataProcessor.new(root, {
                    dateFields: ["date"],
                    dateFormat: "yyyy-MM-dd"
                    });
                var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "loss",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "loss: {valueY}%"
                    })
                }));
                lossSeries.strokes.template.setAll({
                    strokeWidth: 2
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                lossSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        strokeWidth: 2,
                        radius: 5,
                        stroke: lossSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "ingot",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "ingot: {valueY} %"
                    })
                }));
                ingotSeries.strokes.template.setAll({
                    strokeWidth: 3
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                ingotSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        width: 5,
                        height: 5,
                        centerX: am5.p50,
                        centerY: am5.p50,
                        stroketWidth: 5,
                        stroke: ingotSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                // Add cursor
                // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                chart.set("cursor", am5xy.XYCursor.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis
                }));
                chargingSeries.data.setAll(data);
                lossSeries.data.setAll(data);
                ingotSeries.data.setAll(data);
                xAxis.data.setAll(data);
                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                chargingSeries.appear(1000);
                chart.appear(1000, 100);
                $(function() {
                    let ip_node = location.hostname;
                    let socket_port = '1553';
                    let socket = io(ip_node + ':' + socket_port);
                    socket.on('connection');

                    socket.on("bulananStriko-3", (datasql) => {
                        var data = [];
                        var ChartData = document.getElementById("chartdiv_S3").innerHTML;
                        for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                            0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                            0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                        data.push(obj);
                        }
                        chargingSeries.data.setAll(data);
                        lossSeries.data.setAll(data);
                        ingotSeries.data.setAll(data);
                        xAxis.data.setAll(data);
                    })
                });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv_SA");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelY: "none"
            }));

            chart.zoomOutButton.set("forceHidden", true);

            // chart.get("colors").set("step", 2);

            chart.get("colors").set("colors",[

            am5.color(0x095256),
            am5.color(0xFF8B13),
            am5.color(0xF55050),
            ]);

            // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                    baseInterval: {
                        timeUnit: "day",
                        count: 1
                    },
                    renderer: am5xy.AxisRendererX.new(root, {
                        minGridDistance: 50
                    }),
                    tooltip: am5.Tooltip.new(root, {})
                }));
                var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
                chargingAxisRenderer.grid.template.set("forceHidden", true);
                var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: chargingAxisRenderer,
                    tooltip: am5.Tooltip.new(root, {})
                }));

                var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                    opposite: true
                });
                ingotAxisRenderer.grid.template.set("forceHidden", true);
                var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: ingotAxisRenderer,
                    // forceHidden: true
                    numberFormat: "#'%'"
                }));

                // Create series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis,
                    valueYField: "charging",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "Total Charging: {valueY} kg"
                    })
                }));
                chargingSeries.data.processor = am5.DataProcessor.new(root, {
                    dateFields: ["date"],
                    dateFormat: "yyyy-MM-dd"
                    });
                var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "loss",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "loss: {valueY}%"
                    })
                }));
                lossSeries.strokes.template.setAll({
                    strokeWidth: 2
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                lossSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        strokeWidth: 2,
                        radius: 5,
                        stroke: lossSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: ingotAxis,
                    valueYField: "ingot",
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {
                        labelText: "ingot: {valueY} %"
                    })
                }));
                ingotSeries.strokes.template.setAll({
                    strokeWidth: 3
                });
                // Add circle bullet
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
                ingotSeries.bullets.push(function() {
                    var graphics = am5.Circle.new(root, {
                        width: 5,
                        height: 5,
                        centerX: am5.p50,
                        centerY: am5.p50,
                        stroketWidth: 5,
                        stroke: ingotSeries.get("stroke"),
                        fill: root.interfaceColors.get("background"),
                    });
                    graphics.adapters.add("radius", function(radius, target) {
                        return target.dataItem.dataContext.townSize;
                    })
                    return am5.Bullet.new(root, {
                        sprite: graphics
                    });
                });
                // Add cursor
                // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                chart.set("cursor", am5xy.XYCursor.new(root, {
                    xAxis: xAxis,
                    yAxis: chargingAxis
                }));
                chargingSeries.data.setAll(data);
                lossSeries.data.setAll(data);
                ingotSeries.data.setAll(data);
                xAxis.data.setAll(data);
                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                chargingSeries.appear(1000);
                chart.appear(1000, 100);
                $(function() {
                    let ip_node = location.hostname;
                    let socket_port = '1553';
                    let socket = io(ip_node + ':' + socket_port);
                    socket.on('connection');

                    socket.on("bulananSwift_Asia", (datasql) => {
                        var data = [];
                        var ChartData = document.getElementById("chartdiv_SA").innerHTML;
                        for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                            0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                            0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                        data.push(obj);
                        }
                        chargingSeries.data.setAll(data);
                        lossSeries.data.setAll(data);
                        ingotSeries.data.setAll(data);
                        xAxis.data.setAll(data);
                    })
                });
        });
    </script>
    <script>
        //============[' CHART MONTHLY REPORT ']===========//
        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2_S1");

            // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelY: "none"
                }));

                chart.zoomOutButton.set("forceHidden", true);

                // chart.get("colors").set("step", 2);

                chart.get("colors").set("colors",[

                am5.color(0x095256),
                am5.color(0xFF8B13),
                am5.color(0xF55050),
                ]);

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                baseInterval: {
                    timeUnit: "month",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {
                    minGridDistance: 50
                }),
                tooltip: am5.Tooltip.new(root, {})
            }));
            var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
            chargingAxisRenderer.grid.template.set("forceHidden", true);
            var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: chargingAxisRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#'%'"
            }));

            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY} kg"
                })
            }));
            chargingSeries.data.processor = am5.DataProcessor.new(root, {
                dateFields: ["date"],
                dateFormat: "yyyy-MM-dd"
            });
            var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "loss",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "loss: {valueY}%"
                })
            }));
            lossSeries.strokes.template.setAll({
                strokeWidth: 2
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            lossSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    strokeWidth: 2,
                    radius: 5,
                    stroke: lossSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "ingot",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "ingot: {valueY} %"
                })
            }));
            ingotSeries.strokes.template.setAll({
                strokeWidth: 3
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            ingotSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    width: 5,
                    height: 5,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            chart.set("cursor", am5xy.XYCursor.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis
            }));
            chargingSeries.data.setAll(data);
            lossSeries.data.setAll(data);
            ingotSeries.data.setAll(data);
            xAxis.data.setAll(data);
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chargingSeries.appear(1000);
            chart.appear(1000, 100);
            $(function() {
                let ip_node = location.hostname;
                let socket_port = '1553';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("TahunanStriko-1", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv2_S1").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                    var obj = {};
                    obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                    obj['charging'] = parseInt(datasql[i].total_chargings);
                    obj['townSize'] = "12";
                    obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                        0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                    obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                        0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                    data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2_S2");

            // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelY: "none"
                }));

                chart.zoomOutButton.set("forceHidden", true);

                // chart.get("colors").set("step", 2);

                chart.get("colors").set("colors",[

                am5.color(0x095256),
                am5.color(0xFF8B13),
                am5.color(0xF55050),
                ]);

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                baseInterval: {
                    timeUnit: "month",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {
                    minGridDistance: 50
                }),
                tooltip: am5.Tooltip.new(root, {})
            }));
            var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
            chargingAxisRenderer.grid.template.set("forceHidden", true);
            var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: chargingAxisRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#'%'"
            }));

            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY} kg"
                })
            }));
            chargingSeries.data.processor = am5.DataProcessor.new(root, {
                dateFields: ["date"],
                dateFormat: "yyyy-MM-dd"
            });
            var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "loss",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "loss: {valueY}%"
                })
            }));
            lossSeries.strokes.template.setAll({
                strokeWidth: 2
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            lossSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    strokeWidth: 2,
                    radius: 5,
                    stroke: lossSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "ingot",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "ingot: {valueY} %"
                })
            }));
            ingotSeries.strokes.template.setAll({
                strokeWidth: 3
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            ingotSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    width: 5,
                    height: 5,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            chart.set("cursor", am5xy.XYCursor.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis
            }));
            chargingSeries.data.setAll(data);
            lossSeries.data.setAll(data);
            ingotSeries.data.setAll(data);
            xAxis.data.setAll(data);
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chargingSeries.appear(1000);
            chart.appear(1000, 100);
            $(function() {
                let ip_node = location.hostname;
                let socket_port = '1553';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("TahunanStriko-2", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv2_S2").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                    var obj = {};
                    obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                    obj['charging'] = parseInt(datasql[i].total_chargings);
                    obj['townSize'] = "12";
                    obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                        0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                    obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                        0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                    data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2_S3");

            // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelY: "none"
                }));

                chart.zoomOutButton.set("forceHidden", true);

                // chart.get("colors").set("step", 2);

                chart.get("colors").set("colors",[

                am5.color(0x095256),
                am5.color(0xFF8B13),
                am5.color(0xF55050),
                ]);

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                baseInterval: {
                    timeUnit: "month",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {
                    minGridDistance: 50
                }),
                tooltip: am5.Tooltip.new(root, {})
            }));
            var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
            chargingAxisRenderer.grid.template.set("forceHidden", true);
            var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: chargingAxisRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#'%'"
            }));

            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY} kg"
                })
            }));
            chargingSeries.data.processor = am5.DataProcessor.new(root, {
                dateFields: ["date"],
                dateFormat: "yyyy-MM-dd"
            });
            var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "loss",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "loss: {valueY}%"
                })
            }));
            lossSeries.strokes.template.setAll({
                strokeWidth: 2
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            lossSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    strokeWidth: 2,
                    radius: 5,
                    stroke: lossSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "ingot",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "ingot: {valueY} %"
                })
            }));
            ingotSeries.strokes.template.setAll({
                strokeWidth: 3
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            ingotSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    width: 5,
                    height: 5,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            chart.set("cursor", am5xy.XYCursor.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis
            }));
            chargingSeries.data.setAll(data);
            lossSeries.data.setAll(data);
            ingotSeries.data.setAll(data);
            xAxis.data.setAll(data);
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chargingSeries.appear(1000);
            chart.appear(1000, 100);
            $(function() {
                let ip_node = location.hostname;
                let socket_port = '1553';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("TahunanStriko-3", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv2_S3").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                    var obj = {};
                    obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                    obj['charging'] = parseInt(datasql[i].total_chargings);
                    obj['townSize'] = "12";
                    obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                        0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                    obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                        0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                    data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        });

        am5.ready(function() {
            var data = [];

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2_SA");

            // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelY: "none"
                }));

                chart.zoomOutButton.set("forceHidden", true);

                // chart.get("colors").set("step", 2);

                chart.get("colors").set("colors",[

                am5.color(0x095256),
                am5.color(0xFF8B13),
                am5.color(0xF55050),
                ]);

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                baseInterval: {
                    timeUnit: "month",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {
                    minGridDistance: 50
                }),
                tooltip: am5.Tooltip.new(root, {})
            }));
            var chargingAxisRenderer = am5xy.AxisRendererY.new(root, {});
            chargingAxisRenderer.grid.template.set("forceHidden", true);
            var chargingAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: chargingAxisRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#'%'"
            }));

            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY} kg"
                })
            }));
            chargingSeries.data.processor = am5.DataProcessor.new(root, {
                dateFields: ["date"],
                dateFormat: "yyyy-MM-dd"
            });
            var lossSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "loss",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "loss: {valueY}%"
                })
            }));
            lossSeries.strokes.template.setAll({
                strokeWidth: 2
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            lossSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    strokeWidth: 2,
                    radius: 5,
                    stroke: lossSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            var ingotSeries = chart.series.push(am5xy.LineSeries.new(root, {
                xAxis: xAxis,
                yAxis: ingotAxis,
                valueYField: "ingot",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "ingot: {valueY} %"
                })
            }));
            ingotSeries.strokes.template.setAll({
                strokeWidth: 3
            });
            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            ingotSeries.bullets.push(function() {
                var graphics = am5.Circle.new(root, {
                    width: 5,
                    height: 5,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
                graphics.adapters.add("radius", function(radius, target) {
                    return target.dataItem.dataContext.townSize;
                })
                return am5.Bullet.new(root, {
                    sprite: graphics
                });
            });
            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            chart.set("cursor", am5xy.XYCursor.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis
            }));
            chargingSeries.data.setAll(data);
            lossSeries.data.setAll(data);
            ingotSeries.data.setAll(data);
            xAxis.data.setAll(data);
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chargingSeries.appear(1000);
            chart.appear(1000, 100);
            $(function() {
                let ip_node = location.hostname;
                let socket_port = '1553';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("TahunanSwift_Asia", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv2_SA").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                    var obj = {};
                    obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                    obj['charging'] = parseInt(datasql[i].total_chargings);
                    obj['townSize'] = "12";
                    obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(
                        0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                    obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(
                        0)); //parseFloat(datasql[i].persen_ingots).toFixed(2)
                    data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        });

    </script>
    <script>
      function showTime() {
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        h = h < 10 ? "0" + h : h;
        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;
        var time = h + ":" + m + ":" + s + " ";
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;
        if (time >= '00:00:00' && time < '07:10:00') {
            shift = "SHIFT-1";
        } else if (time >= '07:10:00' && time < '16:00:00') {
            shift = "SHIFT-2";
        } else if (time >= '16:00:00' && time <= '23:59:59') {
            shift = "SHIFT-3";
        } else {
            shift = "SHIFT TIDAK TERDEFINISI";
        }
        setTimeout(showTime, 1000);
      }
      showTime();
    </script>
  </body>
</html>
