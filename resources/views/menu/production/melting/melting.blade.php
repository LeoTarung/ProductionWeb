@extends('main')
@section('content')
    <style>
        .chartdiv {
            width: 100%;
            height: 380px;
        }
    </style>
    <div class="main-content d-flex flex-column">
        <div class="row w-100">
            <div class="col-12">
                <div class="card chart-daily w-100 border-0">
                    <div class="warpper">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <input class="radio" id="four" name="group" type="radio">
                        <div class="tabs">
                            <label class="tab" id="one-tab" for="one">Striko-1</label>
                            <label class="tab" id="two-tab" for="two">Striko-2</label>
                            <label class="tab" id="three-tab" for="three">Striko-3</label>
                            <label class="tab" id="four-tab" for="four">Swift Asia</label>
                        </div>
                        <div class="panels">

                            <div class="panel" id="one-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-1</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"> <a class="btn btn-primary"
                                            href="{{ url('/production/melting/Striko-1') }}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv"></div>
                                </div>
                            </div>


                            <div class="panel" id="two-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-2</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="{{ url('/production/melting/Striko-2') }}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv1"></div>
                                </div>
                            </div>

                            <div class="panel" id="three-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-3</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="{{ url('/production/melting/Striko-3') }}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv2"></div>
                                </div>

                            </div>

                            <div class="panel" id="four-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Swif Asia</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="{{ url('/production/melting/Swift_Asia') }}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv3"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- =============================['CHART STRIKO - 1']============================== --}}
    <script>
        am5.ready(function() {
            var data = [];
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");
            root._logo.dispose();
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
            chart.get("colors").set("colors", [
                // orange
                am5.color(0xFB9649),
                // am5.color(0x605CB8), Biru
                // Kuning
                // am5.color(0xFFE680),
                am5.color(0xE64640),
                am5.color(0x53C292)
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
                let ip_node = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("bulananStriko1", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(0)); //parseFloat(datasql[i].persen_ingots).toFixed(2) 
                        data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        }); // end am5.ready()
    </script>

    {{-- =============================['CHART STRIKO - 2']============================== --}}
    <script>
        am5.ready(function() {
            var data = [];
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv1");
            root._logo.dispose();
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
            chart.get("colors").set("colors", [
                // orange
                am5.color(0xFB9649),
                // am5.color(0x605CB8), Biru
                // Kuning
                // am5.color(0xFFE680),
                am5.color(0xE64640),
                am5.color(0x53C292)
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
                let ip_node = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("bulananStriko2", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv1").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(0)); //parseFloat(datasql[i].persen_ingots).toFixed(2) 
                        data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        }); // end am5.ready()
    </script>

    {{-- =============================['CHART STRIKO - 3']============================== --}}
    <script>
        am5.ready(function() {
            var data = [];
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2");
            root._logo.dispose();
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
            chart.get("colors").set("colors", [
                // orange
                am5.color(0xFB9649),
                // am5.color(0x605CB8), Biru
                // Kuning
                // am5.color(0xFFE680),
                am5.color(0xE64640),
                am5.color(0x53C292)
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
                let ip_node = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("bulananStriko3", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv2").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(0)); //parseFloat(datasql[i].persen_ingots).toFixed(2) 
                        data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        }); // end am5.ready()
    </script>

    {{-- =============================['CHART SWIFT ASIA']============================== --}}
    <script>
        am5.ready(function() {
            var data = [];
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv3");
            root._logo.dispose();
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
            chart.get("colors").set("colors", [
                // orange
                am5.color(0xFB9649),
                // am5.color(0x605CB8), Biru
                // Kuning
                // am5.color(0xFFE680),
                am5.color(0xE64640),
                am5.color(0x53C292)
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
                let ip_node = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');

                socket.on("bulananSwift_Asia", (datasql) => {
                    var data = [];
                    var ChartData = document.getElementById("chartdiv3").innerHTML;
                    for (i = 0; i < datasql.length; i++) {
                        var obj = {};
                        var obj = {};
                        obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                        obj['charging'] = parseInt(datasql[i].total_chargings);
                        obj['townSize'] = "12";
                        obj["loss"] = parseInt(parseFloat(datasql[i].persen_loss).toFixed(0)); //parseFloat(datasql[i].persen_loss).toFixed(2)
                        obj["ingot"] = parseInt(parseFloat(datasql[i].persen_ingots).toFixed(0)); //parseFloat(datasql[i].persen_ingots).toFixed(2) 
                        data.push(obj);
                    }
                    chargingSeries.data.setAll(data);
                    lossSeries.data.setAll(data);
                    ingotSeries.data.setAll(data);
                    xAxis.data.setAll(data);
                })
            });
        }); // end am5.ready()
    </script>
@endsection
