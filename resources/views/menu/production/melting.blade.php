@extends('main')
@section('content')
    <div class="main-content d-flex flex-column">
        <div class="row w-100">
            <div class="col-12">
                <div class="card chart-daily w-100 border-0">
                    <div class="card-header shadow-sm">
                        <div class="row">
                            <div class="col-6">
                                <div class="title-chart font-blue"> Monitoring Striko-1</div>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <button class="prev-melt-button"> <i class='bx bxs-chevron-left bx-sm'></i> </button>
                                <button class="next-melt-button"> <i class='bx bxs-chevron-right bx-sm ms-1'></i> </button>
                                <button class="close-melt-button"> <i class='bx bxs-x-square bx-sm bx-spin-hover ms-1'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="daily-report font-blue ms-3 text-center mt-2">Daily Report</div>
                        <div id="chartdiv" class="mt-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col-6 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5">
                        <div class="font-blue title-report-melt">Today Report Charge</div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center ">
                            <div class="card mt-3">
                                <div class="row">
                                    <div class="col-6 ms-3 mt-2 ">
                                        <div class="font-blue  fw-bold fw-bold">Ingot</div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">356 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 ms-3 ">
                                        <div class="font-blue  fw-bold">Reject Parts</div>
                                    </div>
                                    <div class="col-4  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">1453 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 ms-3 ">
                                        <div class="font-blue  fw-bold">Return</div>
                                    </div>
                                    <div class="col-4  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">32 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 ms-3 ">
                                        <div class="font-blue  fw-bold">Tapping</div>
                                    </div>
                                    <div class="col-4  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">32 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-4 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5 ">
                        <div class="font-blue title-report-melt">Today Report Losses</div>
                    </div>

                </div>
            </div> --}}
            <div class="col-6 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5">
                        <div class="font-blue title-report-melt">Today Report Losses</div>
                    </div>
                    <div class="card-content">
                        <div id="chartdiv2"></div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                <div class="red-losses"></div>
                                <div class="ms-3">Losses : 50 Kg</div>
                            </div>
                            {{-- <div class="col-6 d-flex justify-acontent-start fw-bold mb-2"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resources chart 1 -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Chart code -->
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

            chart.get("colors").set("step", 2);

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
                baseUnit: "minute",
                renderer: durationAxisRenderer,
                extraMax: 0.3
            }));

            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var distanceSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: distanceAxis,
                valueYField: "distance",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY} miles"
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
                tooltip: am5.Tooltip.new(root, {
                    labelText: "latitude: {valueY} ({townName})"
                })
            }));

            latitudeSeries.strokes.template.setAll({
                strokeWidth: 2
            });

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
                tooltip: am5.Tooltip.new(root, {
                    labelText: "duration: {valueY.formatDuration()}"
                })
            }));

            durationSeries.strokes.template.setAll({
                strokeWidth: 2
            });

            // Add circle bullet
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Bullets
            durationSeries.bullets.push(function() {
                var graphics = am5.Rectangle.new(root, {
                    width: 10,
                    height: 10,
                    centerX: am5.p50,
                    centerY: am5.p50,
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

    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            am4core.addLicense("ch-custom-attribution");
            //value
            var value = 70;

            // create chart
            var chart = am4core.create("chartdiv2", am4charts.GaugeChart);
            chart.innerRadius = am4core.percent(82);

            /**
             * Normal axis
             */

            var axis = chart.xAxes.push(new am4charts.ValueAxis());
            axis.min = 0;
            axis.max = 100;
            axis.strictMinMax = true;
            axis.renderer.radius = am4core.percent(80);
            axis.renderer.inside = true;
            axis.renderer.line.strokeOpacity = 1;
            axis.renderer.ticks.template.disabled = false
            axis.renderer.ticks.template.strokeOpacity = 1;
            axis.renderer.ticks.template.length = 10;
            axis.renderer.grid.template.disabled = true;
            axis.renderer.labels.template.disabled = true;
            // axis.renderer.labels.template.radius = 10;
            // axis.renderer.labels.template.adapter.add("text", function(text) {
            //     return text + "%";
            // })

            /**
             * Axis for ranges
             */

            var colorSet = new am4core.ColorSet();

            var axis2 = chart.xAxes.push(new am4charts.ValueAxis());
            axis2.min = 0;
            axis2.max = 100;
            axis2.strictMinMax = true;
            axis2.renderer.labels.template.disabled = true;
            axis2.renderer.ticks.template.disabled = true;
            axis2.renderer.grid.template.disabled = true;

            var range0 = axis2.axisRanges.create();
            range0.value = 0;
            range0.endValue = 70;
            range0.axisFill.fillOpacity = 1;
            // range0.axisFill.fill = colorSet.getIndex(0);
            range0.axisFill.fill = am4core.color("#E34646");


            var range1 = axis2.axisRanges.create();
            range1.value = 50;
            range1.endValue = 100;
            range1.axisFill.fillOpacity = 1;
            range1.axisFill.fill = am4core.color("#5CE346");
            // range1.axisFill.fill = colorSet.getIndex(2);



            /**
             * Label
             */

            var label = chart.radarContainer.createChild(am4core.Label);
            label.isMeasured = false;
            label.fontSize = 30;
            label.x = am4core.percent(50);
            label.y = am4core.percent(100);
            label.horizontalCenter = "middle";
            label.verticalCenter = "bottom";
            label.text = value;
            // label.renderer.labels.template.adapter.add("text", function(text) {
            //     return text + "%";
            // })



            /**
             * Hand
             */

            var hand = chart.hands.push(new am4charts.ClockHand());
            hand.axis = axis2;
            hand.innerRadius = am4core.percent(40);
            hand.startWidth = 5;
            hand.pin.disabled = true;
            hand.value = value;
            // hand.renderer.labels.template.adapter.add("text", function(text) {
            //     return text + "%";
            // })
            hand.events.on("propertychanged", function(ev) {
                range0.endValue = ev.target.value;
                range1.value = ev.target.value;
                label.text = axis2.positionToValue(hand.currentPosition).toFixed(1);
                axis2.invalidate();
            });

            setInterval(function() {
                var value = Math.round(Math.random() * 100);
                var animation = new am4core.Animation(hand, {
                    property: "value",
                    to: value
                }, 1000, am4core.ease.cubicOut).start();
            }, 2000);

        }); // end am4core.ready()
    </script>
@endsection
