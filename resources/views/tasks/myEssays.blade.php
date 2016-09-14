@extends("layouts.master")

@section('content')

<div class="full-height">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Essays</h2>
            </div>
            <div class="box-content" id="makeBig">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>School</th>
                        <th>Deadline</th>
                        <th>Topic</th>
                        <th>View Essay</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->essays as $essay)
                     <tr>
                        <td>{{ $essay->school->biz_name }}</td>
                        <td class="center">{{ $essay->deadline }}</td>

                            <td class="center">{{ $essay->topicName() }}</td>
                       
                         <td><a href="/student/showEssays">View Essay</a></td>
                        <td class="center">
                            <span class="label label-success">{{ $essay->status }}</span>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->
</div>















@stop