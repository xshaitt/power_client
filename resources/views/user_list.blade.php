@extends('layouts.master')
@section('title','用户列表')
@section('body')
    <?php $userStatus = ['未激活', '已激活'];?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">用户列表</h3>
                </div>

                <!--Data Table-->
                <!--===================================================-->
                <div class="panel-body">
                    <div class="table-responsive">
                        @if(count($users)>0)
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th>所属企业</th>
                                    <th class="text-center">状态</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="#" class="btn-link">{{$user->id}}</a></td>
                                        <td>{{$user->name}}</td>
                                        <td><span class="text-muted"><i
                                                        class="fa fa-clock-o"></i>{{$user->email}}</span></td>
                                        <td>{{$user->enter_id}}</td>
                                        <td class="text-center">
                                            <div class="label label-table label-success">{{$userStatus[$user->status]}}</div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger delenter" uid="{{$user->id}}">删除
                                            </button>
                                            <button data-target="#demo-default-modal" data-toggle="modal"
                                                    class="btn btn-info btn-edit" uid="{{$user->id}}">编辑
                                            </button>
                                            <button class="btn btn-success active-user" uid="{{$user->id}}">激活
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger">暂时没有企业入驻</div>
                        @endif
                    </div>
                    <hr>
                    <div class="pull-right">
                        {{$paginator->render()}}
                    </div>
                </div>
                <!--===================================================-->
                <!--End Data Table-->

            </div>
        </div>
    </div>
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i>
                    </button>
                    <h4 class="modal-title">修改企业</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <input type="hidden" name="uid" class="uid">
                    <form class="form-horizontal form-edit" onsubmit="return false;">
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
                    </form>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                    <button class="btn btn-primary btn-send-data">确定</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $('.delenter').click(function () {
            var url = '{{url("deluser")}}' + '/' + $(this).attr('uid');
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    if (data.status == '200') {
                        location.href = location.href;
                    } else {
                        alert(data.message);
                    }
                }
            });
        });
        $('.active-user').click(function () {
            var url = '{{url("activeuser")}}' + '/' + $(this).attr('uid');
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    alert(data.message);
                    if(data.status == '200'){
                        location.href = location.href;
                    }
                }
            });
        });
        $('.btn-edit').click(function () {
            var name = $(this).parent().prev().prev().prev().prev().text();
            var email = $(this).parent().prev().prev().prev().text();
            var enter_id = $(this).parent().prev().prev().text();
            $('.uid').val($(this).attr('uid'));
            $(".form-edit input[name='name']").val(name);
            $(".form-edit input[name='email']").val(email);
            $(".form-edit select[name='enter_id']").val(enter_id);
        });
        $('.btn-send-data').click(function () {
            var uid = $('.uid').val();
            var url = '{{url("edituser")}}' + '/' + uid;
            $.ajax({
                type: 'post',
                url: url,
                data: $('.form-edit').serialize(),
                success: function (data) {
                    //TODO 完善ajax的局部刷新
                    location.href = location.href;
                }
            });
        });
    </script>
@stop