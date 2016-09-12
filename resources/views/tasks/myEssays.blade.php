@extends("layouts.master")

@section('content')


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Essays</h2>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>School</th>
                        <th>Deadline</th>
                        <th>Topic</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->essays as $essay)
                    <tr>

                        <td>{{ $student->preferred_name }}</td>
                        <td class="center">{{ $essay->deadline }}</td>
                        <td class="center">{{ $essay->topicName() }}</td>
                        <td class="center">
                            <span class="label label-success">{{ $essay->status }}</span>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div><!--/row-->















@stop