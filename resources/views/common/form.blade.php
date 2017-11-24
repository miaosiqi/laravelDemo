<form class="form-horizontal" method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="姓名" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="姓名" name="name" value="{{old('name') ? old('name') : $ret->name}}" placeholder="姓名">
        </div>
    </div>

    <div class="form-group">
        <label for="年龄" class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="年龄" name="age" value="{{old('age') ? old('age') : $ret->age}}" placeholder="年龄">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>
        <div class="col-sm-3">
            <div class="checkbox">
                @foreach($stu_ins->hdlSex() as $k => $v)
                    <label>
                        <input type="radio" name="sex" value="{{$k}}"
                        @if($ret->sex == $k)
                            checked
                        @endif
                        > {{$v}}
                    </label>
                @endforeach
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-drupal"></i> 提交</button>
        </div>
    </div>
</form>