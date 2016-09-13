@extends("layouts.master")

@section('content')


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendar</h2>
            </div>
            <div class="box-content">
                <div id="external-events" class="span3 hidden-phone hidden-tablet">
                    <h4>Draggable Events</h4>
                    <div class="external-event badge">Default</div>
                    <div class="external-event badge badge-success">Completed</div>
                    <div class="external-event badge badge-warning">Warning</div>
                    <div class="external-event badge badge-important">Important</div>
                    <div class="external-event badge badge-info">Info</div>
                    <div class="external-event badge badge-inverse">Other</div>
                    <p>
                        <label for="drop-remove"><input type="checkbox" id="drop-remove" /> remove after drop</label>
                    </p>
                </div>

                <div id="calendar" class="span9"></div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--/row-->





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

@stop