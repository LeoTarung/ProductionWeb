@extends('main')
@section('content')

{{-- -------------------------------- CSS  ------------------------------ --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/css/select2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css') }}" />

<style>
    #donut {
      width: 80%;
      height: 300px;
      justify-content: center;
      margin: 10px 0px 0px 20px
    }
    </style>

<div class="main-content d-flex flex-column">

    
    {{-- row navbar final inspection --}}
     @include('partial.navbarFins')

     @include('menu.production.finalInspection.allTotal')

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
    <script src="/js/jquery.min.js"></script>
    <script src="/js/select2.min.js"></script>

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