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

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

@include ('layouts.sidebar')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Payroll</a> </div>
    <h1>Payroll</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Payroll</h5>
          <a href="{{ route ('payroll.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Add New Payroll</span> </a>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    @foreach ($settings as $setting)
                    <tr>
                      <td><h4>{{ $setting->church_name}}</h4></td>
                    </tr>
                    <tr>
                      <td>Your Town</td>
                    </tr>
                    <tr>
                      <td>Your Region/State</td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: {{ $setting->church_mobile_phone}}</td>
                    </tr>
                    <tr>
                      <td >{{ $setting->church_email}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    @foreach ($settings as $setting)
                    <tr>
                    <tr>
                      <td class="width30">Invoice ID:</td>
                      <td class="width70"><strong>TD-6546</strong></td>
                    </tr>
                    <tr>
                      <td>Issue Date:</td>
                      <td><strong>March 23, 2013</strong></td>
                    </tr>
                    <tr>
                      <td>Due Date:</td>
                      <td><strong>April 01, 2013</strong></td>
                    </tr>
                  <td class="width30">Church Address:</td>
                    <td class="width70"><strong>{{ $setting->church_name}} </strong> <br>
                      {{ $setting->church_address}} <br>
                      {{ $setting->church_mobile_phone}}<br>
                      {{ $setting->church_email}}</td>
                  </tr>
                  @endforeach
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class="row-fluid">
              <form class="form-horizontal" method="POST" action="{{ route ('payroll.store') }}" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="span12">
              <!-- first column -->
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="50%"><h4>Date: </h4>
                      <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" name="date" value="01-02-2013" class="datepicker span11">
                      </div>
                      </td>

                      <td class="msg-invoice" width="50%"><h4>Church Name: </h4>
                       <div class="controls">
                          @foreach ($settings as $setting)
                          <input type="text" class="span11" placeholder="{{ $setting->church_name }}" />
                          @endforeach
                        </div>
                      </td>

                     
                    </tr>
                  </tbody>
                </table>
            
            
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="50%"><h4>Staff: </h4>
                        
                        <div class="controls">
                           <select name="staff_id" class= "span11">
                                 @foreach ($staff as $staffs)
                                  <option value="{{ $staffs->id }}">{{ $staffs->first_name }}</option>
                                  @endforeach
                              </select>
                        </div>
             
              
            
                      </td>
                      @foreach ($payroll as $payrolls)
                      <td class="msg-invoice" width="50%"><h4>Amount Pay: </h4>
                       
              <div class="controls">
                <span class="date badge badge-info">{{ $payrolls->pay_amount}}</span>
                
              </div>
            
                      </td>

                       
                    </tr>
                  </tbody>
                </table>
                
                
                <!-- second column -->
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                   
                    <tr>
                      <td class="msg-invoice" width="30%"><h4>Payment method: </h4>
                        <a href="#" class="tip-bottom" title="Bank transfer">Bank transfer</a> |  <a href="#" class="tip-bottom" title="Cheque">Cheque</a> |  <a href="#" class="tip-bottom" title="Cash">Cash</a>
                                        <div class="controls">
                                          <span class="date badge badge-info">{{ $payrolls->payment_method  }}</span>
                
              </div>
            
                      </td>
                      <td class="msg-invoice" width="30%"><h4>Bank Name: </h4>
                                      <div class="controls">
                                        <span class="date badge badge-info">{{ $payrolls->bank_name }}</span>
                                       </div>
                      </td>

                        <td class="msg-invoice" width="30%"><h4>Account Number: </h4>
                        
              <div class="controls">
                <span class="date badge badge-info">{{ $payrolls->account_number  }}</span>
               
              </div>
            
                      </td>
                    </tr>
                     @endforeach
                  </tbody>
                </table>
               
              


                <div class="pull-right">
                  <br>
                  <!-- <a class="btn btn-primary btn-large pull-right" href="">Pay Invoice</a> --> 
                  <input type="submit" class="btn btn-primary btn-large pull-right">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<!--Footer-part-->
@include('layouts.footer')

<!--end-Footer-part--> 
<!-- <script src="{{ asset('resources/assets/back/js/jquery.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/matrix.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/bootstrap-datepicker.js') }}"></script> -->

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
