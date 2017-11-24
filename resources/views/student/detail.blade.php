@extends('common.layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-fw fa-archive"></i> 学生详情</div>
        <table class="table table-responsive table-bordered table-hover">
            <tr>
                <td>id</td>
                <td>{{$ret->id}}</td>
            </tr>
            <tr>
                <td>姓名</td>
                <td>{{$ret->name}}</td>
            </tr>
            <tr>
                <td>性别</td>
                <td>{{$ret->hdlSex($ret->sex)}}</td>
            </tr>
            <tr>
                <td>年龄</td>
                <td>{{$ret->age}}</td>
            </tr>
            <tr>
                <td>添加日期</td>
                <td>{{date('Y-m-d H:i', $ret->created_at)}}</td>
            </tr>
            <tr>
                <td>最后修改</td>
                <td>{{date('Y-m-d H:i', $ret->updated_at)}}</td>
            </tr>
        </table>
    </div>
@stop