@extends('main')
@section('content')

<style>
    #donut {
      width: 80%;
      height: 300px;
      justify-content: center;
      margin: 10px 0px 0px 20px
    }
    </style>

<div class="main-content d-flex flex-column">
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

    <div class="row w-100 d-flex flex-wrap">
        <div class="col-2">
            <div class="card d-flex">
                <div class="card-header">Over Proses</div>
                <div class="card-body" id="donut"></div>
                <div class="card-footer">Location NG Over Proses</div>
            </div>
        </div>
        
     
    </div>
</div>

    <!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("donut");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(am5percent.PieChart.new(root, {
  layout: root.verticalLayout,
  innerRadius: am5.percent(50)
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(am5percent.PieSeries.new(root, {
  valueField: "value",
  categoryField: "category",
  alignLabels: false
}));

series.labels.template.setAll({
  textType: "circular",
  centerX: 0,
  centerY: 0
});


// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([
  { value: 10, category: "Area 1" },
  { value: 9, category: "Area 2" },
  { value: 6, category: "Area 3" },

]);


// Create legend
// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
var legend = chart.children.push(am5.Legend.new(root, {
  centerX: am5.percent(50),
  x: am5.percent(50),
  marginTop: 15,
  marginBottom: 15,
}));

legend.data.setAll(series.dataItems);


// Play initial series animation
// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
series.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
@endsection