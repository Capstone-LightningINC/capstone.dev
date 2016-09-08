<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/jquery-migrate-1.0.0.min.js"></script>

<script src="/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="/js/jquery.ui.touch-punch.js"></script>

<script src="/js/modernizr.js"></script>

<script src="/js/bootstrap.min.js"></script>

<script src="/js/jquery.cookie.js"></script>

<script src='/js/fullcalendar.min.js'></script>

<script src='/js/jquery.dataTables.min.js'></script>

<script src="/js/excanvas.js"></script>
<script src="/js/jquery.flot.js"></script>
<script src="/js/jquery.flot.pie.js"></script>
<script src="/js/jquery.flot.stack.js"></script>
<script src="/js/jquery.flot.resize.min.js"></script>

<script src="/js/jquery.chosen.min.js"></script>

<script src="/js/jquery.uniform.min.js"></script>

<script src="/js/jquery.cleditor.min.js"></script>

<script src="/js/jquery.noty.js"></script>

<script src="/js/jquery.elfinder.min.js"></script>

<script src="/js/jquery.raty.min.js"></script>

<script src="/js/jquery.iphone.toggle.js"></script>

<script src="/js/jquery.uploadify-3.1.min.js"></script>

<script src="/js/jquery.gritter.min.js"></script>

<script src="/js/jquery.imagesloaded.js"></script>

<script src="/js/jquery.masonry.min.js"></script>

<script src="/js/jquery.knob.modified.js"></script>

<script src="/js/jquery.sparkline.min.js"></script>

<script src="/js/counter.js"></script>

<script src="/js/retina.js"></script>

<script src="/js/custom.js"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>


{{--CALENDAR--}}
<script src='/js/moment.min.js'></script>
<script src='/js/jquery.min.js'></script>
<script src='/js/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2016-06-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-06-01'
                },
                {
                    title: 'Long Event',
                    start: '2016-06-07',
                    end: '2016-06-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-06-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-06-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-06-11',
                    end: '2016-06-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-06-12T10:30:00',
                    end: '2016-06-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-06-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2016-06-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2016-06-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2016-06-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2016-06-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2016-06-28'
                }
            ]
        });

    });

</script>