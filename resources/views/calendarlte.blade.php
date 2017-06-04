@extends('adminlte::page')

@section('htmlheader_title')
    Exemple calendari
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <full-calendar></full-calendar>
    </div>
    <script>
        $(document).ready(function() {
            $('#external-events .fc-event').each(function() {
                // store data so the calendar knows to render an event upon drop
                $(this).data('event', {
                    title: $.trim($(this).text()), // use the element's text as the event title
                    stick: true // maintain when user navigates (see docs on the renderEvent method)
                });
                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true,      // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                });
            });
            $('#calendar').fullCalendar({
                theme: true,
                editable: true,
                droppable: true,
                drop: function() {
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    {
                        title: 'Examen',
                        start: moment().format()
                    },
                    {
                        title: 'Examen 2',
                        start: moment().add(1,'days').format()
                    },
                    {
                        title: 'Examen 3',
                        start: '2017-04-19T11:30:00',
                        end: '2017-04-19T12:30:00',
                        allDay: false
                    }
                ]
            })
        })
    </script>
@endsection