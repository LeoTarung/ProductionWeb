@extends('mainLHP')
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <div class="container-fluid">
        <form action="{{ url('/melting/' . $mesin . '/' . $id . '/simpan') }}" method="POST">
            @csrf
            {{-- BAGIAN ATAS --}}
            <div class="row mt-3">
                <div class="col-8">
                    <div class="card card_form_input">
                        <div class="card-body">
                            <input type="number" class="fw-bold text-end input_berat" name="berat" id="berat"
                                placeholder="Masukan angka..." autofocus required>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-center card_stok-molten">
                                <div class="card-header bg-info ">STOK MOLTEN</div>
                                <div class="card-body">
                                    <p class="fw-bold stok_molten">@FormatRibu(99000) KG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BAGIAN BAWAH --}}
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="fs-1 fw-bold">Material :</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="ingot" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">INGOT</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="exgate" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">EX
                                                GATE</button></div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="reject_parts" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">PARTS
                                                NG</button></div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="oil_scrap" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">OIL
                                                SCRAP</button></div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="basemetal" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">BASEMETAL</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"> <button type="submit" name="item"
                                                value="alm_treat" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">ALM
                                                TREAT</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="fluxing" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">FLUXING</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="dross" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">DROSS</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="gas_akhir" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;">GAS
                                                AKHIR</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-3 col-4">8</div>
                                    <div class="col-xl-3 col-4">9</div>
                                </div>
                            </div> --}}
                                {{-- <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 ">1</div>
                                        <div class="col-xl-3 col-lg-4 ">2</div>
                                        <div class="col-xl-3 col-lg-4 ">3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 ">1</div>
                                        <div class="col-xl-3 col-lg-4 ">2</div>
                                    </div>
                                </div>
                            </div> --}}

                            </div>


                            {{-- <div class="row ">
                            <div class="col-6 ">
                                <div class="row ">
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="ingot"
                                            class="btn btn-primary fs-5 ms-3"
                                            style="width: 160px; height: 60px;">INGOT</button></div>
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="exgate"
                                            class="btn btn-primary fs-5 ms-3" style="width: 160px; height: 60px;">EX
                                            GATE</button></div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="reject_parts"
                                            class="btn btn-primary fs-5 ms-3" style="width: 160px; height: 60px;">PARTS
                                            NG</button></div>
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="oil_scrap"
                                            class="btn btn-primary fs-5 ms-3" style="width: 160px; height: 60px;">OIL
                                            SCRAP</button></div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="basemetal"
                                            class="btn btn-primary fs-5 ms-3"
                                            style="width: 160px; height: 60px;">BASEMETAL</button></div>
                                    <div class="col-6 mb-4"><button type="submit" name="item" value="alm_treat"
                                            class="btn btn-primary fs-5 ms-3" style="width: 160px; height: 60px;">ALM
                                            TREAT</button></div>
                                </div>
                            </div>
                            <div class="col-3 ">
                                <div class="row">
                                    <div class="col-12 mb-4"><button type="submit" name="item" value="fluxing"
                                            class="btn btn-primary fs-5 ms-3"
                                            style="width: 160px; height: 60px;">FLUXING</button></div>
                                    <div class="col-12 mb-4"><button type="submit" name="item" value="dross"
                                            class="btn btn-primary fs-5 ms-3"
                                            style="width: 160px; height: 60px;">DROSS</button></div>
                                </div>
                            </div>
                            <div class="col-3 ">
                                <button type="submit" name="item" value="gas_akhir" class="btn btn-primary fs-5 ms-3"
                                    style="width: 160px; height: 60px;">GAS AKHIR</button>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-center card_total-chg">
                                <div class="card-header bg-info ">TOTAL CHARGING</div>
                                <div class="card-body">
                                    <p class="fw-bold total_charging">@FormatRibu(99000) KG</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="card-group">
                                <div class="card text-center card-ingot">
                                    <h5 class="card-header fs-2 fw-bold bg-info">INGOT</h5>
                                    <div class="card-body card-ingot">
                                        <p class="fw-bold">80%</p>
                                    </div>
                                </div>
                                <div class="card text-center card-scrap">
                                    <h5 class="card-header fs-2 fw-bold bg-info">SCRAP</h5>
                                    <div class="card-body card-ingot">
                                        <p class="fw-bold">20%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- <div class="col-4 shadow-lg text-center bg-dark">
            <h5 class="mt-2">CHART IN HERE</h5>
            <div id="chartdiv"></div>
        </div> --}}
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
