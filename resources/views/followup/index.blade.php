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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">campaign</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Followup Table</h5>
            <a href="{{ route ('followup.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Add New Followup</span> </a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Assigned To</th>
                  <th>Member</th>
                  <th>Category</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($followup as $followups)
           
                <tr class="gradeX">
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $followups->user }}</td>
                  <td>{{ $followups->member }}</td>
                  <td>{{ $followups->follow_up_category_id }}</td>
                  <td>{{ $followups->notes }}</td>
                   <td>
                   <!--  <li><a href="{{ url('member/'.$campaigns->id.'/show') }}"><i class="icon-eye-open"></i>Show</a></li>
                              --><li><a href="{{ url('folowup/'.$followups->id.'/edit') }}"><i class="icon-pencil"></i>Edit</a></li>
                              <li><a href="{{ url('followup/'.$followups->id.'/delete') }}"><i class="icon-remove"></i>Delete</a></li>
                  </td>
                </tr>
                 @endforeach 

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
