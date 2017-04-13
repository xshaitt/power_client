@extends('layouts.master')
@section('title','添加用户')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">添加用户</h3>
                </div>
                <form class="form-horizontal enter-form" onsubmit="return false;">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">用户名</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" placeholder="用户名" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">邮箱</label>
                            <div class="col-sm-9">
                                <input name="email" type="text" placeholder="邮箱" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">密码</label>
                            <div class="col-sm-9">
                                <input name="password" type="password" placeholder="密码" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">所属企业</label>
                            <div class="col-sm-9" style="height: 33px;">
                                <select class="form-control" name="enter_id">
                                    <option value="0">管理员</option>
                                    @if(count($enterprises)>0)
                                        @foreach($enterprises as $enterprise)
                                            <option value="{{$enterprise->id}}">{{$enterprise->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success create-btn" type="submit">创建</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $('.create-btn').click(function () {
            $.ajax({
                type: 'post',
                data: $('.enter-form').serialize(),
                success: function (data) {
                    if (data.status == 200) {
                        location.href = data.nextUrl;
                    }
                    alert(data.message);
                }
            });
        })
    </script>
@stop