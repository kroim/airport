
jQuery(function($) {

        /* initialize the external events
            -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });

        /* initialize the calendar
        -----------------------------------------------------------------*/

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();


    var calendar = $('#calendar').fullCalendar({
            //isRTL: true,
            //firstDay: 1,// >> change first day of week

            buttonHtml: {
                prev: '<i class="ace-icon fa fa-chevron-left"></i>',
                next: '<i class="ace-icon fa fa-chevron-right"></i>'
            },

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
//                {
//                    title: 'All Day Event',
//                    start: new Date(y, m, 1),
//                    className: 'label-important'
//                },
//                {
//                    title: 'Long Event',
//                    start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
//                    end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
//                    className: 'label-success'
//                },
//                {
//                    title: 'Some Event',
//                    start: new Date(y, m, d-3, 16, 0),
//                    allDay: false,
//                    className: 'label-info'
//                }
            ]
            ,

            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                var $extraEventClass = $(this).attr('data-class');


                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = false;
                if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
            ,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {

                bootbox.prompt("New Event Title:", function(title) {
                    if (title !== null) {
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay,
                                className: 'label-info'
                            },
                            true // make the event "stick"
                        );
                    }
                });


                calendar.fullCalendar('unselect');
            }
            ,
            eventClick: function(calEvent, jsEvent, view) {

                //display a modal
                var modal =
                    '<div class="modal fade">\
                      <div class="modal-dialog">\
                       <div class="modal-content">\
                         <div class="modal-body">\
                           <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
                           <form class="no-margin">\
                              <label>Change event name &nbsp;</label>\
                              <input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
					 <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Save</button>\
				   </form>\
				 </div>\
				 <div class="modal-footer">\
					<button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete Event</button>\
					<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
				 </div>\
			  </div>\
			 </div>\
			</div>';


                var modal = $(modal).appendTo('body');
                modal.find('form').on('submit', function(ev){
                    ev.preventDefault();

                    calEvent.title = $(this).find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);
                    modal.modal("hide");
                });
                modal.find('button[data-action=delete]').on('click', function() {
                    calendar.fullCalendar('removeEvents' , function(ev){
                        return (ev._id == calEvent._id);
                    });
                    modal.modal("hide");
                });

                modal.modal('show').on('hidden', function(){
                    modal.remove();
                });

            }

        });

    // var myTable =
    //     $('#dynamic-table')
    //     //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
    //         .DataTable( {
    //             bAutoWidth: false,
    //             "aoColumns": [
    //                 { "bSortable": false },
    //                 null, null,null, null, null,
    //                 { "bSortable": false }
    //             ],
    //             "aaSorting": [],
    //             select: {
    //                 style: 'multi'
    //             }
    //         } );
    // $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
    //
    // new $.fn.dataTable.Buttons( myTable, {
    //     buttons: [
    //
    //         {
    //             "extend": "csv",
    //             "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
    //             "className": "btn btn-white btn-primary btn-bold"
    //         },
    //         {
    //             "extend": "print",
    //             "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
    //             "className": "btn btn-white btn-primary btn-bold",
    //             autoPrint: false,
    //
    //         }
    //     ]
    // } );
    // myTable.buttons().container().appendTo( $('.tableTools-container') );
    //
    // var defaultColvisAction = myTable.button(0).action();
    // myTable.button(0).action(function (e, dt, button, config) {
    //
    //     defaultColvisAction(e, dt, button, config);
    //
    //
    //     if($('.dt-button-collection > .dropdown-menu').length == 0) {
    //         $('.dt-button-collection')
    //             .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
    //             .find('a').attr('href', '#').wrap("<li />")
    //     }
    //     $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
    // });
    //
    //
    // myTable.on( 'select', function ( e, dt, type, index ) {
    //     if ( type === 'row' ) {
    //         $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
    //     }
    // } );
    // myTable.on( 'deselect', function ( e, dt, type, index ) {
    //     if ( type === 'row' ) {
    //         $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
    //     }
    // } );
    // //table checkboxes
    // $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
    //
    // //select/deselect all rows according to table header checkbox
    // $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
    //     var th_checked = this.checked;//checkbox inside "TH" table header
    //
    //     $('#dynamic-table').find('tbody > tr').each(function(){
    //         var row = this;
    //         if(th_checked) myTable.row(row).select();
    //         else  myTable.row(row).deselect();
    //     });
    // });
    //
    // //select/deselect a row when the checkbox is checked/unchecked
    // $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
    //     var row = $(this).closest('tr').get(0);
    //     if(this.checked) myTable.row(row).deselect();
    //     else myTable.row(row).select();
    // });
    //
    //
    //
    // $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
    //     e.stopImmediatePropagation();
    //     e.stopPropagation();
    //     e.preventDefault();
    // });
    // //And for the first simple table, which doesn't have TableTools or dataTables
    // //select/deselect all rows according to table header checkbox
    // var active_class = 'active';
    // $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
    //     var th_checked = this.checked;//checkbox inside "TH" table header
    //
    //     $(this).closest('table').find('tbody > tr').each(function(){
    //         var row = this;
    //         if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
    //         else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
    //     });
    // });
    //
    // //select/deselect a row when the checkbox is checked/unchecked
    // $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
    //     var $row = $(this).closest('tr');
    //     if($row.is('.detail-row ')) return;
    //     if(this.checked) $row.addClass(active_class);
    //     else $row.removeClass(active_class);
    // });
});
$(function(){
    $(".fc-scroller").css("height", "auto");
});
