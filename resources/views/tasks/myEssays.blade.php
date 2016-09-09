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
                        <th>Application Deadline</th>
                        <th>Topic</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                    </tr>
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