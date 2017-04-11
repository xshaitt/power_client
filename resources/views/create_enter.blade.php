@extends('layouts.master')
@section('title','添加企业')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">添加企业</h3>
                </div>
                <form class="form-horizontal enter-form" onsubmit="return false;">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">企业名称</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" placeholder="企业名称" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">企业地址</label>
                            <div class="col-sm-9">
                                <input name="address" type="text" placeholder="企业地址" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">企业联系人</label>
                            <div class="col-sm-9">
                                <input name="contacts" type="text" placeholder="企业联系人" id="demo-hor-inputemail"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">联系号码</label>
                            <div class="col-sm-9">
                                <input name="phone" type="text" placeholder="联系号码" id="demo-hor-inputemail"
                                       class="form-control">
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
                success:function (data) {
                    if(data.status == 200)
                    {
                        location.href = data.nextUrl;
                    }
                    alert(data.message);
                }
            });
        })
    </script>
@stop