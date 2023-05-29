@extends('main')
@section('content')

{{-- -------------------------------- CSS  ------------------------------ --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/css/select2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css') }}" />

{{-- <script src="'/js/"></script> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>  --}}
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script> --}}
 <script src="/js/jquery.js"></script>
 {{-- --------------------------------      ------------------------------ --}}

 <style>
    #chartdiv {
      width: 100%;
      height: 200px;
    }

    #chartdetail {
      width: 100%;
      height: 200px;
    }
    </style>

<div class="main-content d-flex flex-column mb-3 pb-5">

    {{-- row dashboard filter  --}}
    <div class="row w-100 mb-3">
        <div class="col-lg-6 col-md-6 fs-3 fw-1"> Dashboard</div>
        <div class="col-md-2 col-lg-2">
            <select class="form-select" name="nama_part" style="width: 100%;" required>
                <option value="">Choose Part</option>
                @foreach($nama_part as $select)

                <option value="{{ $select->nama_part}}">{{ $select->nama_part}}</option>                 
                @endforeach
                </select>
        </div>
        <div class="col-md-2 col-2 d-flex">
            <label for="from" class="mt-2">From:</label> 
            <input type="date" id="from" name="from" class="border border-3 ms-2">
            <label for="to" class="mt-2 ms-2">To:</label> 
            <input type="date" id="to" name="to" class="border border-3 ms-2">    
        </div>
        {{-- <div class="col-sm-2 col-lg">
            <label for="to">To:</label> 
            <input type="date" id="to" name="to" class="border border-3">
        </div> --}}
        <div class="col-sm-2 d-flex ">
            <button type="button" class="btn btn-primary w-100">Filter Part</button>
        </div>
    </div>

    {{-- row trend --}}
   <div class="row w-100 mt-1">
        <div class="card ">
            <div class="card-header fs-3 ">Trend Rejection</div>
            <div class="card-body" id="chartdiv"></div>
        </div>
   </div>

    {{-- row total  --}}
    <div class="row w-100">
        <div class="col-4">
            <div class="card " style=" border-radius: 10px 5px 5px 10px; border-left: 5px solid blue;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 ">
                            <div class="fs-2 fw-2 text-primary">Total Produksi</div>
                            <div class="fs-3 fw-1 text-dark">399</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-chart-simple fa-2xl" style="color: #80abf4;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card " style=" border-radius:105px 5px 5px105px;border-left: 5px solid green;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 ">
                            <div class="fs-2 fw-2 text-success">Total OK</div>
                            <div class="fs-3 fw-1 text-dark">382</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-regular fa-circle-check fa-2xl" style="color: #198754;"></i>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card " style=" border-radius:105px 5px 5px105px;border-left: 5px solid red;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 ">
                            <div class="fs-2 fw-2 text-danger">Total NG</div>
                            <div class="fs-3 fw-1 text-dark"> 17
                                <span class="fs-3 fw-1 text-danger">(4.26%)</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl" style="color: red"></i>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    {{-- row detail rejection --}}

    <div class="row w-100 mt-1">
        <div class="card ">
            <div class="card-header">Trend Rejection</div>
            <div class="card-body" id="chartdetail"></div>
        </div>
   </div>

   <div class="row w-100">
        <div class="card mb-5">
            <div class="card-header"> Table Part</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>WAKTU</th>
                        <th>SHIFT</th>
                        <th>LINE</th>
                        <th>NRP</th>
                        <th>NAMA PART</th>
                        <th>TOTAL PRODUKSI</th>
                        <th>TOTAL OK</th>
                        <th>TOTAL NG</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                 
                    </tbody>
                </table>
            </div>
        </div>
   </div>

</div>

 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
 <script src="/js/jquery.min.js"></script>
 <script src="/js/select2.min.js"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
   <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script>
        $(document).ready(function () {
        $('select').select2();
        });
    </script>

    {{-- js trend --}}
        <!-- Chart code -->
        <script>
        am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
        am5themes_Animated.new(root)
        ]);

        root.dateFormatter.setAll({
        dateFormat: "yyyy",
        dateFields: ["valueX"]
        });

        var data = [
        {
            date: "2012-01-01",
            value: 8
        },
        {
            date: "2012-01-02",
            value: 10
        },
        {
            date: "2012-01-03",
            value: 12
        },
        {
            date: "2012-01-04",
            value: 14
        },
        {
            date: "2012-01-05",
            value: 11
        },
        {
            date: "2012-01-06",
            value: 6
        },
        {
            date: "2012-01-07",
            value: 7
        },
        {
            date: "2012-01-08",
            value: 9
        },
        {
            date: "2012-01-09",
            value: 13
        },
        {
            date: "2012-01-10",
            value: 15
        },
        {
            date: "2012-01-11",
            value: 19
        },
        {
            date: "2012-01-12",
            value: 21
        },
        {
            date: "2012-01-13",
            value: 22
        },
        {
            date: "2012-01-14",
            value: 20
        },
        {
            date: "2012-01-15",
            value: 18
        },
        {
            date: "2012-01-16",
            value: 14
        },
        {
            date: "2012-01-17",
            value: 16
        },
        {
            date: "2012-01-18",
            value: 18
        },
        {
            date: "2012-01-19",
            value: 17
        },
        {
            date: "2012-01-20",
            value: 15
        },
        {
            date: "2012-01-21",
            value: 12
        },
        {
            date: "2012-01-22",
            value: 10
        },
        {
            date: "2012-01-23",
            value: 8
        }
        ];

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            focusable: true,
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
        pinchZoomX:true
        })
        );

        var easing = am5.ease.linear;

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(
        am5xy.DateAxis.new(root, {
            maxDeviation: 0.5,
            groupData: false,
            baseInterval: {
            timeUnit: "day",
            count: 1
            },
            renderer: am5xy.AxisRendererX.new(root, {
            pan:"zoom",
            minGridDistance: 50
            }),
            tooltip: am5.Tooltip.new(root, {})
        })
        );

        var yAxis = chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            maxDeviation: 1,
            renderer: am5xy.AxisRendererY.new(root, {pan:"zoom"})
        })
        );

        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(
        am5xy.LineSeries.new(root, {
            minBulletDistance: 10,
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            valueXField: "date",
            fill: am5.color(0xcd1818),
            stroke: am5.color(0xcd1818),
            tooltip: am5.Tooltip.new(root, {
            pointerOrientation: "horizontal",
            labelText: "{valueY}"
            })
        })
        );

        // Set up data processor to parse string dates
        // https://www.amcharts.com/docs/v5/concepts/data/#Pre_processing_data
        series.data.processor = am5.DataProcessor.new(root, {
        dateFormat: "yyyy-MM-dd",
        dateFields: ["date"]
        });

        series.data.setAll(data);

        series.bullets.push(function() {
        var circle = am5.Circle.new(root, {
            radius: 4,
            fill: series.get("fill"),
            stroke: root.interfaceColors.get("background"),
            strokeWidth: 3
        });

        return am5.Bullet.new(root, {
            sprite: circle
        });
        });


        function createTrendLine(data, color) {
        var series = chart.series.push(
            am5xy.LineSeries.new(root, {
            xAxis: xAxis,
            yAxis: yAxis,
            valueXField: "date",
            stroke: color,
            valueYField: "value"
            })
        );

        series.data.processor = am5.DataProcessor.new(root, {
            dateFormat: "yyyy-MM-dd",
            dateFields: ["date"]
        });

        series.data.setAll(data);
        series.appear(1000, 100);
        }

        // Add cursor
        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
        xAxis: xAxis
        }));
        cursor.lineY.set("visible", false);


        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear(1000, 100);
        chart.appear(1000, 100);

        }); // end am5.ready()
        </script>
   
    {{-- js detail rejection --}}
        <script>
            am5.ready(function() {
            
            
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdetail");
            
            
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
            wheelX: "panX",
            wheelY: "zoomX"
            }));
            
            
            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
            behavior: "zoomX"
            }));
            cursor.lineY.set("visible", false);
            
            var date = new Date();
            date.setHours(0, 0, 0, 0);
            var value = 100;
            
            function generateData() {
            value = Math.round((Math.random() * 10 - 5) + value);
            am5.time.add(date, "day", 1);
            return {
                date: date.getTime(),
                value: value
            };
            }
            
            function generateDatas(count) {
            var data = [];
            for (var i = 0; i < count; ++i) {
                data.push(generateData());
            }
            return data;
            }
            
            
            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
            maxDeviation: 0,
            baseInterval: {
                timeUnit: "day",
                count: 1
            },
            renderer: am5xy.AxisRendererX.new(root, {
                minGridDistance: 60
            }),
            tooltip: am5.Tooltip.new(root, {})
            }));
            
            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
            }));
            
            
            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            valueXField: "date",
            fill: am5.color(0xcd1818),
            stroke: am5.color(0xcd1818),
            tooltip: am5.Tooltip.new(root, {
                labelText: "{valueY}"
            })
            }));
            
            series.columns.template.setAll({ strokeOpacity: 0 })
            
            var data = generateDatas(50);
            series.data.setAll(data);
            
            
            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);
            
            }); // end am5.ready()
            </script>
    </head>
@endsection
