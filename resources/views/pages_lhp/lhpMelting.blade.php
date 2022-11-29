@extends('mainLHP')
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>

    <div class="row justify-content-center mx-auto mt-4">
        <div class="col-8">
            <form action="{{ url('/melting/' . $mesin . '/' . $id . '/simpan') }}" method="POST">@csrf <div class="row ">
                    <div class="col-12">
                        <h4 class="font-coolblack">Jumlah</h4>
                        <div class="input-group ">
                            <div
                                class="form-floating  mt-1 mb-3 border-opacity-25 border border-3 border border-dark rounded">
                                <input type="number" class="fw-bold fs-1 text-end" name="berat" id="berat"
                                    style="height:5rem; width: 100%; margin:0auto;" placeholder="Masukan Berat Disini..."
                                    autofocus>
                            </div><span
                                class="input-group-text fw-bold fs-2  mt-1 mb-3 bg-white border border-0 rounded">Kg</span>
                        </div>
                    </div>
                </div>
                <div class="row color-bg">
                    <div class="col-12  ">
                        <div class="card shadow-lg border border-0">
                            <div class="d-flex justify-content-start mt-3 color-bg ">
                                <h5 class="fw-bold">Material :</h5>
                            </div>
                            <ul class="nav nav-pills mb-3 upper-nav " id="pills-tab" role="tablist">
                                <li class="nav-item mx-auto mt-3" role="presentation"><button
                                        class="border border-primary nav-link active" id="pills-charging-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-charging" type="button" role="tab"
                                        aria-controls="pills-charging" aria-selected="true"
                                        style="width: 150px;">CHARGING</button></li>
                                <li class="nav-item mx-auto mt-3" role="presentation"><button
                                        class="border border-primary nav-link" id="pills-losdross-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-losdross" type="button" role="tab"
                                        aria-controls="pills-losdross" aria-selected="false"
                                        style="width: 150px;">LOS/DROS</button></li>
                                <li class="nav-item mx-auto mt-3" role="presentation"><button
                                        class="border border-primary nav-link" id="pills-gas-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-gas" type="button" role="tab" aria-controls="pills-gas"
                                        aria-selected="false" style="width: 150px;">GAS</button></li>
                            </ul>
                            <div class="tab-content mt-5 ms-4 mb-3 mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-charging" role="tabpanel"
                                    aria-labelledby="pills-charging-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col"><button type="submit" name="item" value="ingot"
                                                class="btn btn-primary" style="width: 130px;">INGOT</button></div>
                                        <div class="col"><button type="submit" name="item" value="basemetal"
                                                class="btn btn-primary" style="width: 130px;">BASEMETAL</button></div>
                                        <div class="col"><button type="submit" name="item" value="exgate"
                                                class="btn btn-primary" style="width: 130px;">EX GATE</button></div>
                                        <div class="col"><button type="submit" name="item" value="overflow"
                                                class="btn btn-primary" style="width: 130px;">OIL SCRAP</button></div>
                                        <div class="col"><button type="submit" name="item" value="reject_parts"
                                                class="btn btn-primary" style="width: 130px;">REJECT PARTS</button></div>
                                        <div class="col"><button type="submit" name="item" value="alm_treat"
                                                class="btn btn-primary" style="width: 130px;">ALM TREAT</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade ms-4 mb-3 mt-4" id="pills-losdross" role="tabpanel"
                                    aria-labelledby="pills-losdross-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col"><button type="submit" name="item" value="fluxing"
                                                class="btn btn-primary" style="width: 130px;">FLUXING</button></div>
                                        <div class="col"><button type="submit" name="item" value="k_value"
                                                class="btn btn-primary" style="width: 130px;">K - VALUE</button></div>
                                        <div class="col"><button type="submit" name="item" value="dross"
                                                class="btn btn-primary" style="width: 130px;">DROSS</button></div>
                                        <div class="col"><button type="submit" name="item" value="dross_treat"
                                                class="btn btn-primary" style="width: 130px;">DROSS TREAT</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade ms-4 mb-5 mt-3 text-center" id="pills-gas" role="tabpanel"
                                    aria-labelledby="pills-gas-tab" tabindex="0">
                                    <div class="col"><button type="submit" name="item" value="gas_akhir"
                                            class="btn btn-primary" style="width: 130px;">AKHIR</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4 shadow-lg text-center ">
            <h5 class="mt-2">CHART IN HERE</h5>
            <div id="chartdiv"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    {{-- < !-- Resources --> --}}
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    {{-- < !-- Chart code --> --}}
    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create("chartdiv", am4charts.XYChart3D);

            // chart.titles.create().text = "Crude oil reserves";

            // Add data
            chart.data = [{
                "category": "Melting",
                "value1": 30,
                "value2": 70
            }];

            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "category";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.grid.template.strokeOpacity = 0;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.grid.template.strokeOpacity = 0;
            valueAxis.min = -10;
            valueAxis.max = 110;
            valueAxis.strictMinMax = true;
            valueAxis.renderer.baseGrid.disabled = true;
            valueAxis.renderer.labels.template.adapter.add("text", function(text) {
                if ((text > 100) || (text < 0)) {
                    return "";
                } else {
                    return text + "%";
                }
            })

            // Create series
            var series1 = chart.series.push(new am4charts.ConeSeries());
            series1.dataFields.valueY = "value1";
            series1.dataFields.categoryX = "category";
            series1.columns.template.width = am4core.percent(80);
            series1.columns.template.fillOpacity = 0.9;
            series1.columns.template.strokeOpacity = 1;
            series1.columns.template.strokeWidth = 2;

            var series2 = chart.series.push(new am4charts.ConeSeries());
            series2.dataFields.valueY = "value2";
            series2.dataFields.categoryX = "category";
            series2.stacked = true;
            series2.columns.template.width = am4core.percent(80);
            series2.columns.template.fill = am4core.color("#000");
            series2.columns.template.fillOpacity = 0.1;
            series2.columns.template.stroke = am4core.color("#000");
            series2.columns.template.strokeOpacity = 0.2;
            series2.columns.template.strokeWidth = 2;

        }); // end am4core.ready()
    </script>
@endsection
