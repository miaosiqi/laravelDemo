@extends('common.layout')

@section('content')
    <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-fw fa-plus"></i> 新增学生</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="姓名" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="姓名" name="name" value="{{old('name')}}" placeholder="姓名">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="年龄" class="col-sm-2 control-label">年龄</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="年龄" name="age" value="{{old('age')}}" placeholder="年龄">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                @foreach($stu_ins->hdlSex() as $k => $v)
                                <label>
                                    <input type="radio" name="sex" value="{{$k}}" checked> {{$v}}
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-3">
                            <button type="submit" class="btn btn-primary">添加</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@stop