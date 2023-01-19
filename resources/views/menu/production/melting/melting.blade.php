@extends('main')
@section('content')
    <style>
        .chartdiv {
            width: 100%;
            height: 350px;
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
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a 
                                            class="btn btn-primary" href="{{url('/production/melting/Striko-1')}}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv"></div>
                                </div>
                                
                                <div class="row w-100 mt-3">
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Charge</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75 mt-3">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Ingot </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue fw-bold " id="ingot_str1" >350 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end" id="persen_ingot_str1">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Reject Parts </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold " id="reject_parts_str1">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end" id="persen_reject_parts_str1">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Return </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold " id="total_return_str1">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end" id="persen_total_return_str1">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Tapping </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold " id="tapping_str1">356 Kg </div>
                                                            </div>
                                                            {{-- <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end" id="persen_tapping_str1">80 % </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Losses</div>
                                            </div>
                                            <div class="card-content">
                                                <div id="chartdiv4"></div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                                        <div class="red-losses"></div>
                                                        <div class="ms-3">Losses : 50 Kg</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="panel" id="two-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-2</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a 
                                            class="btn btn-primary" href="{{url('/production/melting/Striko-2')}}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv1"></div>
                                </div>

                                <div class="row w-100 mt-3">
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Charge</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75 mt-3">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Ingot </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Reject Parts </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Return </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Tapping </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Losses</div>
                                            </div>
                                            <div class="card-content">
                                                <div id="chartdiv4"></div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                                        <div class="red-losses"></div>
                                                        <div class="ms-3">Losses : 50 Kg</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel" id="three-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-3</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a 
                                            class="btn btn-primary" href="{{url('/production/melting/Striko-3')}}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv2"></div>
                                </div>

                                <div class="row w-100 mt-3">
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Charge</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75 mt-3">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Ingot </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Reject Parts </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Return </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Tapping </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Losses</div>
                                            </div>
                                            <div class="card-content">
                                                <div id="chartdiv4"></div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                                        <div class="red-losses"></div>
                                                        <div class="ms-3">Losses : 50 Kg</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel" id="four-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Swif Asia</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a 
                                            class="btn btn-primary" href="{{url('/production/melting/Swift_Asia')}}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv3"></div>
                                </div>

                                <div class="row w-100 mt-3">
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Charge</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75 mt-3">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Ingot </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Reject Parts </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Return </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <div class="card w-75">
                                                        <div class="row">
                                                            <div class="col-4 ms-5 mt-2 ">
                                                                <div class="font-blue fw-bold">Tapping </div>
                                                            </div>
                                                            <div class="col-4 mt-2  d-flex justify-content-center">
                                                                <div class="font-blue  fw-bold ">356 Kg </div>
                                                            </div>
                                                            <div class="col-auto mt-2  d-flex justify-content-end">
                                                                <div class="font-blue  fw-bold text-end">80 % </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-6 ">
                                        <div class="card shadow today-report-chg border-0">
                                            <div class="card-header border-0 text-center fw-bold fs-5">
                                                <div class="font-blue title-report-melt">Today Report Losses</div>
                                            </div>
                                            <div class="card-content">
                                                <div id="chartdiv4"></div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                                        <div class="red-losses"></div>
                                                        <div class="ms-3">Losses : 50 Kg</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row w-100">
            <div class="col-6 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5">
                        <div class="font-blue title-report-melt">Today Report Charge</div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card w-75 mt-3">
                                <div class="row">
                                    <div class="col-4 ms-5 mt-2 ">
                                        <div class="font-blue fw-bold">Ingot </div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-center">
                                        <div class="font-blue  fw-bold ">356 Kg </div>
                                    </div>
                                    <div class="col-auto mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">80 % </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card w-75">
                                <div class="row">
                                    <div class="col-4 ms-5 mt-2 ">
                                        <div class="font-blue fw-bold">Reject Parts </div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-center">
                                        <div class="font-blue  fw-bold ">356 Kg </div>
                                    </div>
                                    <div class="col-auto mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">80 % </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card w-75">
                                <div class="row">
                                    <div class="col-4 ms-5 mt-2 ">
                                        <div class="font-blue fw-bold">Return </div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-center">
                                        <div class="font-blue  fw-bold ">356 Kg </div>
                                    </div>
                                    <div class="col-auto mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">80 % </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card w-75">
                                <div class="row">
                                    <div class="col-4 ms-5 mt-2 ">
                                        <div class="font-blue fw-bold">Tapping </div>
                                    </div>
                                    <div class="col-4 mt-2  d-flex justify-content-center">
                                        <div class="font-blue  fw-bold ">356 Kg </div>
                                    </div>
                                    <div class="col-auto mt-2  d-flex justify-content-end">
                                        <div class="font-blue  fw-bold text-end">80 % </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="card shadow today-report-chg border-0">
                    <div class="card-header border-0 text-center fw-bold fs-5">
                        <div class="font-blue title-report-melt">Today Report Losses</div>
                    </div>
                    <div class="card-content">
                        <div id="chartdiv4"></div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center fw-bold mb-2 ">
                                <div class="red-losses"></div>
                                <div class="ms-3">Losses : 50 Kg</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>



    <!-- Resources chart 1 -->
    <script src="/js/amchart/Dailychart-Melting/index.js"></script>
    <script src="/js/amchart/Dailychart-Melting/xy.js"></script>
    <script src="/js/amchart/Dailychart-Melting/Animated.js"></script>

    <!-- Resources -->
    <script src="/js/amchart/LossesChart-Melting/core.js"></script>
    <script src="/js/amchart/LossesChart-Melting/charts.js"></script>
    <script src="/js/amchart/LossesChart-Melting/Animated.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>

    <!-- Chart code -->


    <!-- Chart code -->
    {{-- ///////////////////////////////// CHART STRIKO - 1///////////////////////////////////// --}}
    <script>
         var test ;
 
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
            // var lossAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // lossAxisRenderer.grid.template.set("forceHidden", true);
            // var lossAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            //     renderer: lossAxisRenderer,
            //     // forceHidden: true
            // }));
            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#'%'"
            }));
            // var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // ingotAxisRenderer.grid.template.set("forceHidden", true);
            // var ingotAxis = chart.yAxes.push(am5xy.ingotAxis.new(root, {
            //     baseUnit: "minute",
            //     renderer: ingotAxisRenderer,
            //     extraMax: 0.3
            // }));
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
            let TotalCharging = 0;
            for (let i = 0; i < data.length; i++) {
                if (data[i].charging) {
                    TotalCharging++
                }
            }
        $(function(){
            let ip_node = '127.0.0.1';
            let socket_port = '3000';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');
   
            socket.on("bulananStriko1", (datasql) => {
            var data = [];
            var ChartData = document.getElementById("chartdiv").innerHTML;
            for(i = 0; i < datasql.length; i++){
                var obj = {};
                obj['date'] = moment(datasql[i].tanggal).format('MM/DD/YY');
                obj['charging'] = datasql[i].total_charging;
                obj['townSize'] = "12";
                obj["loss"] = datasql[i].total_loss;
                obj["ingot"] = datasql[i].ingot;
                data.push(obj);
            }
            chargingSeries.data.setAll(data);
            lossSeries.data.setAll(data);
            ingotSeries.data.setAll(data);
            xAxis.data.setAll(data);
        })
        });
    </script>

    {{-- //////////////////////////// CHART STRIKO - 2 ///////////////////////////////////// --}}
    <script>
        am5.ready(function() {
            for (var i = 0; i < 30; i++) {}
            var data = [{
                "date": "2022-01-01",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-02",
                "charging": 400,
                "townSize": 12,
                "loss": 66,
                "ingot": 34
            }, {
                "date": "2022-01-03",
                "charging": 340,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-04",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-05",
                "charging": 390,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-06",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-07",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-08",
                "charging": 427,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-09",
                "charging": 450,
                "townSize": 12,
                "loss": 76,
                "ingot": 24
            }, {
                "date": "2022-01-10",
                "charging": 337,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-11",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-12",
                "charging": 350,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-13",
                "charging": 314,
                "townSize": 12,
                "loss": 74,
                "ingot": 26
            }, {
                "date": "2022-01-14",
                "charging": 400,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-15"
            }, {
                "date": "2022-01-16"
            }, {
                "date": "2022-01-17"
            }, {
                "date": "2022-01-18"
            }, {
                "date": "2022-01-19"
            }, {
                "date": "2022-01-20"
            }, {
                "date": "2022-01-21"
            }, {
                "date": "2022-01-22"
            }, {
                "date": "2022-01-23"
            }, {
                "date": "2022-01-24"
            }, {
                "date": "2022-01-25"
            }, {
                "date": "2022-01-26"
            }, {
                "date": "2022-01-27"
            }, {
                "date": "2022-01-28"
            }, {
                "date": "2022-01-29"
            }, {
                "date": "2022-01-30"
            }, {
                "date": "2022-01-31"
            }];
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
                // am5.color(0xFB9649), orange
                // am5.color(0x605CB8), Biru
                // Kuning
                am5.color(0xFFE680),
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
            // var lossAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // lossAxisRenderer.grid.template.set("forceHidden", true);
            // var lossAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            //     renderer: lossAxisRenderer,
            //     // forceHidden: true
            // }));
            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#' %'"
            }));
            // var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // ingotAxisRenderer.grid.template.set("forceHidden", true);
            // var ingotAxis = chart.yAxes.push(am5xy.ingotAxis.new(root, {
            //     baseUnit: "minute",
            //     renderer: ingotAxisRenderer,
            //     extraMax: 0.3
            // }));
            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY}"
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
                    labelText: "loss: {valueY} %"
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
                    width: 10,
                    height: 10,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
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
            let TotalCharging = 0;
            for (let i = 0; i < data.length; i++) {
                if (data[i].charging) {
                    TotalCharging++
                }
            }
            // console.log(TotalCharging)
        }); // end am5.ready()
    </script>

    {{-- //////////////////////////// CHART STRIKO - 3 ///////////////////////////////////// --}}
    <script>
        am5.ready(function() {
            var data = [{
                "date": "2022-01-01",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-02",
                "charging": 400,
                "townSize": 12,
                "loss": 66,
                "ingot": 34
            }, {
                "date": "2022-01-03",
                "charging": 340,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-04",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-05",
                "charging": 390,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-06",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-07",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-08",
                "charging": 427,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-09",
                "charging": 450,
                "townSize": 12,
                "loss": 76,
                "ingot": 24
            }, {
                "date": "2022-01-10",
                "charging": 337,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-11",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-12",
                "charging": 350,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-13",
                "charging": 314,
                "townSize": 12,
                "loss": 74,
                "ingot": 26
            }, {
                "date": "2022-01-14",
                "charging": 400,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-15"
            }, {
                "date": "2022-01-16"
            }, {
                "date": "2022-01-17"
            }, {
                "date": "2022-01-18"
            }, {
                "date": "2022-01-19"
            }, {
                "date": "2022-01-20"
            }, {
                "date": "2022-01-21"
            }, {
                "date": "2022-01-22"
            }, {
                "date": "2022-01-23"
            }, {
                "date": "2022-01-24"
            }, {
                "date": "2022-01-25"
            }, {
                "date": "2022-01-26"
            }, {
                "date": "2022-01-27"
            }, {
                "date": "2022-01-28"
            }, {
                "date": "2022-01-29"
            }, {
                "date": "2022-01-30"
            }, {
                "date": "2022-01-31"
            }];
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
                // am5.color(0xFB9649), orange
                // am5.color(0x605CB8), Biru
                // Kuning
                am5.color(0xFFE680),
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
            // var lossAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // lossAxisRenderer.grid.template.set("forceHidden", true);
            // var lossAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            //     renderer: lossAxisRenderer,
            //     // forceHidden: true
            // }));
            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#' %'"
            }));
            // var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // ingotAxisRenderer.grid.template.set("forceHidden", true);
            // var ingotAxis = chart.yAxes.push(am5xy.ingotAxis.new(root, {
            //     baseUnit: "minute",
            //     renderer: ingotAxisRenderer,
            //     extraMax: 0.3
            // }));
            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY}"
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
                    labelText: "loss: {valueY} %"
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
                    width: 10,
                    height: 10,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
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
            let TotalCharging = 0;
            for (let i = 0; i < data.length; i++) {
                if (data[i].charging) {
                    TotalCharging++
                }
            }
            // console.log(TotalCharging)
        }); // end am5.ready()
    </script>

    {{-- //////////////////////////// CHART Swift Asia ///////////////////////////////////// --}}
    <script>
        am5.ready(function() {
            var data = [{
                "date": "2022-01-01",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-02",
                "charging": 400,
                "townSize": 12,
                "loss": 66,
                "ingot": 34
            }, {
                "date": "2022-01-03",
                "charging": 340,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-04",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-05",
                "charging": 390,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-06",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-07",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-08",
                "charging": 427,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-09",
                "charging": 450,
                "townSize": 12,
                "loss": 76,
                "ingot": 24
            }, {
                "date": "2022-01-10",
                "charging": 337,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-11",
                "charging": 227,
                "townSize": 12,
                "loss": 70,
                "ingot": 30
            }, {
                "date": "2022-01-12",
                "charging": 350,
                "townSize": 12,
                "loss": 85,
                "ingot": 15
            }, {
                "date": "2022-01-13",
                "charging": 314,
                "townSize": 12,
                "loss": 74,
                "ingot": 26
            }, {
                "date": "2022-01-14",
                "charging": 400,
                "townSize": 12,
                "loss": 75,
                "ingot": 25
            }, {
                "date": "2022-01-15"
            }, {
                "date": "2022-01-16"
            }, {
                "date": "2022-01-17"
            }, {
                "date": "2022-01-18"
            }, {
                "date": "2022-01-19"
            }, {
                "date": "2022-01-20"
            }, {
                "date": "2022-01-21"
            }, {
                "date": "2022-01-22"
            }, {
                "date": "2022-01-23"
            }, {
                "date": "2022-01-24"
            }, {
                "date": "2022-01-25"
            }, {
                "date": "2022-01-26"
            }, {
                "date": "2022-01-27"
            }, {
                "date": "2022-01-28"
            }, {
                "date": "2022-01-29"
            }, {
                "date": "2022-01-30"
            }, {
                "date": "2022-01-31"
            }];
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
                // am5.color(0xFB9649), orange
                // am5.color(0x605CB8), Biru
                // Kuning
                am5.color(0xFFE680),
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
            // var lossAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // lossAxisRenderer.grid.template.set("forceHidden", true);
            // var lossAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            //     renderer: lossAxisRenderer,
            //     // forceHidden: true
            // }));
            var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
                opposite: true
            });
            ingotAxisRenderer.grid.template.set("forceHidden", true);
            var ingotAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: ingotAxisRenderer,
                // forceHidden: true
                numberFormat: "#' %'"
            }));
            // var ingotAxisRenderer = am5xy.AxisRendererY.new(root, {
            //     opposite: true
            // });
            // ingotAxisRenderer.grid.template.set("forceHidden", true);
            // var ingotAxis = chart.yAxes.push(am5xy.ingotAxis.new(root, {
            //     baseUnit: "minute",
            //     renderer: ingotAxisRenderer,
            //     extraMax: 0.3
            // }));
            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var chargingSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: chargingAxis,
                valueYField: "charging",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Total Charging: {valueY}"
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
                    labelText: "loss: {valueY} %"
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
                    width: 10,
                    height: 10,
                    centerX: am5.p50,
                    centerY: am5.p50,
                    stroketWidth: 5,
                    stroke: ingotSeries.get("stroke"),
                    fill: root.interfaceColors.get("background"),
                });
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
            let TotalCharging = 0;
            for (let i = 0; i < data.length; i++) {
                if (data[i].charging) {
                    TotalCharging++
                }
            }
            // console.log(TotalCharging)
        }); // end am5.ready()
    </script>
    {{-- ///////////////////////// CHART GAUGE ////////////////////////////////////////////////// --}}
    <script>
        am4core.ready(function() {
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
            am4core.addLicense("ch-custom-attribution");
            //value
            var value = 70;
            // create chart
            var chart = am4core.create("chartdiv4", am4charts.GaugeChart);
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
                // var value = Math.round(Math.random() * 100);
                var value = 70;
                var animation = new am4core.Animation(hand, {
                    property: "value",
                    to: value
                }, 1000, am4core.ease.cubicOut).start();
            }, 2000);
        }); // end am4core.ready()
    </script>


@endsection