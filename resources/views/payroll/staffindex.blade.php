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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Staff</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Staff table</h5>
          <a href="{{ route ('staff.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Add New Staff</span> </a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Photo</th>
                  <th>Mobile Phone</th>
                  <th>Gender</th>
                  <th>Position</th>
                  <th>Date Of Birth</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($staff  as $staffs) 
           
                <tr class="gradeX">
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $staffs->first_name }}</td>
                  <td>{{ $staffs->last_name }}</td>
                  <td>
                    @if(!empty($staff->photo))
                          <a class="fancybox" rel="group"
                             href="{{ Storage::disk('local')->url($staff->photo) }}"> <img
                                      src="{{ asset(Storage::disk('local')->url($staff->photo)) }}" width="120"/></a>
                      @else
                          <img class="img-thumbnail"
                               src="{{asset('resources/assets/img/user.png')}}"
                               alt="user image" style="max-height: 100px!important;"/>
                      @endif
                  </td>
                  <td>{{ $staffs->mobile_phone }}</td>
                  <td>{{ $staffs->gender }}</td>
                  <td>{{ $staffs->position }}</td>
                  <td>{{ $staffs->dob }}</td>
                  <td>{{ $staffs->address }}</td>
                  <td>
                      <!-- <div class="btn-group">
                          <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only"> Options</span>
                          </button> -->
                       <!--  <ul class="dropdown-menu dropdown-menu-right" role="menu"> -->
                            <li><a href="{{ url('hod/'.$staffs->id.'/show') }}"><i class="icon-eye-open"></i>Show</a></li>
                             <li><a href="{{ url('hod/'.$staffs->id.'/edit') }}"><i class="icon-pencil"></i>Edit</a></li>
                              <li><a href="{{ url('hod/'.$staffs->id.'/delete') }}"><i class="icon-remove"></i>Delete</a></li>
                       <!--  </ul> -->
                      </div>
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
