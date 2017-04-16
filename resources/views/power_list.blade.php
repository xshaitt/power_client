@extends('layouts.master')
@section('title','电源管家列表')
@section('body')
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
                        @if(count($powers)>0)
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>设备名称</th>
                                    <th>所属企业</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($powers as $power)
                                    <tr>
                                        <td><a href="#" class="btn-link">{{$power->id}}</a></td>
                                        <td>{{$power->name}}</td>
                                        <td>{{$power->enter_id}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-danger delenter" pid="{{$power->id}}">删除
                                            </button>
                                            <button data-target="#demo-default-modal" data-toggle="modal"
                                                    class="btn btn-info btn-edit" pid="{{$power->id}}">编辑
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
                    <input type="hidden" name="pid" class="pid">
                    <form class="form-horizontal form-edit" onsubmit="return false;">
                        {{csrf_field()}}
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputemail">设备名称</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" placeholder="用户名" id="demo-hor-inputemail"
                                           class="form-control">
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
        $('.btn-edit').click(function () {
            var name = $(this).parent().prev().prev().text();
            $('.pid').val($(this).attr('pid'));
            $(".form-edit input[name='name']").val(name);
        });
        $('.btn-send-data').click(function () {
            var pid = $('.pid').val();
            var url = '{{url("/editpower")}}' + '/' + pid;
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