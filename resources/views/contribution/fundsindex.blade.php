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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Funds</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Funds table</h5>
         <a href="{{ route ('funds.create') }}"><span class="label label-info"><i class="icon-plus icon-white"></i> Add New Funds</span></a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Name Of Funds</th>
                  <th>Notes</th>
                  <th>Total (#)</th>
                </tr>
              </thead>
              <tbody>
                  
           
                <tr class="gradeX">
                    @foreach ($fund as $funds)
                        <td>{{ $loop->index + 1}}</td>
                        <td>{{ $funds->name }}</td>
                        <td>{{ $funds->notes }}</td>
                        <td>
                        @if(!empty ($funds->contribute))
                        {{ $funds->contribute->amount }}
                        @endif
                      </td>
                       
                   
                           
                        <!-- <td>   
                        @foreach ($contribution as $contributions)
                        {{ $contributions->amount }}
                        @endforeach
                        </td>
                     -->
                       

                        <td>
                         <!--  <li><a href=""><i class="icon-eye-open"></i>Show</a></li> -->
                             <li><a href="{{ route('funds.edit', $funds->id) }}"><i class="icon-pencil"></i>Edit</a></li>
                            <form id="del-form-{{ $funds->id }}" method="post" action="{{ route('funds.destroy', $funds->id) }}">
                              {{csrf_field() }}
                              {{ method_field ('DELETE') }}
                            <li><a href="" onclick="event.preventDefault(); document.getElementById('del-form-{{ $funds->id }}').submit();"><i class="icon-remove"></i>Delete</a></li>
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
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
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
