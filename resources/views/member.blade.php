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


<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="{{ url ('home2') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ url ('home2') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="{{ url ('#') }}"><i class="icon icon-signal"></i> <span>Members</span></a>
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a> -->
      <ul>
        <li><a href="{{ url ('member/data') }}">View Members</a></li>
        <li><a href="{{ url ('member/create') }} ">Add Members</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="{{ url ('#') }}"><i class="icon icon-inbox"></i> <span>Events</span></a>
    <ul>
        <li><a href="{{ url ('events/data') }}">View Events</a></li>
        <li><a href="{{ url ('events/create') }} ">Add Events</a></li>
         <li><a href="{{ url ('events/calender') }} ">Manage Calender</a></li>
      </ul>
    </li>
    <li class="submenu"><a href="{{ url ('#') }}"><i class="icon icon-th"></i> <span>Pledges</span></a>
    <ul>
        <li><a href="{{ url ('member/data') }}">View Pledges</a></li>
        <li><a href="{{ url ('member/create') }} ">Add Pledges</a></li>
        <li><a href="{{ url ('member/create') }} ">Manage Campaigns</a></li>
    </ul>
    </li>
    <li class="submenu"><a href="{{ url ('#') }}"><i class="icon icon-fullscreen"></i> <span>Contributions</span></a>
    <ul>
        <li><a href="{{ url ('member/data') }}">View Pledges</a></li>
        <li><a href="{{ url ('member/create') }} ">Add Pledges</a></li>
        <li><a href="{{ url ('member/create') }} ">Manage Campaigns</a></li>
    </ul>
    </li>
    <li class="submenu"> <a href="{{ url ('#') }}"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">View Follow ups</a></li>
        <li><a href="form-validation.html">My Follow ups</a></li>
        <li><a href="form-wizard.html">Add Follow ups</a></li>
        <li><a href="form-wizard.html">Manage Follow up Categories</a></li>
      </ul>
    </li>
    <li class="submenu"><a href="{{ url ('#') }}"><i class="icon icon-tint"></i> <span>Reports</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">Cash Flow</a></li>
        <li><a href="form-validation.html">Profit / Loss</a></li>
      </ul>
    </li>
    <li class="submenu"><a href="{{ url ('#') }}"><i class="icon icon-pencil"></i> <span>Assets</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">View Assets</a></li>
        <li><a href="form-validation.html">Add Asset</a></li>
        <li><a href="form-wizard.html">Manage Asset Types</a></li>
     </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Messaging</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">Email</a></li>
        <li><a href="form-validation.html">SMS</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Users</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Login Info</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Member table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>Photo</th>
                  <th>Mobile Phone</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Date Of Birth</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($member  as $members)
           
                <tr class="gradeX">
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $members->first_name }}</td>
                  <td>{{ $members->photo }}</td>
                  <td>{{ $members->mobile_phone }}</td>
                  <td>{{ $members->gender }}</td>
                  <td>{{ $members->age }}</td>
                  <td>{{ $members->dob }}</td>
                  <td>{{ $members->address }}</td>
                  <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only"> Options</span>
                          </button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="{{ url('member/'.$members->id.'/show') }}"><i class="icon-eye-open"></i>Show</a></li>
                             <li><a href="{{ url('member/'.$members->id.'/edit') }}"><i class="icon-pencil"></i>Edit</a></li>
                              <li><a href="{{ url('member/'.$members->id.'/delete') }}"><i class="icon-remove"></i>Delete</a></li>
                        </ul>
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
