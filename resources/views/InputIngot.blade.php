<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/Ingot.css">
    <title>STOCK INGOT</title>
</head>
<body>
    <div class="container-fluid" id="form"> 
        <div class="row">
          <div class=" d-flex justify-content-center "><p class="fs-3">STOCK INGOT</p></div>
          <div class=" d-flex justify-content-end ">
            <div id= "date" class="fs-5"> </div>
          </div>

          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link {{( $input === "LihatIngot") ? 'active' : ''}}" href="/LihatIngot">LIHAT INGOT</a>
                  <a class="nav-link {{( $input === "InputIngot") ? 'active' : ''}}" aria-current="input" href="/InputIngot">INPUT INGOT</a>
                </div>
              </div>
            </div>
          </nav>

          <div class="col">
            <div class="row dasar">
            {{-- row col --}}
            <div class="row row-cols-4 g-4">
              <div class="col">
                <div class="chart1 mx-5">AC2B
                  <!-- Styles -->
                  <style>
                  #chartdiv {
                  width: 100%;
                  height: 150%;
                  background-color: white;
                  }
                  </style>
                   <!-- Resources -->
                   <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                   <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                   <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                   <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                   <!-- Chart code -->
                   <script>
                   am5.ready(function() {
                    
                    // Create root element// https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root = am5.Root.new("chartdiv");
                    
                    // Set themes// https://www.amcharts.com/docs/v5/concepts/themes/
                    root.setThemes([
                      am5themes_Animated.new(root)
                    ]);

                    root._logo.dispose();
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/

                    var chart = root.container.children.push(
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes

                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {
                      innerRadius: -10,
                      strokeOpacity: 1,
                      strokeWidth: 15,
                      strokeGradient: am5.LinearGradient.new(root, {
                        rotation: 0,
                        stops: [
                        { color: am5.color(0xf21e12) },
                        { color: am5.color(0x19d228) },
                        { color: am5.color(0x6794dc) }
                      ]
                    })
                  });

                  var xAxis = chart.xAxes.push(
                    am5xy.ValueAxis.new(root, {
                      maxDeviation: 0,
                      min: 0,
                      max: 100,
                      strictMinMax: true,
                      renderer: axisRenderer
                    })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands

                    var axisDataItem = xAxis.makeDataItem({});
                    axisDataItem.set("value", 0);
                    var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                      sprite: am5radar.ClockHand.new(root, {
                        radius: am5.percent(99)
                      })
                    }));
                    xAxis.createAxisRange(axisDataItem);
                    axisDataItem.get("grid").set("visible", false);
                    setInterval(() => {
                      axisDataItem.animate({
                        key: "value",
                        to: Math.round(Math.random() * 100),
                        duration: 800,
                        easing: am5.ease.out(am5.ease.cubic)
                      });
                    }, 2000);

                    // Make stuff animate on load
                    chart.appear(1000, 100);
                  }); 
                  // end am5.ready()
                </script>
                
                <!-- HTML -->
                <div id="chartdiv"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                    </div>
                  </div>
                </div>
  {{-- MERAH --}}
                <div class="col">
                  <div class="chart2 mx-5">AC2BF
                    <!-- Styles -->
                    <style>
                    #chartdiv1 {
                      width: 100%;
                      height: 150%;
                      background-color: white;
                      }
                      </style>
                    <!-- Resources -->
                      <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                      <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                      <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                      <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv1");
                      
                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                        am5themes_Animated.new(root)
                      ]);

                      root._logo.dispose();

                      // Create chart
                      // https://www.amcharts.com/docs/v5/charts/radar-chart/

                      var chart = root.container.children.push(
                        am5radar.RadarChart.new(root, {
                          panX: false,
                          panY: false,
                          startAngle: 180,
                          endAngle: 360
                        })
                        );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes

                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {
                      innerRadius: -10,
                      strokeOpacity: 1,
                      strokeWidth: 15,
                      strokeGradient: am5.LinearGradient.new(root, {
                        rotation: 0,
                        stops: [
                          { color: am5.color(0xf21e12) },
                          { color: am5.color(0x19d228) },
                          { color: am5.color(0x6794dc) }
                        ]
                      })
                    });

                    var xAxis = chart.xAxes.push(
                      am5xy.ValueAxis.new(root, {
                        maxDeviation: 0,
                        min: 0,
                        max: 100,
                        strictMinMax: true,
                        renderer: axisRenderer
                      })
                      );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands

                    var axisDataItem = xAxis.makeDataItem({});
                    axisDataItem.set("value", 0);

                    var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                      sprite: am5radar.ClockHand.new(root, {
                        radius: am5.percent(99)
                      })
                    }));
                    
                    xAxis.createAxisRange(axisDataItem);
                    axisDataItem.get("grid").set("visible", false);
                    setInterval(() => {
                    axisDataItem.animate({
                      key: "value",
                      to: Math.round(Math.random() * 100),
                      duration: 800,
                      easing: am5.ease.out(am5.ease.cubic)
                    });
                  },2000);
              
                  // Make stuff animate on load

                    chart.appear(1000, 100);
                    }); 
                  // end am5.ready()
                </script>
                
                <!-- HTML -->
                  <div id="chartdiv1"></div>
                  <div class="tulisan">
                    <p>80.000</p>
                    <style>
                    .tulisan{
                      color: black;
                      background-color: aliceblue
                    }
                  </style>
                  </div>
                </div>
              </div>
  {{-- UNGU --}}
                <div class="col">
                  <div class="chart3 mx-5">AC4B
                    <!-- Styles -->
                    <style>
                    #chartdiv2 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->          
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv2");

                      // Set themes// https://www.amcharts.com/docs/v5/concepts/themes/
              
                      root.setThemes([            
                      am5themes_Animated.new(root)            
                    ]);
           
                    root._logo.dispose();
           
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/           
                    
                    var chart = root.container.children.push(           
                    am5radar.RadarChart.new(root, {           
                      panX: false,           
                      panY: false,           
                      startAngle: 180,           
                      endAngle: 360           
                    })           
                    );

              
                    // Create axis and its renderer              
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes                    
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,            
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },              
                        { color: am5.color(0x19d228) },            
                        { color: am5.color(0x6794dc) }            
                      ]              
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(              
                  am5xy.ValueAxis.new(root, {            
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
                
                  // Add clock hand                
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands

                  var axisDataItem = xAxis.makeDataItem({});                
                  axisDataItem.set("value", 0);                                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {                
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                
                    })                
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);                
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                                
                }); 
                // end am5.ready()
                </script>
                
                <!-- HTML -->
                <div id="chartdiv2"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>
  {{-- ungu --}}
                <div class="col">
                  <div class="chart4 mx-5">AC4CH
                    <!-- Styles -->
                    <style>
                    #chartdiv3 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->
            
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv3");

                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                      am5themes_Animated.new(root)            
                    ]);
            
                    root._logo.dispose();
            
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
            
                    var chart = root.container.children.push(            
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,              
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },                 
                        { color: am5.color(0x19d228) },                 
                        { color: am5.color(0x6794dc) }                 
                      ]                
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(
                  am5xy.ValueAxis.new(root, {              
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
              
                  // Add clock hand              
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                
                  var axisDataItem = xAxis.makeDataItem({});
                  axisDataItem.set("value", 0);                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                  
                    })              
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);              
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);
                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                
                });               
                // end am5.ready()                
                </script>
                
                <!-- HTML -->
                <div id="chartdiv3"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>
{{-- HITAM --}}
              <div class="col">
                  <div class="chart5 mx-5">ADC12
                    <!-- Styles -->
                    <style>
                    #chartdiv4 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->
            
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv4");

                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                      am5themes_Animated.new(root)            
                    ]);
            
                    root._logo.dispose();
            
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
            
                    var chart = root.container.children.push(            
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,              
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },                 
                        { color: am5.color(0x19d228) },                 
                        { color: am5.color(0x6794dc) }                 
                      ]                
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(
                  am5xy.ValueAxis.new(root, {              
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
              
                  // Add clock hand              
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                
                  var axisDataItem = xAxis.makeDataItem({});
                  axisDataItem.set("value", 0);                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                  
                    })              
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);              
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);
                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                
                });               
                // end am5.ready()                
                </script>
                
                <!-- HTML -->
                <div id="chartdiv4"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>
{{-- PUTIH --}}
              <div class="col">
                  <div class="chart6 mx-5">HD2
                    <!-- Styles -->
                    <style>
                    #chartdiv5 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->
            
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv5");

                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                      am5themes_Animated.new(root)            
                    ]);
            
                    root._logo.dispose();
            
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
            
                    var chart = root.container.children.push(            
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,              
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },                 
                        { color: am5.color(0x19d228) },                 
                        { color: am5.color(0x6794dc) }                 
                      ]                
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(
                  am5xy.ValueAxis.new(root, {              
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
              
                  // Add clock hand              
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                
                  var axisDataItem = xAxis.makeDataItem({});
                  axisDataItem.set("value", 0);                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                  
                    })              
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);              
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);
                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                
                });               
                // end am5.ready()                
                </script>
                
                <!-- HTML -->
                <div id="chartdiv5"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>
{{-- KUNING --}}
              <div class="col">
                  <div class="chart7 mx-5">HD4
                    <!-- Styles -->
                    <style>
                    #chartdiv6 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->
            
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv6");

                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                      am5themes_Animated.new(root)            
                    ]);
            
                    root._logo.dispose();
            
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
            
                    var chart = root.container.children.push(            
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,              
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },                 
                        { color: am5.color(0x19d228) },                 
                        { color: am5.color(0x6794dc) }                 
                      ]                
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(
                  am5xy.ValueAxis.new(root, {              
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
              
                  // Add clock hand              
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                
                  var axisDataItem = xAxis.makeDataItem({});
                  axisDataItem.set("value", 0);                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                  
                    })              
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);              
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);
                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                
                });               
                // end am5.ready()                
                </script>
                
                <!-- HTML -->
                <div id="chartdiv6"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>
              {{--  --}}             
              <div class="col">
                  <div class="chart8 mx-5">YH3R
                    <!-- Styles -->
                    <style>
                    #chartdiv7 {                
                      width: 100%;
                      height: 150%;
                      background-color: white;
                    }
                  </style>
                    <!-- Resources -->
            
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                      // Create root element
                      // https://www.amcharts.com/docs/v5/getting-started/#Root_element

                      var root = am5.Root.new("chartdiv7");

                      // Set themes
                      // https://www.amcharts.com/docs/v5/concepts/themes/

                      root.setThemes([
                      am5themes_Animated.new(root)            
                    ]);
            
                    root._logo.dispose();
            
                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
            
                    var chart = root.container.children.push(            
                    am5radar.RadarChart.new(root, {
                      panX: false,
                      panY: false,
                      startAngle: 180,
                      endAngle: 360
                    })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
              
                    var axisRenderer = am5radar.AxisRendererCircular.new(root, {              
                      innerRadius: -10,              
                      strokeOpacity: 1,              
                      strokeWidth: 15,              
                      strokeGradient: am5.LinearGradient.new(root, {              
                        rotation: 0,              
                        stops: [              
                        { color: am5.color(0xf21e12) },                 
                        { color: am5.color(0x19d228) },                 
                        { color: am5.color(0x6794dc) }                 
                      ]                
                    })              
                  });
              
                  var xAxis = chart.xAxes.push(
                  am5xy.ValueAxis.new(root, {              
                    maxDeviation: 0,              
                    min: 0,              
                    max: 100,              
                    strictMinMax: true,              
                    renderer: axisRenderer              
                  })              
                  );
              
                  // Add clock hand              
                  // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                
                  var axisDataItem = xAxis.makeDataItem({});
                  axisDataItem.set("value", 0);                      
                  var bullet = axisDataItem.set("bullet", am5xy.AxisBullet.new(root, {
                    sprite: am5radar.ClockHand.new(root,                 
                    {radius: am5.percent(99)                  
                    })              
                  })                
                  );
                                
                  xAxis.createAxisRange(axisDataItem);                
                  axisDataItem.get("grid").set("visible", false);              
                  setInterval(() => {                
                    axisDataItem.animate({                
                      key: "value",                
                      to: Math.round(Math.random() * 100),                
                      duration: 800,                
                      easing: am5.ease.out(am5.ease.cubic)                
                    });                
                  }, 2000);
                
                  // Make stuff animate on load                
                  chart.appear(1000, 100);                
                });               
                // end am5.ready()                
                </script>
                
                <!-- HTML -->
                <div id="chartdiv7"></div>
                <div class="tulisan">
                  <p>80.000</p>
                  <style>
                  .tulisan{
                    color: black;
                    background-color: aliceblue
                    }
                    </style>
                  </div>
                </div>
              </div>

              <div class="col">
                <button type="button" class="btn btn-info btn-lg" data-bs-target="#review" data-bs-toggle="modal" id="submit">UPDATE DATA</button>
              </div>
      
              <div class="col">
                <button type="button" class="btn btn-info btn-lg" data-bs-target="#tes" data-bs-toggle="modal" id="submit">INPUT TIMBANGAN <br>DAILY</button>
              </div>  
      
              <div class="col">
                <button type="button" class="btn btn-info btn-lg" data-bs-target="#input" data-bs-toggle="modal" id="submit">INPUT ONGOING</button>
              </div>  
              </div>
      </div>
      </div>
    </div>
  </div>
{{-- modal --}}
  <div class="modal" id="review" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">INPUT INGOT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="overflow-x: auto;">
          
          <!-- Split dropend button -->
          <select class="form-select " aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($input as $item)
            <option value="2"> {{$item['initial']}}</option>  
            @endforeach
          </select>
          <br>
          <div class="sap">
            KODE SAP : <input type="text" class="input" name="sap" disabled>
          </div>
          <br>
          <div class="mrp"> 
            KEBUTUHAN MRP   : <input type="text" class="input" name="mrp">
          </div>
          <br>
          <div class="daily"> 
            KEBUTUHAN DAILY : <input type="text" class="input" name="daily">
          </div>
          <br>
          <div class="min">
            STOCK MIN : <input type="text" class="input" name="min">
          </div>
          <br>
          <div class="max">
            STOCK MAX : <input type="text" class="input" name="max">
          </div>
          <br>
          <button class="btn btn-primary" type="submit" name="submit" id="submit">SUBMIT!</button>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="tes" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">INPUT TIMBANGAN DAILY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="overflow-x: auto;">
        <div class="nrp">
          NRP : <input type="text" class="input" id="nrp" onkeyup="isi_otomatis()" name="nrp">
        </div>
        <br>
        <div class="nama">
          NAMA : <input type="text" class="input" id="nama" name="nama" disabled>
        </div>
        
        <br>
        <!-- Split dropend button -->
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              TIPE INGOT
            </button>
            <ul class="dropdown-menu">
              @foreach ($input as $item)
              <li><a class="dropdown-item" href="or">{{$item['initial']}}</a></li>    
              @endforeach
            </ul>
          </div>
        <br><br>
        <div class="sap">
          KODE SAP : <input type="text" class="input" name="sap" disabled>
        </div>
        <br>
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              NAMA VENDOR
            </button>
            <ul class="dropdown-menu">
              @foreach ($vendor as $item)
              <li><a class="dropdown-item" href="or">{{$item['initial']}}</a></li>    
              @endforeach
            </ul>
          </div>
        <br><br>
        <div>
          <label for="start_date">TANGGAL : </label>
          <input type="datetime-local" name="start_date" id="start_date">  
        </div>
        <br>
        <div>
          QUANTITY : <input type="text">
        </div>
        <br>
        <button class="btn btn-primary" type="submit" name="submit" id="submit">SUBMIT!</button>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>

{{-- modal --}}
  <div class="modal" id="input" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">INPUT ONGOING</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="overflow-x: auto;">
        <div class="nrp">
          NRP : <input type="text" class="input" name="nrp">
        </div>
        <br>
        <div class="nama">
          NAMA : <input type="text" class="input" id="nama" name="nama" disabled>
        </div>
        <br>
          <!-- Split dropend button -->
          <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              TIPE INGOT
            </button>
            <ul class="dropdown-menu">
              @foreach ($input as $item)
              <li><a class="dropdown-item" href="or">{{$item['initial']}}</a></li>    
              @endforeach
            </ul>
          </div>
          <br><br>
          <div class="sap">
          KODE SAP : <input type="text" class="input" name="sap" disabled>
        </div>
        <br>
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              KODE VENDOR
            </button>
            <ul class="dropdown-menu">
              @foreach ($vendor as $item)
              <li><a class="dropdown-item" href="or">{{$item['kode']}}</a></li>    
              @endforeach
            </ul>
          </div>
          <br><br>
          <div class="sap">
          NAMA VENDOR : <input type="text" class="input" name="sap" disabled>
        </div>
        <br>
        <div class="sap">
          TUJUAN 1: <input type="text" class="input" name="sap">
        </div>
        <br>
        <div class="sap">
          TUJUAN 2: <input type="text" class="input" name="sap">
        </div>
        <br>

          <button class="btn btn-primary" type="submit" name="submit" id="submit">SUBMIT!</button>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var x = document.getElementById("nrp").value;
                console.log(x)

                // var nrp = $("#nrp").val();
                // $.ajax({
                //     url: '/IsiOtomatis',
                //     data:"nrp="+nrp ,
                // }).success(function (data) {
                //     var json = data,
                //     obj = JSON.parse(json);
                //     $('#nama').val(obj.nama);
                // });
            }
        </script>
</body>
</html>

