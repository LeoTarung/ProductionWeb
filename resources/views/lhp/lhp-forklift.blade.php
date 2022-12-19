@extends('mainLHP')
@section('content')
    <style>
        #chartdiv 
        {
            width: 100%;
            height: 150px;
        }
        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }   
    </style>
    <div class="row bg-dark">
        <div class="col-2 nopadding border">MC - 48</div>
        <div class="col-2 nopadding border">MC - 48</div>


        <div class="col-2 nopadding nopadding border">
            <a class="card text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="dika('MC-52')" >
                <h5 class="card-header fs-1 fw-bold" >MC-52</h5>
                <div class="card-body m-0 p-0 ">
                    <div id="chartdiv"></div>
                </div>
            </a>
        </div>

        <div class="col-2 nopadding nopadding border">
            <a class="card text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="dika('MC-48')" >
                <h5 class="card-header fs-1 fw-bold" >MC-48</h5>
                <div class="card-body m-0 p-0 ">
                    <div id="chartdiv"></div>
                </div>
            </a>
        </div>
    
        <div class="col-2 nopadding border">MC - 48</div>
        <div class="col-2 nopadding border">MC - 48</div>
        <div class="col-2 nopadding border">MC - 48</div>
    </div>

    {{-- MODAL --}}
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="mcbrpa" class="form-control">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>

<script>
    function dika(nomc){
        // let nomc = document.getElementById("nomc").getAttribute('data-value');
        document.getElementById("staticBackdropLabel").innerHTML = "Tapping Pada " + nomc; 
        document.getElementById('mcbrpa').value = nomc;
    }
    // $("#formtapping").text(nomc);
    // alert(nomc);
    
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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