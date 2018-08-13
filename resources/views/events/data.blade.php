<!DOCTYPE html>
<html lang="en">
<head>
<title>Revelation Manager</title>
<meta charset="UTF-8" />
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
    <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Event</a> <a href="#" class="current">Calendar</a></div>
   </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Calendar</h5>
            <div class="buttons"> <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
              <div class="modal hide" id="modal-add-event">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Add a new event</h3>
                </div>
                <div class="modal-body">
                  <p>Enter event name:</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                </div>
                <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a> <a href="#" id="add-event-submit" class="btn btn-primary">Add event</a> </div>
              </div>
            </div>
          </div>
          <div class="widget-content">
            <div class="panel-left">
              <!-- <div id="fullcalendar"></div> -->
              <div id="calendar"></div>
                  <div id="fullCalModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                                  <h4 id="modalTitle" class="modal-title"></h4>
                              </div>
                              <div id="modalBody" class="modal-body"></div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button class="btn btn-primary"><a id="eventUrl" target="_blank">Event Page</a></button>
                              </div>
                          </div>
                      </div>
                  </div>


                    <!-- doubleasam added code -->
                 <!--  <div id="addEvent" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                                  <h4 id="modalTitle" class="modal-title"></h4>
                              </div>
                              <div id="modalBody" class="modal-body"></div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button class="btn btn-primary"><a id="eventUrl" target="_blank">Event Page</a></button>
                              </div>
                          </div>
                      </div>
                  </div> -->
                </div>
            <div id="external-events" class="panel-right">
              <div class="panel-title">
                <h5>Drag Events to the calander</h5>
              </div>
              <div class="panel-content">
                <div class="external-event ui-draggable label label-inverse">My Event 1</div>
                <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                <div class="external-event ui-draggable label label-inverse">My Event 5</div>
              </div>
            </div>
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
<script src="{{ asset('resources/assets/back/js/matrix.js') }}"></script>
<script src="{{ asset('resources/assets/back/js/moments.js') }}"></script> 
<script src="{{ asset('resources/assets/back/js/fullcalendar.js') }}"></script> 

<script>
$(document).ready(function() { 



     // doubleasam was in a good moood
   $('#calendar').fullCalendar({

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },

        selectable: true,
        selectHelper: true,

      select: function (start, end, allDay) {
          if (start.isBefore(moment())) {
              $('#calendar').fullCalendar('unselect');
              alert('You cannot add Events to Past dates on the calender.')
              return false;
          } else {
              var start_date = $.fullCalendar.moment(start);
              var end_date = $.fullCalendar.moment(end);
              fillup_new_event_input(start_date, end_date);
              $('#modal-add-event').modal('show');
          }
      }
      });

    function fillup_new_event_input(start_date, end_date) {

            var all_day = start_date._ambigTime; // if _ambigTime == true, then event is all day
            var start_time = moment(start_date).format("H:mm");
            var end_time = moment(end_date).format("H:mm");

            if (all_day == true) {
                end_date.subtract(1, 'd');

            }
            start_date = start_date.format("YYYY-MM-DD");
            end_date = end_date.format("YYYY-MM-DD");

            // multi-day all day events
            if (start_date != end_date && all_day) {
                $('#all_day').attr("checked", "checked");
                $('#start_time').hide();
                $('#end_time').hide();
                $('#start_time').removeAttr('required');
                $('#end_time').removeAttr('required');
                $('#startDateDiv').addClass('col-md-8');
                $('#endDateDiv').addClass('col-md-8');
                // events with times
            } else if (!all_day) {
                $('#start_time').val(start_time);
                $('#end_time').val(end_time);
                $('#all_day').val(start_time);
                $('#start_time').show();
                $('#end_time').show();
                $('#start_time').attr('required', 'required');
                $('#end_time').attr('required', 'required');
                $('#startDateDiv').removeClass('col-md-8');
                $('#endDateDiv').removeClass('col-md-8');
            }
            $('#start_date').val(start_date); // set the start date
            $('#end_date').val(end_date); // set the end date

        }
   

    


      
});
</script>
</body>
</html>
