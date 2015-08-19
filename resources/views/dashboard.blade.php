@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Customer</th>
                    <th>Indices</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($apps as $app)
                <tr>
                    <td>{{ $app->name }}</td>
                    <td>{{ $app->customer }}</td>
                    <td>{{ $app->indices->count() }}</td>
                    <td>
                        <span class="label label-sm label-success">OK</span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop