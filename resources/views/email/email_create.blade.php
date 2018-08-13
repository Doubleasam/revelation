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
<link rel="stylesheet" href="{{ asset('resources/assets/back/css/bootstrap-wysihtml5.css') }}" />
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
    <div id="breadcrumb"> <a href=".html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Communications</a> <a href="#" class="current">Email</a> </div>
    <h1>Send Email</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Send Email</h5>
          </div>
          <!-- @if (count ($errors) > 0)
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger"> {{ $error}}
            @endforeach
          @endif -->
          
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="POST" action="{{ route ('email.store') }}" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
                  <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                      <!-- <select name="member_id">
                           <option value=></option>
                        </select>
                     </div> -->
                     <select name="email">
                            @foreach ($member as $members)  
                                <option value="{{ $members->email }}">{{ $members->email }}</option>
                            @endforeach
                      </select>
                  </div>

                
                <!-- <div class="row-fluid">
                   <div class="widget-box">
                      <div class="widget-content"> -->
                        <div class="control-group">
                    <label class="control-label">Subject</label>
                    <div class="controls">
                      <input type="text" name="subject" id="required">
                          @if ($errors->has('name'))
                                  <p class="alert alert-danger">{{ $errors->first('name') }}
                                    
                        @endif
                    </div>
                  </div>

                        <div class="control-group">
                          <label class="control-label">Message</label>
                          <form>
                            <div class="controls">
                              <textarea class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
                            </div>
                          </form>
                        </div>
                      <!-- </div>
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
<script>
  $('.textarea_editor').wysihtml5();
</script>
</body>
</html>
