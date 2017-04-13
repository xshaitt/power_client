@extends('layouts.master')
@section('title','修改密码')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">修改密码</h3>
                </div>
                <form class="form-horizontal enter-form" onsubmit="return false;">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">旧密码</label>
                            <div class="col-sm-9">
                                <input name="old_password" type="password" placeholder="旧密码" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">新密码</label>
                            <div class="col-sm-9">
                                <input name="password" type="password" placeholder="新密码" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">确认密码</label>
                            <div class="col-sm-9">
                                <input name="ok_password" type="password" placeholder="确认密码" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success change-btn" type="submit">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $('.change-btn').click(function () {
            $.ajax({
                type: 'post',
                data: $('.enter-form').serialize(),
                success:function (data) {
                    if(data.status == 200)
                    {
                        location.href = data.nexTotUrl;
                    }
                    alert(data.message);
                }
            });
        })
    </script>
@stop