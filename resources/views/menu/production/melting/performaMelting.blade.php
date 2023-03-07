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

 <body onload="kejs('{{ $mesin }}', '{{ $shift }}', '{{ $date }}')">
  <nav class="nav nav-header ">
    <div class="row w-100">
      <div class="col-4 mb-2"> 
        <div class="d-flex justify-content-start"> 
          <img class="logo" src="{{ url('/img/nusametal.png') }}" alt="Image" />
        </div>   
      </div>

      <div class="col-4">
        <div class="title section"> MELTING - SECTION </div>
      </div>
      
      <div class="col-4 d-flex justify-content-end"> 
        <label id="MyClockDisplay" class="clock shadow" onload="showTime()"></label>
      </div>
     
  
    </div>
  </nav>

    <div class="container-fluid profile">
      <div class="row">
        
        <div class="col-3 sidebar" >
          <div class="card shadow identitas">
            <div class="col atas py-0">
               <h1 id="mesin_atas"></h1>
               <h2 class="hd" id="material"></h2>
            </div>

            <div class="gambar">
               <img src="/img/profile.png" class="img-rounded">
            </div>

            <div class="col bawah">
                <h2 id="nama"></h2>
                <h3 id="nrp"></h3>
            </div>

            <div class="row">
                <div class="col-10 produk">

                    {{-- <div class="card tc">
                        <div class="row">
                            <div class="col-7 text-center"> Total Charging </div>

                            <div class="col-5 text-center" id="total_charging"></div>
                        </div>
                    </div> --}}
                    <div class="card mt-2 tc">
                        <div class="row">
                            <div class="col-8 ps-3"> Total Charging </div>
                            <div class="col-4 ps-3" id="total_charging"></div>
                        </div> 
                    </div> 

                    <div class="card mt-2 ingot">
                        <div class="row">
                            <div class="col-8"> Ingot </div>
                            <div class="col-4" id="ingot"></div>
                        </div> 
                    </div> 

                    <div class="card mt-2 eg">
                        <div class="row">
                            <div class="col-8"> Ex - Gate </div>
                            <div class="col-4" id="exgate"> </div>
                        </div>
                    </div>

                    <div class="card mt-2 reject">
                        <div class="row">
                            <div class="col-8"> Reject Part </div>
                            <div class="col-4" id="reject_parts"> </div>
                        </div>
                    </div>

                    <div class="card mt-2 tapping">
                        <div class="row">
                            <div class="col-8"> Tapping </div>
                            <div class="col-4" id="tapping"> </div>
                        </div>
                    </div>

                    <div class="card mt-2  dross">
                        <div class="row">
                            <div class="col-8"> Dross </div>
                            <div class="col-4" id="dross"></div>
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
                        <div id="chartdiv"> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col monthly"> 
                        <div class="card shadow">
                            <div class="card-header month">Monthly Report</div>
                            <div id="chartdiv2"> </div>
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

<script>

setInterval(function(){
  if (window.location.href == "{{ url('/tv/melting/Striko-1')}}"){
    window.location.href = "Striko-2";
  } else if (window.location.href == "{{ url('/tv/melting/Striko-2')}}") {
    window.location.href = "Striko-3";
  } else if (window.location.href == "{{ url('/tv/melting/Striko-3')}}") {
    window.location.href = "Swift_Asia";
  }else if (window.location.href == "{{ url('/tv/melting/Swift_Asia')}}") {
    window.location.href = "Striko-1";
  } else {
    console.log("nyangkut di else");
  }
  
}, 20000);
// var mesin;
// setInterval(function(){
//      //============[' DATE ']===========//
//         var date = new Date().toJSON().slice(0, 10);
//     // console.log(date); // "2022-06-17"

//      //============[' SHIFT ']===========//
//         var h = new Date().getHours(); // 0 - 23
//         var m = new Date().getMinutes(); // 0 - 59
//         var s = new Date().getSeconds(); // 0 - 59
//         h = h < 10 ? "0" + h : h;
//         m = m < 10 ? "0" + m : m;
//         s = s < 10 ? "0" + s : s;
//         var time = h + ":" + m + ":" + s + " ";
//         var shift;
//         if (time >= '00:00:00' && time < '07:10:00') {
//             shifta = "SHIFT-1";
//             shift = shifta    
//         } else if (time >= '07:10:00' && time < '16:00:00') {
//             shifta = "SHIFT-2";
//             shift = shifta    
//         } else if (time >= '16:00:00' && time <= '23:59:59') {
//             shifta = "SHIFT-3";
//             shift = shifta    
//         } else {
//             shifta = "SHIFT TIDAK TERDEFINISI";
//             shift = shifta    
//         }
//      //============[' MESIN ']===========//
//         if (mesin == "Striko-1"){
//             mesina = "Striko-2";
//             mesin = mesina
//         } else if (mesin == "Striko-2") {
//             mesina = "Striko-3";
//             mesin = mesina
//         } else if (mesin == "Striko-3") {
//             mesina = "Swift_Asia";
//             mesin = mesina
//         }else if (mesin == "Swift_Asia") {
//             mesina = "Striko-1";
//             mesin = mesina
//         } else {
//             mesina = "Striko-1";
//             mesin = mesina
//         }
// }, 3000);

  function kejs(mesin, shift, date){
    
      //============[' SIDE BAR KIRI ']===========//
      $(function(){
        let ip_node = location.hostname;
        let socket_port = '1553';
        let socket = io(ip_node + ':' + socket_port);
        socket.on('connection');

          socket.on("tv_melting_kiri", (data, mesin1) => {
            if(data.length == 0){
              document.getElementById("mesin_atas").innerHTML = mesin1;
              document.getElementById("material").innerHTML = "BELUM PREPARATION";
              document.getElementById("nama").innerHTML = "";
              document.getElementById("nrp").innerHTML = "";
              document.getElementById("total_charging").innerHTML = "0 KG";
              document.getElementById("ingot").innerHTML = "0 KG";
              document.getElementById("exgate").innerHTML = "0 KG";
              document.getElementById("reject_parts").innerHTML = "0 KG";
              document.getElementById("tapping").innerHTML = "0 KG";
              document.getElementById("dross").innerHTML = "0 KG";
            } else {
              document.getElementById("mesin_atas").innerHTML = data[0].mesin;
              document.getElementById("material").innerHTML = data[0].material;
              document.getElementById("nama").innerHTML = data[0].nama;
              document.getElementById("nrp").innerHTML = data[0].nrp;
              document.getElementById("total_charging").innerHTML = data[0].total_charging + " KG";
              document.getElementById("ingot").innerHTML = data[0].ingot + " KG";
              document.getElementById("exgate").innerHTML = data[0].exgate + " KG";
              document.getElementById("reject_parts").innerHTML = data[0].reject_parts + " KG";
              document.getElementById("tapping").innerHTML = data[0].tapping + " KG";
              document.getElementById("dross").innerHTML = data[0].dross + " KG";
            }
        })
          socket.emit("Hello", mesin, shift, date); 
      });

//       //============[' CHART DAILY REPORT ']===========//
      am5.ready(function() {
            var data = [];
            
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");
            
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

                    socket.on("bulanan"+mesin, (datasql) => {
                      console.log(datasql);
                        var data = [];
                        var ChartData = document.getElementById("chartdiv").innerHTML;
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
      }); // end am5.ready()

//       //============[' CHART MONTHLY REPORT ']===========//
      am5.ready(function() {
        var data = [];

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv2");

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

                    socket.on("Tahunan"+mesin, (datasql) => {
                      console.log(datasql);
                        var data = [];
                        var ChartData = document.getElementById("chartdiv").innerHTML;
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
      }); // end am5.ready()
    }
</script>

    <script>
      function showTime() {
          var date = new Date();
          var h = date.getHours(); // 0 - 23
          var m = date.getMinutes(); // 0 - 59
          var s = date.getSeconds(); // 0 - 59
          // var session = "WIB";

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

          var time = h + ":" + m + ":" + s + " ";
          // console.log(time)
          document.getElementById("MyClockDisplay").innerText = time;
          document.getElementById("MyClockDisplay").textContent = time;

          setTimeout(showTime, 1000);
      }
      showTime();
    </script>
  </body>
</html>