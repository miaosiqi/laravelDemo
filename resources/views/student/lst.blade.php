@extends('common.layout')

@section('title')
    首页
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-fw fa-users"></i> 学生列表</div>
        <table class="table table-responsive table-hover">
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>操作</th>
            </tr>
            @foreach($ret as $k => $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>{{$v->hdlSex($v->sex)}}</td>
                <td>{{$v->age}}</td>
                <td>
                    <a href="{{url('Student/detail', ['id' => $v->id])}}" class="btn btn-default btn-xs">详情</a>
                    <a href="{{url('Student/update', ['id' => $v->id])}}" class="btn btn-default btn-xs">修改</a>
                    <a href="{{url('Student/delete', ['id' => $v->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('is del or not???')">删除</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
    <div class="pull-right">
        {{$ret->links()}}
    </div>
@stop