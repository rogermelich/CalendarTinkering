<template>
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Calendari</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="calendar"></div>
        </div>
        <!-- /.box-body -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Calendar mounted.')
            $('#calendar').fullCalendar({
                theme: true,
                editable: true,
                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function() {
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                events: [
                    {
                        title: 'Examen',
                        start: moment().add(0,'days').format()
                    },
                    {
                        title: 'Examen 2',
                        start: moment().add(1,'days').format()
                    },
                    {
                        title: 'Partida',
                        start: '2017-04-19T11:30:00',
                        end: '2017-04-19T12:30:00',
                        allDay: false
                    },
                ]
            })
        }
    }
</script>