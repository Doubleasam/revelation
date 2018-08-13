<!DOCTYPE html>
<html lang="en">
<head>
<title>Revelation Manager</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/datepicker.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-media.css') }}" />
<link href="{{ asset('resources/assets/back/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/jquery.gritter.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/select2.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Revelation Manager</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
@extends('auth.user')

<!--close-top-serch--> 
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>

<!--sidebar-menu-->

@include ('layouts.sidebar')
 

<div id="content">
          <div id="content-header">
            <div id="breadcrumb"> <a href=".html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Reports</a> <a href="#" class="current">Profit_loss</a> </div>
          </div>


            
<div class="container-fluid">

            <div class="row-fluid">

                  <div class="widget-box">
                      
                      <div class="box-tools pull-right">
                          <button class="btn btn-sm btn-info hidden-print" onclick="window.print()">Print</button>
                      </div>

                      <h4>Cash Flow for period: <b>{{$start_date}} to {{$end_date}}</b> </h4>
                      <h4 class="">Date Range</h4>
                      <form class="form-horizontal" method="POST" action="{{ Request::url() }}" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">

                       <div class="row-fluid">
                                <div class="row">
                                    <div class="span5 m-wrap">
                                      <label class="control-label">Start Date</label>
                                      <div class="controls">
                                        <div  data-date="2012-11-02" class="input-append date datepicker col-xs-5">
                                          <input type="text" name="start_date" value="2012-11-02"  data-date-format="yyyy-mm-dd" class="span11" >
                                          <span class="add-on"><i class="icon-th"></i></span> </div>
                                      </div>
                                    </div>

                                   <div class="col-xs-1 span1 m-wrap text-center">
                                        to
                                    </div>


                                    <div class="span5 m-wrap">
                                      <label class="control-label">End Date</label>
                                      <div class="controls">
                                        <div  data-date="2012-11-02" class="input-append date datepicker col-xs-5">
                                          <input type="text" name="end_date"  value="2012-11-02"  data-date-format="yyyy-mm-dd" class="span11" >
                                          <span class="add-on"><i class="icon-th"></i></span> </div>
                                      </div>
                                    </div>

                               </div>
                          
                          <div class="form-actions">
                                <button type="submit" class="btn btn-success">Search</button>
                                <a href="{{Request::url()}}" button type="submit" class="btn btn-danger">Reset</button></a>
                              </div>
                         </div>
                      
                      </form>
                </div>
        <!-- /.box-body -->
      </div>




            <div class="row-fluid">
                        <div class="span6">
                            <!-- /.box -->
                            <div class="widget-box">
                                <div class="widget-content nopadding">
                                      <div class="widget-content nopadding">
                                          <table id="profitloss" class="table table-bordered table-hover " style="background: #FFF;">
                                              <tbody>
                                              <tr style="background: #CCC;">
                                                  <td style="font-weight:bold">Profit-Loss Statement</td>
                                                  <td align="right" style="font-weight:bold">Balance</td>
                                              </tr>
                                              <tr class="bg-green">
                                                  <td style="font-weight:bold">{{trans_choice('general.operating_profit',1)}} (P)</td>
                                                  <td style="font-weight:bold"></td>
                                              </tr>
                                              <tr>
                                                  <td> Contributions</td>
                                                  <td align="right">{{number_format($contributions,2)}}</td>
                                              </tr>
                                              <tr>
                                                  <td> Pledges </td>
                                                  <td align="right">{{number_format($pledges,2)}}</td>
                                              </tr>
                                              <tr>
                                                  <td>Other Incomes</td>
                                                  <td align="right"></td>
                                              </tr>
                                              <tr class="bg-red">
                                                  <th>Operating Expenses (E)
                                                  </th>
                                                  <th>
                                                  </th>
                                              </tr>
                                              <tr>
                                                  <td>Payroll</td>
                                                  <td align="right"></td>
                                              </tr>
                                              <tr>
                                                  <td>Expenses</td>
                                                  <td align="right">{{number_format($expenses,2)}}</td>
                                              </tr>

                                              <tr style="background: #CCC;">
                                                  <td style="font-weight:bold">General Net Income
                                                      (N) = P - E
                                                  </td>
                                                  <td style="font-weight:bold" align="right">{{number_format($net_profit,2)}}</td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </div>
                              </div>
                            </div>
                          </div>

                          <div class="span6">
                            <div class="widget-box">
                              <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
                                <h5>Monthly Net Income</h5>
                              </div>
                              <div class="widget-content">
                                <div class="box-body">
                              <div id="netIncomeChart" style="height: 250px;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
              </div>
        



            

                      <!-- /.box -->
                      <div class="row-fluid">
                                 <div class="span6">
                                <div class="widget-box">
                                    <div class="widget-title"><span class="icon" style="color: #00a65a">  <i class="icon-signal">
                                                </i></span>
                                        <h5>Operating Profit/ Operating Expenses</h5>

                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="chart" id="operatingProfit" style="height: 350px;">
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                          </div>
                      <!-- /.box -->

                      <!-- LINE CHART -->
                     
                             <div class="span6">
                            <div class="widget-box">
                                <div class="widget-title"><span class="icon" style="color: #00a65a">  <i class="icon-signal">
                                            </i></span>
                                <h3 class="box-title">Income Overview</h3>

                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body" style="display: block;">
                                <div class="chart" id="overviewChart" style="height: 350px;">
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        </div>
                  </div>

    </div>
    
</div>
<!--Footer-part-->
@extends('layouts.footer')
<!--end-Footer-part-->
<script src="{{ asset('resources/assets/back/js/jquery.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/jquery.toggle.buttons.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/masked.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/select2.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/jquery.validate.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/matrix.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/matrix.form_common.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/wysihtml5-0.3.0.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/bootstrap-wysihtml5.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/matrix.form_validation.js') }}"></script>
<!-- graph things -->
<script src="{{ asset('resources/assets/back/amcharts/amcharts.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('resources/assets/back/amcharts/serial.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('resources/assets/back/amcharts/pie.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('resources/assets/back/amcharts/themes/light.js') }}"
            type="text/javascript"></script>

    <script>
        AmCharts.makeChart("netIncomeChart", {
            "type": "serial",
            "theme": "light",
            "autoMargins": true,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,
            "fontFamily": 'Open Sans',
            "color": '#888',

            "dataProvider": {!! $monthly_net_income_data !!},
            "valueAxes": [{
                "axisAlpha": 0,

            }],
            "startDuration": 1,
            "graphs": [{
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "bullet": "round",
                "bulletSize": 8,
                "lineColor": "#370fc6",
                "lineThickness": 4,
                "negativeLineColor": "#b61901",
                "title": "{{trans_choice('general.net',1)}} {{trans_choice('general.income',1)}}",
                "type": "smoothedLine",
                "valueField": "amount"
            }],
            "categoryField": "month",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0,
                "labelRotation": 30,

            },
            "export": {
                "enabled": true,
                "libs": {
                    "path": "{{asset('assets/plugins/amcharts/plugins/export/libs')}}/"
                }
            }


        });
        AmCharts.makeChart("operatingProfit", {
            "type": "serial",
            "theme": "light",
            "autoMargins": true,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,
            "fontFamily": 'Open Sans',
            "color": '#888',

            "dataProvider": {!! $monthly_operating_profit_expenses_data !!},
            "valueAxes": [{
                "axisAlpha": 0,

            }],
            "startDuration": 1,
            "graphs": [{
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "lineAlpha": 0,
                "fillColors": "#00a65a",
                "fillAlphas": 1,
                "title": "{{trans_choice('general.profit',1)}}",
                "type": "column",
                "valueField": "profit"
            }, {
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "lineAlpha": 0,
                "fillColors": "#b61901",
                "fillAlphas": 1,
                "title": "{{trans_choice('general.expense',2)}}",
                "type": "column",
                "valueField": "expenses"
            }],
            "categoryField": "month",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0,
                "labelRotation": 30,

            },
            "export": {
                "enabled": true,
                "libs": {
                    "path": "{{asset('assets/plugins/amcharts/plugins/export/libs')}}/"
                }
            }


        }).addLegend(new AmCharts.AmLegend());
        AmCharts.makeChart("overviewChart", {
            "type": "serial",
            "theme": "light",
            "autoMargins": true,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,
            "fontFamily": 'Open Sans',
            "color": '#888',

            "dataProvider": {!! $monthly_overview_data !!},
            "valueAxes": [{
                "axisAlpha": 0,

            }],
            "startDuration": 1,
            "graphs": [{
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "bullet": "round",
                "bulletSize": 8,
                "lineColor": "#1bd126",
                "lineThickness": 4,
                "negativeLineColor": "#b6481e",
                "title": " {{trans_choice('general.contribution',2)}}",
                "type": "smoothedLine",
                "valueField": "contributions"
            }, {
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "bullet": "round",
                "bulletSize": 8,
                "lineColor": "#4846d1",
                "lineThickness": 4,
                "negativeLineColor": "#b6481e",
                "title": " {{trans_choice('general.pledge',2)}}",
                "type": "smoothedLine",
                "valueField": "pledges"
            }, {
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b> [[value]]</b> [[additional]]</span>",
                "bullet": "round",
                "bulletSize": 8,
                "lineColor": "#d1cf0d",
                "lineThickness": 4,
                "negativeLineColor": "#b6481e",
                "title": " {{trans_choice('general.other_income',2)}}",
                "type": "smoothedLine",
                "valueField": "other_income"
            }],
            "categoryField": "month",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0,
                "labelRotation": 30,

            },
            "export": {
                "enabled": true,
                "libs": {
                    "path": "{{ asset('resources/assets/back/amcharts/plugins/export/libs')}}/"
                }
            }

        }).addLegend(new AmCharts.AmLegend());

    </script>
</body>
</html>
