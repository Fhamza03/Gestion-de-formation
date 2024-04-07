<!DOCTYPE html>
<html>
<head>
    <title>Udev | Calendar</title>
     <!-- Include FullCalendar CSS -->
    

     
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/U.png') }}">

    <style>
 /* .fc-event.category1 {
    background-color: #007bff; /* Change to your preferred color for category1 events */
/* }  */

/* .fc-event.category2 {
    background-color: #28a745; Change to your preferred color for category2 events */
/* } */

/* .fc-event.category3 {
    background-color: #dc3545; Change to your preferred color for category3 events */
/* } */



/* Calendar container */
#calendar {
  width: 100%;
}


/* Header styling */
.fc-header-toolbar {
  background-color: transparent;
  color: black;
  padding: 10px;
  border: 1px solid black;
}

.fc-header-title {
  font-size: 20px;
  font-weight: bold;
  text-transform: uppercase;
  
}

.fc-header-left,
.fc-header-center,
.fc-header-right {
  display: flex;
  align-items: center;
}

.fc-header-left {
  justify-content: flex-start;
}

.fc-header-center {
  justify-content: center;
}

.fc-header-right {
  justify-content: flex-end;
}


/* Button styling */

/* Apply styles to the FullCalendar buttons */
.fc-button {
  background-color: #97732C;
  border: none;
  color: black;
  padding: 8px 16px;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  
}

.fc-button:hover {
  background-color: #543B0B;
  color: white;
}


.fc-button-primary {
  background-color: #543B0B;
  border-color: black;
}

.fc-button-primary:hover {
    background-color: #543B0B;
    border-color: black;
}

.fc-button-secondary {
  background-color: #543B0B;
  border-color: black;
  color: white;
}

.fc-button-secondary:hover {
  background-color: #543B0B;
  border-color: black;
}



/* Event styling */
.fc-event {
  background-color: #543B0B;
  color: white;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  font-size: 14px;
  border: none;
}

.fc-event:hover {
  background-color: #97732C;
}

/* Event title styling */
.fc-event .fc-title {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  color: white;
  font-weight: bold;
}

/* Event details */
.fc-event .fc-time,
.fc-event .fc-location {
  font-size: 12px;
  margin-top: 3px;
  color: transparent;
}

.fc-event .fc-location:before {
  content: '\2022';
  display: inline-block;
  margin-right: 5px;
}

.fc-popover-header {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 5px;
  
}

.fc-popover-content {
  font-size: 14px;
}

/* Today's date highlight */
.fc-today {
  background-color: #543B0B;
  color: #543B0B;
  font-weight: bold;
}

.fc-day-number {
  font-size: 14px;
  font-weight: bold;
}

/* Event colors */
.fc-event-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 5px;
}

/* Time slot highlight */
.fc-highlight {
  background-color: rgba(0, 123, 255, 0.1);
  border: 1px solid rgba(0, 123, 255, 0.3);
}

div.container{
    padding-top : 20px;
}
div#calendar{
    border-radius: 12px;
    margin-bottom : 20px;
}
body{
    background-image : url("/images/CanlendarBg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    
}
.fc-day-grid .fc-day-top {
  border-right: 1px solid black;
}
.fc {
  table-layout: fixed;
  border-collapse: separate;
  border-spacing: 1px;
}

.fc th,
.fc td {
  border: 1px solid black;
  padding: 3px;
}

  </style>
</head>
<body> 
<div class="container">
    <div id='calendar'></div>
</div>
   
<script>

// $(document).ready(function () {
   
// var SITEURL = "{{ url('/') }}";
  
// $.ajaxSetup({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
  
// var calendar = $('#calendar').fullCalendar({
//                     editable: true,
//                     events: SITEURL + "/fullcalender",
//                     header: {
//                     left: 'prev,next today',
//                     center: 'title',
//                     right: 'month,agendaWeek,agendaDay,list'
//                 },
//                     displayEventTime: false,
//                     editable: true,
//                     eventRender: function (event, element, view) {
//                         if (event.allDay === 'true') {
//                                 event.allDay = true;
//                         } else {
//                                 event.allDay = false;
//                         }
//                     },
//                     selectable: true,
//                     selectHelper: true,
//                     select: function (start, end, allDay) {
//                         var title = prompt('Event Title:');
//                         if (title) {
//                             var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
//                             var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
//                             $.ajax({
//                                 url: SITEURL + "/fullcalenderAjax",
//                                 data: {
//                                     title: title,
//                                     start: start,
//                                     end: end,
//                                     type: 'add'

//                                 },
//                                 type: "POST",
//                                 success: function (data) {
//                                     displayMessage("Event Created Successfully");
  
//                                     calendar.fullCalendar('renderEvent',
//                                         {
//                                             id: data.id,
//                                             title: title,
//                                             start: start,
//                                             end: end,
//                                             allDay: allDay
//                                         },true);
  
//                                     calendar.fullCalendar('unselect');
//                                 }
//                             });
//                         }
//                     },
//                     eventDoubleClick: function (event) {
//                         var title = prompt('Edit Event Title:', event.title);
//                         if (title) {
//                             $.ajax({
//                                 url: SITEURL + '/fullcalenderAjax',
//                                 data: {
//                                     title: title,
//                                     start: event.start.format('Y-MM-DD'),
//                                     end: event.end ? event.end.format('Y-MM-DD') : null,
//                                     id: event.id,
//                                     type: 'update'
//                                 },
//                                 type: "POST",
//                                 success: function (response) {
//                                     event.title = title;
//                                     calendar.fullCalendar('updateEvent', event);
//                                     displayMessage("Event Updated Successfully");
//                                 }
//                             });
//                         }
//                     },
//                     eventDrop: function (event, delta) {
//                         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
//                         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
//                         $.ajax({
//                             url: SITEURL + '/fullcalenderAjax',
//                             data: {
//                                 title: event.title,
//                                 start: start,
//                                 end: end,
//                                 id: event.id,
//                                 type: 'update'
//                             },
//                             type: "POST",
//                             success: function (response) {
//                                 displayMessage("Event Updated Successfully");
//                             }
//                         });
//                     },
//                     eventResize: function (event, delta) {
//                         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
//                         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
//                         $.ajax({
//                             url: SITEURL + '/fullcalenderAjax',
//                             data: {
//                                 title: event.title,
//                                 start: start,
//                                 end: end,
//                                 id: event.id,
//                                 type: 'update'
//                             },
//                             type: "POST",
//                             success: function (response) {
//                                 displayMessage("Event Updated Successfully");
//                             }
//                         });
//                     },
//                     eventClick: function (event, jsEvent, view) {
//                         var deleteMsg = confirm("Do you really want to delete?");
//                         if (deleteMsg) {
//                             $.ajax({
//                                 type: "POST",
//                                 url: SITEURL + '/fullcalenderAjax',
//                                 data: {
//                                         id: event.id,
//                                         type: 'delete'
//                                 },
//                                 success: function (response) {
//                                     calendar.fullCalendar('removeEvents', event.id);
//                                     displayMessage("Event Deleted Successfully");
//                                 }
//                             });
//                         }
//                     }
 
//                 });
 
// });

$(document).ready(function (){
    var product = @json($events);
    
    var calendar = $('#calendar').fullCalendar({
        header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,list'
                },
                
        events : product

    });
    
});


function displayMessage(message) {
    toastr.success(message, 'Event');
} 
  
</script>
  
</body>
</html>