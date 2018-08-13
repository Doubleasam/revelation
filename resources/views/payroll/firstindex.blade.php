<!DOCTYPE html>
<html lang="en">
<head>
<title>Revelation Manager</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-media.css') }}" />
<link href="{{ asset('resources/assets/back/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">payrolls</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>payrolls table</h5>
          <a href="{{ route ('payroll.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Add New payroll</span> </a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Staff</th>
                  <th>Amount</th>
                  <th>Payment Amount</th>
                  <th>Bank Name</th>
                  <th>Account Number</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  
           
                <tr class="gradeX">
                    @foreach ($payroll as $payrolls)
                      <td>{{ $loop->index + 1 }}</td>
                      <td>
                        @if(!empty($payrolls->staff))
                        {{ $payrolls->first_name }}
                        @endif
                      </td>



                      
                        <td>{{ $payrolls->pay_amount}}</td>
                        <td>{{ $payrolls->payment_method}} </td>
                        <td>{{ $payrolls->bank_name}}</td>
                       <td>{{ $payrolls->account_number}}</td>
                        <td>
                          <li><a href="{{ route('payrollinvoice.show', $payrolls->id) }}"><i class="icon-pencil"></i>Show</a></li>
                          <li><a href="{{ route('payroll.edit', $payrolls->id) }}"><i class="icon-pencil"></i>Edit</a></li>

                          <form id="del-form-{{ $payrolls->id }}" method="post" action="{{ route('payroll.destroy', $payrolls->id) }}">
                            {{csrf_field() }}
                            {{ method_field('DELETE') }}
                              <li><a href="" onclick=" 
                                if (confirm('Are you sure, You want to delete this?'))
                                {
                                event.preventDefault();
                                document.getElementById('del-form-{{ $payrolls->id }}').submit();
                                }
                                else{
                                  event.preventDefault();
                                }">
                                <i class="icon-remove"></i>Delete</a>
                              </li>
                          </form>

                        </td>
                      </tr>
                    @endforeach
                </tr>
              </tbody>
            </table>
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
<script src="{{ asset('resources/assets/back/js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/select2.min.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/matrix.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/matrix.tables.js') }}"></script>
</body>
</html>
