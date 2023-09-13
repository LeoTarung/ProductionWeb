@extends('mainLHP')
@section('content')
    <style>
        #chartdiv_Pingot {
            width: 100%;
            height: 300px;
        }
    </style>

    {{-- <div class="row my-2 mx-1">
        <div class="col daily">
            <div class="card shadow">
            <div class="card-header fs-4 fw-5 text-center "> PERSENTASE INGOT</div>
            <div id="chartdiv_Pingot"> </div>
            </div>
        </div>
    </div> --}}

    <div class="row my-2 mx-1 d-flex flex-columns">
        <div class="col-6 mb-3  style="height: 100%"">
            @if ($id_striko1 == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info " data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(1)">
                    <div class="big-font">STRIKO-1</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info" href="/lhp-melting/Striko-1/{{ $id_striko1->id }}">
                    <div class="big-font">STRIKO-1</div>
                </a> <br>
            @endif
        </div>

        <div class="col-6 mb-3" style="height: 100%">
            @if ($id_striko2 == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(2)">
                    <div class="big-font">STRIKO-2</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Striko-2/{{ $id_striko2->id }}">
                    <div class="big-font">STRIKO-2</div>
                </a> <br>
            @endif
        </div>

        <div class="col-6 mb-3" style="height: 100%">
            @if ($id_striko3 == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(3)">
                    <div class="big-font">STRIKO-3</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Striko-3/{{ $id_striko3->id }}">
                    <div class="big-font">STRIKO-3</div>
                </a> <br>
            @endif
        </div>

        <div class="col-6 mb-3" style="height: 100%">
            @if ($id_Swift_Asia == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(4)">
                    <div class="big-font ps-2">Swif Asia</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Swift_Asia/{{ $id_Swift_Asia->id }}">
                    <div class="big-font ps-2">Swif Asia</div>
                </a> <br>
            @endif
        </div>
    </div>

    {{-- <div class="row row-cols-1 row-cols-md-2 g-2 m-2">
        <div class="col">
            @if ($id_striko1 == null)
                <a class="buttonssssss btn btn-primary border-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    onclick="testing(1)">
                    <div class="big-font">STRIKO-1</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info" href="/lhp-melting/Striko-1/{{ $id_striko1->id }}">
                    <div class="big-font">STRIKO-1</div>
                </a> <br>
            @endif
        </div>

        <div class="col">
            @if ($id_striko2 == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(2)">
                    <div class="big-font">STRIKO-2</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Striko-2/{{ $id_striko2->id }}">
                    <div class="big-font">STRIKO-2</div>
                </a> <br>
            @endif
        </div>

        <div class="col">
            @if ($id_striko3 == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(3)">
                    <div class="big-font">STRIKO-3</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Striko-3/{{ $id_striko3->id }}">
                    <div class="big-font">STRIKO-3</div>
                </a> <br>
            @endif
        </div>

        <div class="col">
            @if ($id_Swift_Asia == null)
                <a class="buttonssssss btn btn-lg btn-primary border-info" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(4)">
                    <div class="big-font">Swift_Asia</div>
                </a> <br>
            @else
                <a class="buttonssssss btn btn-lg btn-primary border-info"
                    href="/lhp-melting/Swift_Asia/{{ $id_Swift_Asia->id }}">
                    <div class="big-font">Swift_Asia</div>
                </a> <br>
            @endif
        </div>

    </div> --}}
    {{-- MODAL --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl  ">
            <form action="{{ url('/lhp-melting/simpan') }}" method="POST"
                onSubmit="document.getElementById('submit').disabled=true;">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">P R E P A R A T I O N</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- PREPARATION FORM --}}
                        <div class="row">

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nrp"
                                        name="nrp" required>
                                    <label for="nrp" class="">N R P</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama"
                                        name="nama" readonly required>
                                    <label for="nama" class="">N A M A</label>
                                </div>
                            </div>

                            <div class="col-12"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-floating">
                                    <select class="form-select border-dark fw-bold" id="material" name="material" required>
                                        <option value="" selected disabled>Open this select menu</option>
                                        <option value="HD-2">HD-2</option>
                                        <option value="HD-4">HD-4</option>
                                        <option value="ADC-12">ADC-12</option>
                                        <option value="YH3R">YH3R</option>
                                    </select>
                                    <label for="material" class="">M A T E R I A L</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating ">
                                    <input type="text" class="form-control border-dark" id="mesin" name="mesin"
                                        readonly required>
                                    <label for="mesin">M E S I N</label>
                                </div>
                            </div>
                            <input class="form-control" type="hidden" id="shift" name="shift"
                                value="{{ $shift }}">
                            <input class="form-control" type="hidden" id="id" name="id"
                                value="{{ $lhp->id + 1 }}">
                        </div>
                        {{-- END PREPARATION FORM --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                        {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL --}}
    <script src="{{ asset('/js/Socketio454.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>
    <script src="/js/amchart/Dailychart-Melting/index.js"></script>
    <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
    <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>

    <script>
        function testing(id) {
            if (id == 1) {
                document.getElementById("mesin").value = 'Striko-1'
            } else if (id == 2) {
                document.getElementById("mesin").value = 'Striko-2'
            } else if (id == 3) {
                document.getElementById("mesin").value = 'Striko-3'
            } else if (id == 4) {
                document.getElementById("mesin").value = 'Swift_Asia'
            }
        }

        $(document).ready(function() {
            $('#nrp').keyup(function() {
                $('#result').html('');
                var searchnrp = $('#nrp').val();
                console.log(searchnrp);
                $.ajax({
                    method: "GET",
                    dataType: "json",

                    url: "{{ url('/dtkyrw') }}" + "/" + searchnrp,

                    success: function(data) {
                        document.getElementById("nama").value = data[0].name;
                    }
                });
            });
        });

        var root = am5.Root.new("chartdiv_Pingot");

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
            tooltip: am5.Tooltip.new(root, {
                labelText: "{valueY}"
            })
        }));

        series.columns.template.setAll({
            strokeOpacity: 0
        })

        var data = generateDatas(50);
        series.data.setAll(data);


        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear(1000);
        chart.appear(1000, 100);
    </script>
@endsection
