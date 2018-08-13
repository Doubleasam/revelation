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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Pledges</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Pledges table</h5>
          <a href="{{ route ('pledge.create') }}" span class="label label-info"><i class="icon-plus icon-white"></i> Add New Pledge</span> </a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Pledge</th>
                  <th>Member</th>
                  <th>Amount</th>
                  <th>Date</th>
                  <!-- <th>Status</th> -->
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  
           
                <tr class="gradeX">
                    @foreach ($pledge as $pledges)
                    
                    

                      
                        <td>
@if(!empty($pledges->campaign))
{{ $pledges->campaign->name}}
@endif
                          </td>
                        <td>
@if(!empty($pledges->member))
{{ $pledges->member->first_name}}
@endif
                         </td>
                        <td><strong>Pledged</strong>:- {{ $pledges->amount }}</br>
                              {{number_format(\App\PledgePayment::where('pledge_id',$pledges->pledge_id)->sum('amount'),2)}}
                               

                                 
                        </td>
                        <td>{{ $pledges->date }}</td>
                        <td>
                           @if(\App\Helpers::pledge_money_due($pledges->id)>0)
                                                <li>
                                                    <a href="{{ route ('pledgepayment.create') }}"><i
                                                                class="icon-plus"></i>
                                                    </a>
                                                </li>
                            @endif
                          <!-- <li><a href="{{ url('member/'.$pledges->id.'/show') }}"><i class="icon-eye-open"></i>Show</a></li> -->

                             <li><a href="{{ route('pledge.edit', $pledges->id) }}"><i class="icon-pencil"></i>Edit</a></li>

                          <form id="del-form-{{ $pledges->id }}" method="post" action="{{ route('pledge.destroy', $pledges->id) }}">
                            {{csrf_field() }}
                            {{ method_field('DELETE') }}
                              <li><a href="" onclick="
                                event.preventDefault();
                                document.getElementById('del-form-{{ $pledges->id }}').submit();">
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
