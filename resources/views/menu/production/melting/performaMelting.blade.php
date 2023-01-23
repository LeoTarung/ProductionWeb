<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="/css/performa_melting.css" media="all"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    <title> Profile</title>
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
        <div class="title mt-3"></div>
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
            @foreach($sql as $key)
            <div class="col atas py-0">
               <h1>{{$key["mesin"]}}</h1>
               <h2 class="hd"> {{$key["material"]}} </h2>
            </div>

            <div class="gambar">
               <img src="../img/thv.jpg" class="img-rounded">
            </div>

            <div class="col bawah">
                <h2>{{$key["nama"]}}</h2>
                <h3>{{$key["nrp"]}}</h3>
            </div>
              
            <!-- <div class="d-flex wrapper-cards">
              <div class="card produk">
                <div class="card-header">
                  Dross
                  </div>
                <div class="card-body">
                  <h5 class="card-title"> 100%</h5>      
                </div>
              </div>

              <div class="card produk">
                <div class="card-header">
                    Ingot
                </div>
                <div class="card-body">
                  <h5 class="card-title">100%</h5>      
                </div>
              </div>        
            </div>           -->

            <div class="row">
          
              
                <div class="col-10 produk">

                    <div class="card tc">
                        <div class="row">
                            <div class="col-8"> Total Charging </div>
                            <div class="col-4"> {{$key["total_charging"]}} Kg</div>
                        </div>
                    </div>

                    <div class="card mt-2 ingot">
                        <div class="row">
                            <div class="col-8"> Ingot </div>
                            <div class="col-4"> {{$key["ingot"]}} Kg</div>
                        </div> 
                    </div> 

                    <div class="card mt-2 eg">
                        <div class="row">
                            <div class="col-8"> Ex - Gate </div>
                            <div class="col-4"> {{$key["exgate"]}} Kg</div>
                        </div>
                    </div>

                    <div class="card mt-2 reject">
                        <div class="row">
                            <div class="col-8"> Reject Part </div>
                            <div class="col-4"> {{$key["reject_parts"]}} Kg</div>
                        </div>
                    </div>

                    <div class="card mt-2 tapping">
                        <div class="row">
                            <div class="col-8"> Tapping </div>
                            <div class="col-4"> {{$key["tapping"]}} Kg</div>
                        </div>
                    </div>

                    <div class="card mt-2  dross">
                        <div class="row">
                            <div class="col-8"> Dross </div>
                            <div class="col-4"> {{$key["dross"]}} Kg</div>
                        </div>
                    </div>

                </div>
                @endforeach
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


      <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
      
      <!-- Chart code -->
      <script>
      am5.ready(function() {
      
      var data = [{
        "date": "2012-01-01",
        "distance": 450,
        "townName": "New York",
        "townSize": 12,
        "latitude": 50.71,
        "longitude": 10.4,
        "duration": 500
      }, {
        "date": "2012-01-02",
        "distance": 171,
        "townName": "Washington",
        "townSize": 7,
        "latitude": 38.89,
        "duration": 482
      }, {
        "date": "2012-01-03",
        "distance": 533,
        "townName": "Wilmington",
        "townSize": 3,
        "latitude": 34.22,
        "duration": 562
      }, {
        "date": "2012-01-04",
        "distance": 345,
        "townName": "Jacksonville",
        "townSize": 3.5,
        "latitude": 30.35,
        "duration": 379
      }, {
        "date": "2012-01-05",
        "distance": 680,
        "townName": "Miami",
        "townSize": 5,
        "latitude": 25.83,
        "duration": 501
      }, {
        "date": "2012-01-06",
        "distance": 386,
        "townName": "Tallahassee",
        "townSize": 3.5,
        "latitude": 30.46,
        "duration": 443
      }, {
        "date": "2012-01-07",
        "distance": 348,
        "townName": "New Orleans",
        "townSize": 5,
        "latitude": 29.94,
        "duration": 405
      }, {
        "date": "2012-01-08",
        "distance": 238,
        "townName": "Houston",
        "townSize": 8,
        "latitude": 29.76,
        "duration": 309
      }, {
        "date": "2012-01-09",
        "distance": 218,
        "townName": "Dalas",
        "townSize": 8,
        "latitude": 32.8,
        "duration": 287
      }, {
        "date": "2012-01-10",
        "distance": 349,
        "townName": "Oklahoma City",
        "townSize": 5,
        "latitude": 35.49,
        "duration": 485
      }, {
        "date": "2012-01-11",
        "distance": 603,
        "townName": "Kansas City",
        "townSize": 5,
        "latitude": 39.1,
        "duration": 890
      }, {
        "date": "2012-01-12",
        "distance": 534,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 39.74,
        "duration": 810
      }, {
        "date": "2012-01-13",
        "townName": "Salt Lake City",
        "townSize": 6,
        "distance": 425,
        "duration": 670,
        "latitude": 40.75,
        "dashLength": 8,
        "alpha": 0.4
      }, {
        "date": "2012-01-14",
        "distance": 300,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 39.74,
        "duration": 520
      }, {
        "date": "2012-01-15",
        "distance": 444,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 45.74,
        "duration": 420
      }, {
        "date": "2012-01-15",
        "distance": 334,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 33.74,
        "duration": 610
      }, {
        "date": "2012-01-16",
        "distance": 250,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 39.74,
        "duration": 400
      }, {
        "date": "2012-01-17"
      },{
        "date": "2012-01-18"
      }, {
        "date": "2012-01-19"
      }, {
        "date": "2012-01-20"
      }];
      
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
        baseInterval: { timeUnit: "day", count: 1 },
        renderer: am5xy.AxisRendererX.new(root, { minGridDistance: 50 }),
        tooltip: am5.Tooltip.new(root, {})
      }));
      
      
      var distanceAxisRenderer = am5xy.AxisRendererY.new(root, {});
      distanceAxisRenderer.grid.template.set("forceHidden", true);
      var distanceAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: distanceAxisRenderer,
        tooltip: am5.Tooltip.new(root, {})
      }));
      
      var latitudeAxisRenderer = am5xy.AxisRendererY.new(root, {});
      latitudeAxisRenderer.grid.template.set("forceHidden", true);
      var latitudeAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: latitudeAxisRenderer,
        forceHidden: true
      }));
      
      var durationAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true
      });
      durationAxisRenderer.grid.template.set("forceHidden", true);
      var durationAxis = chart.yAxes.push(am5xy.DurationAxis.new(root, {
        baseUnit:"minute",
        renderer: durationAxisRenderer,
        extraMax:0.3
      }));
      
      // Create series
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
      var distanceSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
        xAxis: xAxis,
        yAxis: distanceAxis,
        valueYField: "distance",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"{valueY} miles"
        })
      }));
      
      distanceSeries.data.processor = am5.DataProcessor.new(root, {
        dateFields: ["date"],
        dateFormat: "yyyy-MM-dd"
      });
      
      var latitudeSeries = chart.series.push(am5xy.LineSeries.new(root, {
        xAxis: xAxis,
        yAxis: latitudeAxis,
        valueYField: "latitude",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"latitude: {valueY} ({townName})"
        })  
      }));

      
      
      latitudeSeries.strokes.template.setAll({ strokeWidth: 2 });
      
      // Add circle bullet
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
      latitudeSeries.bullets.push(function() {
        var graphics = am5.Circle.new(root, {
          strokeWidth: 2,
          radius: 5,
          stroke: latitudeSeries.get("stroke"),
          fill: root.interfaceColors.get("background"),
        });
      
        graphics.adapters.add("radius", function(radius, target) {
          return target.dataItem.dataContext.townSize;
        })
      
        return am5.Bullet.new(root, {
          sprite: graphics
        });
      });
      
      var durationSeries = chart.series.push(am5xy.LineSeries.new(root, {
        xAxis: xAxis,
        yAxis: durationAxis,
        valueYField: "duration",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"duration: {valueY.formatDuration()}"
        }) 
      }));
      
      durationSeries.strokes.template.setAll({ strokeWidth: 2 });
      
      // Add circle bullet
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
      durationSeries.bullets.push(function() {
        var graphics = am5.Rectangle.new(root, {
          width:10, 
          height:10,
          centerX:am5.p50,
          centerY:am5.p50,
          fill: durationSeries.get("stroke")
        });
      
        return am5.Bullet.new(root, {
          sprite: graphics
        });
      });
      
      // Add cursor
      // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
      chart.set("cursor", am5xy.XYCursor.new(root, {
        xAxis: xAxis,
        yAxis: distanceAxis
      }));
      
      
      distanceSeries.data.setAll(data);
      latitudeSeries.data.setAll(data);
      durationSeries.data.setAll(data);
      xAxis.data.setAll(data);
      
      // Make stuff animate on load
      // https://www.amcharts.com/docs/v5/concepts/animations/
      distanceSeries.appear(1000);
      chart.appear(1000, 100);
      
      }); // end am5.ready()
      </script>

      <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

      <!-- Chart code -->
      <script>
      am5.ready(function() {

      var data = [{
        "date": "2012-01-01",
        "distance": 227,
        "townName": "New York",
        "townSize": 12,
        "latitude": 40.71,
        "duration": 408
      }, {
        "date": "2012-01-02",
        "distance": 371,
        "townName": "Washington",
        "townSize": 7,
        "latitude": 38.89,
        "duration": 482
      }, {
        "date": "2012-01-03",
        "distance": 433,
        "townName": "Wilmington",
        "townSize": 3,
        "latitude": 34.22,
        "duration": 562
      }, {
        "date": "2012-01-04",
        "distance": 345,
        "townName": "Jacksonville",
        "townSize": 3.5,
        "latitude": 30.35,
        "duration": 379
      }, {
        "date": "2012-01-05",
        "distance": 480,
        "townName": "Miami",
        "townSize": 5,
        "latitude": 25.83,
        "duration": 501
      }, {
        "date": "2012-01-06",
        "distance": 386,
        "townName": "Tallahassee",
        "townSize": 3.5,
        "latitude": 30.46,
        "duration": 443
      }, {
        "date": "2012-01-07",
        "distance": 348,
        "townName": "New Orleans",
        "townSize": 5,
        "latitude": 29.94,
        "duration": 405
      }, {
        "date": "2012-01-08",
        "distance": 238,
        "townName": "Houston",
        "townSize": 8,
        "latitude": 29.76,
        "duration": 309
      }, {
        "date": "2012-01-09",
        "distance": 218,
        "townName": "Dalas",
        "townSize": 8,
        "latitude": 32.8,
        "duration": 287
      }, {
        "date": "2012-01-10",
        "distance": 349,
        "townName": "Oklahoma City",
        "townSize": 5,
        "latitude": 35.49,
        "duration": 485
      }, {
        "date": "2012-01-11",
        "distance": 603,
        "townName": "Kansas City",
        "townSize": 5,
        "latitude": 39.1,
        "duration": 890
      }, {
        "date": "2012-01-12",
        "distance": 534,
        "townName": "Denver",
        "townSize": 9,
        "latitude": 39.74,
        "duration": 810
      }, {
        "date": "2012-01-13",
        "townName": "Salt Lake City",
        "townSize": 6,
        "distance": 425,
        "duration": 670,
        "latitude": 40.75,
        "dashLength": 8,
        "alpha": 0.4
      }, {
        "date": "2012-01-14",
        "latitude": 36.1,
        "duration": 470,
        "townName": "Las Vegas"
      }, {
        "date": "2012-01-15"
      }, {
        "date": "2012-01-16"
      }, {
        "date": "2012-01-17"
      }];

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
      am5.color(0x5aaa95),
      ]);

      // Create axes
      // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
      var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        baseInterval: { timeUnit: "day", count: 1 },
        renderer: am5xy.AxisRendererX.new(root, { minGridDistance: 50 }),
        tooltip: am5.Tooltip.new(root, {})
      }));


      var distanceAxisRenderer = am5xy.AxisRendererY.new(root, {});
      distanceAxisRenderer.grid.template.set("forceHidden", true);
      var distanceAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: distanceAxisRenderer,
        tooltip: am5.Tooltip.new(root, {})
      }));

      var latitudeAxisRenderer = am5xy.AxisRendererY.new(root, {});
      latitudeAxisRenderer.grid.template.set("forceHidden", true);
      var latitudeAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: latitudeAxisRenderer,
        forceHidden: true
      }));

      var durationAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true
      });
      durationAxisRenderer.grid.template.set("forceHidden", true);
      var durationAxis = chart.yAxes.push(am5xy.DurationAxis.new(root, {
        baseUnit:"minute",
        renderer: durationAxisRenderer,
        extraMax:0.3
      }));

      // Create series
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
      var distanceSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
        xAxis: xAxis,
        yAxis: distanceAxis,
        valueYField: "distance",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"{valueY} miles"
        })
      }));

      distanceSeries.data.processor = am5.DataProcessor.new(root, {
        dateFields: ["date"],
        dateFormat: "yyyy-MM-dd"
      });

      var latitudeSeries = chart.series.push(am5xy.LineSeries.new(root, {
        xAxis: xAxis,
        yAxis: latitudeAxis,
        valueYField: "latitude",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"latitude: {valueY} ({townName})"
        })  
      }));

      latitudeSeries.strokes.template.setAll({ strokeWidth: 2 });

      // Add circle bullet
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
      latitudeSeries.bullets.push(function() {
        var graphics = am5.Circle.new(root, {
          strokeWidth: 2,
          radius: 5,
          stroke: latitudeSeries.get("stroke"),
          fill: root.interfaceColors.get("background"),
        });

        graphics.adapters.add("radius", function(radius, target) {
          return target.dataItem.dataContext.townSize;
        })

        return am5.Bullet.new(root, {
          sprite: graphics
        });
      });

      var durationSeries = chart.series.push(am5xy.LineSeries.new(root, {
        xAxis: xAxis,
        yAxis: durationAxis,
        valueYField: "duration",
        valueXField: "date",
        tooltip:am5.Tooltip.new(root, {
          labelText:"duration: {valueY.formatDuration()}"
        }) 
      }));

      durationSeries.strokes.template.setAll({ strokeWidth: 2 });

      // Add circle bullet
      // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
      durationSeries.bullets.push(function() {
        var graphics = am5.Rectangle.new(root, {
          width:10, 
          height:10,
          centerX:am5.p50,
          centerY:am5.p50,
          fill: durationSeries.get("stroke")
        });

        return am5.Bullet.new(root, {
          sprite: graphics
        });
      });

      // Add cursor
      // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
      chart.set("cursor", am5xy.XYCursor.new(root, {
        xAxis: xAxis,
        yAxis: distanceAxis
      }));


      distanceSeries.data.setAll(data);
      latitudeSeries.data.setAll(data);
      durationSeries.data.setAll(data);
      xAxis.data.setAll(data);

      // Make stuff animate on load
      // https://www.amcharts.com/docs/v5/concepts/animations/
      distanceSeries.appear(1000);
      chart.appear(1000, 100);

      }); // end am5.ready()
      </script>


  </body>
</html>