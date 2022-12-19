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
            <div class="col-4 ">
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
                                    <div class="col-6 ms-3 mt-2 ">
                                        <div class="font-blue  fw-bold">Ex-Gate</div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">1453 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 ms-3 mt-2 ">
                                        <div class="font-blue  fw-bold">Others</div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">32 Kg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5 ">
                        <div class="font-blue title-report-melt">Today Report Losses</div>
                    </div>
                    <div class="card-content">
                        <div id="chartdiv2"></div>
                        <table class="table table-hover ms-1 fs-5">
                            <thead class="fw-bold">
                                <td>Warna</td>
                                <td>Kategori</td>
                                <td>Total</td>
                                <td>Satuan</td>
                            </thead>
                            <tr>
                                <td>
                                    <div class="good-green text-center"></div>
                                </td>
                                <td>Good</td>
                                <td>100</td>
                                <td>Kg</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="red-losses text-center"></div>
                                </td>
                                <td>Losses</td>
                                <td>50</td>
                                <td>Kg</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5">
                        <div class="font-blue title-report-melt">Today Report Losses</div>
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
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                pinchZoomX: true
            }));

            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
            cursor.lineY.set("visible", false);


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
                minGridDistance: 30
            });
            xRenderer.labels.template.setAll({
                rotation: -90,
                centerY: am5.p50,
                centerX: am5.p100,
                paddingRight: 15
            });

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                maxDeviation: 0.3,
                categoryField: "country",
                renderer: xRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                maxDeviation: 0.3,
                renderer: am5xy.AxisRendererY.new(root, {})
            }));


            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Series 1",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "value",
                sequencedInterpolation: true,
                categoryXField: "country",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                })
            }));

            series.columns.template.setAll({
                cornerRadiusTL: 5,
                cornerRadiusTR: 5
            });
            series.columns.template.adapters.add("fill", function(fill, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            series.columns.template.adapters.add("stroke", function(stroke, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });


            // Set data
            var data = [{
                country: "USA",
                value: 2025
            }, {
                country: "China",
                value: 1882
            }, {
                country: "Japan",
                value: 1809
            }, {
                country: "Germany",
                value: 1322
            }, {
                country: "UK",
                value: 1122
            }, {
                country: "France",
                value: 1114
            }, {
                country: "India",
                value: 984
            }, {
                country: "Spain",
                value: 711
            }, {
                country: "Netherlands",
                value: 665
            }, {
                country: "South Korea",
                value: 443
            }, {
                country: "Canada",
                value: 441
            }];

            xAxis.data.setAll(data);
            series.data.setAll(data);


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
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
            range0.axisFill.fill = am4core.color("#5CE346");

            var range1 = axis2.axisRanges.create();
            range1.value = 50;
            range1.endValue = 100;
            range1.axisFill.fillOpacity = 1;
            range1.axisFill.fill = am4core.color("#E34646");
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
