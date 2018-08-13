<!DOCTYPE html>
<html lang="en">
<head>
<title>Revelation Manager</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap-responsive.min.css') }}" />

<link rel="stylesheet" href="{{ asset('resources/assets/back/css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/matrix-media.css') }}" />
<link href="{{ asset('resources/assets/back/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <style>
      .pagination li{
        display:inline;
      }
  </style>

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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Emails</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Emails</h5>
          <a href="{{ route ('email.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Create Email</span> </a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Email Address</th>
                  <th>Subject</th>
                  <th>Action</th>
                </tr>
              </thead>
             

              <tbody>
                <tr class="gradeX">
                @foreach ($email as $emails)
                <td>{{ $loop->index + 1 }}</td>
                <td>{{$emails->email}}</td>
                <td>{{$emails->subject}}</td>
                <td>
                   <li><a href="#"><i class="icon-pencil"></i>Edit</a></li>
                      <li><a href="#"><i class="icon-pencil"></i>Delete</a></li>
                </td>
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
