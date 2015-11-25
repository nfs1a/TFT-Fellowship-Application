@extends('layouts/_default')

@section('content')
    <div id="page">
        <div class="container">
            <div class="row sectionTitle">
                <h1>{{$post_type}}</h1>
                <a href="{{ url('basic/create') }}" role="btn" class="btn btn-primary pull-right">手動新增</a>
            </div>
            <div class="row">
                <div class="sectionPan panel panel-default shadow">
                    <div class="panel-body">
                        <table class="table table-hover">
                            @foreach($basic as $var)
                                <tr>
                                    <td>{{ $var->id     }}</td>
                                    <td>{{ $var->name   }}</td>
                                    <td>{{ $var->sex    }}</td>
                                    <td>{{ $var->phone  }}</td>
                                    <td>{{ $var->email  }}</td>
                                    <td><a href="{{ url('basic/'.$var->id.'/edit') }}" role="btn" class="btn btn-primary">編輯</a></td>
                                    <td><a href="{{ url('basic/'.$var->id.'/delete') }}" role="btn" class="btn btn-danger">刪除</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop