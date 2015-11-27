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
                            <tr>
                                <td>#</td>
                                <td>姓名</td>
                                <td>生理性別</td>
                                <td>生日</td>
                                <td>手機</td>
                                <td>Email</td>
                                <td>編輯(功能未完成)</td>
                                <td>刪除(功能未完成)</td>
                                <td>繳費</td>
                            </tr>
                            @foreach($basic as $var)
                                <tr>
                                    <td>{{ $var->id         }}</td>
                                    <td>{{ $var->name       }}</td>
                                    <td>{{ $var->sex        }}</td>
                                    <td>{{ $var->birthday   }}</td>
                                    <td>{{ $var->phone      }}</td>
                                    <td>{{ $var->email      }}</td>
                                    <td><a href="{{ url('basic/'.$var->id) }}" role="btn" class="btn btn-primary">檢視</a></td>
                                    <td><a href="{{ url('basic/'.$var->id.'/delete') }}" role="btn" class="btn btn-danger" disabled="disable">刪除</a></td>
                                    <td>
                                        @if($var->fee)
                                            <span class="glyphicon glyphicon-ok-circle fa-lg" style="color: #0c9b6a"></span>
                                        @else
                                            <span class="glyphicon glyphicon-remove-circle fa-lg" style="color: #ff0a16"></span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop