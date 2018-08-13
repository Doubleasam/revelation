

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
    <div id="breadcrumb"> <a href=".html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Settings</a> </div>
    <h1>Settings</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Settings</h5>
          </div>
          <!-- @if (count ($errors) > 0)
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger"> {{ $error}}
            @endforeach
          @endif -->
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="POST" action="{{ route ('settings.update') }}" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
               {{ csrf_field() }}
              {{method_field('PUT')}}

                  <div class="control-group">
                    <label class="control-label">Church Name all</label>
                    <div class="controls">
                      <input type="text" name="church_name" id="required"  value="{{\App\Setting::where('setting_key','church_name')->first()->setting_value}}">
                          
                          @if ($errors->has('first_name'))
                                    <p class="alert alert-danger">{{ $errors->first('first_name') }}
                                    <!-- <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span> -->
                        @endif
                    </div>
                  </div>
                   <div class="control-group">
                  <label class="control-label">Church Email</label>
                  <div class="controls">
                    <input type="text" name="church_email" id="required" value="{{\App\Setting::where('setting_key','church_email')->first()->setting_value}}">
                        @if ($errors->has('email'))
                                    <p class="alert alert-danger">{{ $errors->first('email') }}
                                    
                        @endif
                  </div>
                </div>
                  <div class="control-group">
                    <label class="control-label">Church Website</label>
                    <div class="controls">
                      <input type="text" class="span11" name="church_website" id="required" value="{{\App\Setting::where('setting_key','church_website')->first()->setting_value}}">

                          @if ($errors->has('last_name'))
                                    <p class="alert alert-danger">{{ $errors->first('last_name') }}
                                    
                        @endif
                    </div>
                  </div>
                <div class="control-group">
                    <label class="control-label">Church Mobile Phone</label>
                    <div class="controls">
                      <input type="text" name="church_mobile_phone" id="required" value="{{\App\Setting::where('setting_key','church_mobile_phone')->first()->setting_value}}">
                          @if ($errors->has('mobile_phone'))
                                  <p class="alert alert-danger">{{ $errors->first('mobile_phone') }}
                                    
                        @endif
                    </div>
                </div>
               
              
                <div class="control-group">
                    <label class="control-label">Church Address</label>
                    <div class="controls">
                      <input type="text" class="span11" name="church_address" id="required" value="{{\App\Setting::where('setting_key','church_address')->first()->setting_value}}">
                          @if ($errors->has('address'))
                                  <p class="alert alert-danger">{{ $errors->first('address') }}
                                    
                        @endif
                    </div>
                  </div>


                 <!--  <div class="control-group">
                    <label class="control-label">Church Address</label>
                    <div class="controls">
                      <textarea class="span11" name="church_address" id="required" value="{{\App\Setting::where('setting_key','church_address')->first()->setting_value}}"> </textarea>
                          @if ($errors->has('address'))
                                  <p class="alert alert-danger">{{ $errors->first('address') }}
                                    
                        @endif
                    </div>
                  </div> -->
                 
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
