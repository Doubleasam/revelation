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
            <div id="breadcrumb"> <a href=".html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Reports</a> <a href="#" class="current">Cash Flow</a> </div>
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

                    <!-- <div class="form-actions">
                        <span class="input-group-btn">
                          <button type="submit" class="btn bg-olive btn-flat">Search
                          </button>
                        </span>
                        <span class="input-group-btn">
                          <a href="{{Request::url()}}"
                             class="btn bg-purple  btn-flat pull-right">Reset</a>
                        </span>
                    </div> -->
                    
            </div>
            
            </form>
        </div>
        <!-- /.box-body -->

        <!-- /.box -->
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-content nopadding">

                        <div class="col-sm-6">
                            <table class="table table-bordered table-condensed table-hover">
                                <tbody>
                                <tr style="background-color: #F2F8FF">
                                    <td></td>
                                    <td style="text-align:right"><b>Balance</b></td>
                                </tr>
                                <tr>
                                    <td class="text-blue"><b>Receipts</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Contributions</b>
                                    </td>
                                    <td style="text-align:right">{{number_format($contributions,2)}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Pledges</b>
                                    </td>
                                    <td style="text-align:right">{{number_format($pledges,2)}}</td>
                                </tr>
                               
                                <tr class="active">
                                    <td style="border-bottom:1px solid #000000">
                                        <b>Total Receipts (A)</b></td>
                                    <td style="text-align:right; border-bottom:1px solid #000000"
                                        class="text-bold">{{number_format($total_receipts,2)}}</td>
                                </tr>
                                <tr>
                                    <td class="text-blue"><b>Payment</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>Expenses</b></td>
                                    <td style="text-align:right">{{number_format($expenses,2)}}</td>
                                </tr>
                               
                                <tr class="active">
                                    <td style="border-bottom:1px solid #000000">
                                        <b>Total Payment (B)</b></td>
                                    <td style="text-align:right; border-bottom:1px solid #000000 " class="text-red text-bold">
                                        ({{number_format($total_payments,2)}})
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td style="color:green;">
                                        <b>Total cash Balance
                                            (A) - (B)</b></td>
                                    <td style="text-align:right"><b>{{number_format($cash_balance,2)}}</b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
</body>
</html>
