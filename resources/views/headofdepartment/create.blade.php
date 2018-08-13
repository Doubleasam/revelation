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
    <div id="breadcrumb"> <a href=".html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Members</a> <a href="#" class="current">Validation</a> </div>
    <h1>ADD HeadOfDepartments</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>ADD HeadOfDepartments</h5>
          </div>
          <!-- @if (count ($errors) > 0)
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger"> {{ $error}}
            @endforeach
          @endif -->
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="POST" action="{{ route ('headofdepartment.store') }}" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
                  <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                      <input type="text" name="first_name" id="required" value="{{ old('first_name') }}">
                          @if ($errors->has('first_name'))
                                    <p class="alert alert-danger">{{ $errors->first('first_name') }}
                                    <!-- <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span> -->
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Middle Name</label>
                    <div class="controls">
                      <input type="text" name="middle_name" id="required" value="{{ old('middle_name') }}">
                          @if ($errors->has('middle_name'))
                                    <p class="alert alert-danger">{{ $errors->first('middle_name') }}
                                    
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                      <input type="text" name="last_name" id="required" value="{{ old('last_name') }}">
                          @if ($errors->has('last_name'))
                                    <p class="alert alert-danger">{{ $errors->first('last_name') }}
                                    
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label">Gender</label>
                  <div class="controls">
                    <select  name="gender" value="{{ old('gender') }}" >
                        @if ($errors->has('gender'))
                                    <p class="alert alert-danger">{{ $errors->first('gender') }}
                                    
                        @endif
                      <option>Unknown</option>
                      <option>Male</option>
                      <option>Female</option>
                      
                    </select>
                  </div>
                  </div>
                <div class="control-group">
                  <label class="control-label">Status</label>
                  <div class="controls">
                    <select  name="status" value="{{ old('status') }}">
                        @if ($errors->has('status'))
                                  <p class="alert alert-danger">{{ $errors->first('status') }}
                                    
                        @endif
                      <option>Unknown</option>
                      <option>Attender</option>
                      <option>Visitor</option>
                      <option>Inactive</option>
                      
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Marital Status</label>
                  <div class="controls">
                    <select  name="marital_status" value="{{ old('marital_status') }}">
                          @if ($errors->has('marital_status'))
                                  <p class="alert alert-danger">{{ $errors->first('marital_status') }}
                                    
                        @endif
                      <option>Unknown</option>
                      <option>Single</option>
                      <option>Engaged</option>
                      <option>Married</option>
                      
                    </select>
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mobile Phone</label>
                    <div class="controls">
                      <input type="text" name="mobile_phone" id="required" value="{{ old('mobile_phone') }}">
                          @if ($errors->has('mobile_phone'))
                                  <p class="alert alert-danger">{{ $errors->first('mobile_phone') }}
                                    
                        @endif
                    </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Your Email</label>
                  <div class="controls">
                    <input type="text" name="email" id="required" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                                    <p class="alert alert-danger">{{ $errors->first('email') }}
                                    
                        @endif
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Date of Birth(mm-dd)</label>
                  <div class="controls">
                    <div  data-date="2012-11-02" class="input-append date datepicker">
                      <input type="text"  name="dob" value="2012-11-02"  data-date-format="yyyy-mm-dd" class="span11"  value="{{ old('dob') }}">
                          @if ($errors->has('dob'))
                                  <p class="alert alert-danger">{{ $errors->first('dob') }}
                                    
                        @endif
                      <span class="add-on"><i class="icon-th"></i></span> </div>
                  </div>
                </div>
                  <div class="control-group">
                    <label class="control-label">Address</label>
                    <div class="controls">
                      <input type="text" name="address" id="required" value="{{ old('address') }}">
                          @if ($errors->has('address'))
                                  <p class="alert alert-danger">{{ $errors->first('address') }}
                                    
                        @endif
                    </div>
                  </div>
                  <!-- <div class="control-group">
                    <label class="control-label">Photo</label>
                    <div class="controls">
                      <input type="file" name="photo" id="required">
                    </div>
                  </div> -->
                    <div class="control-group">
                      <label class="control-label">Photo</label>
                      <div class="controls">
                        <input type="file"  name="photo"  value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                                    <p class="alert alert-danger">{{ $errors->first('photo') }}
                                    
                        @endif
                      </div>
                    </div>
                  <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                      <input type="text" name="description" id="required" value="{{ old('description') }}">
                          @if ($errors->has('description'))
                                  <p class="alert alert-danger">{{ $errors->first('description') }}
                                    
                        @endif
                    </div>
                  </div>
                  <div class="form-actions">
                    <input type="submit" class="btn btn-success">
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
@include('layouts.footer')

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
