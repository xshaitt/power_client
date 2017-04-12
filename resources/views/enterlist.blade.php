@extends('layouts.master')
@section('title','企业列表')
@section('body')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">企业列表</h3>
                </div>

                <!--Data Table-->
                <!--===================================================-->
                <div class="panel-body">
                    <div class="table-responsive">
                        @if(count($enterprises)>0)
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>企业名称</th>
                                    <th>企业地址</th>
                                    <th>企业联系人</th>
                                    <th>企业号码</th>
                                    <th class="text-center">状态</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enterprises as $enterprise)
                                    <tr>
                                        <td><a href="#" class="btn-link">{{$enterprise->id}}</a></td>
                                        <td>{{$enterprise->name}}</td>
                                        <td><span class="text-muted"><i
                                                        class="fa fa-clock-o"></i>{{$enterprise->address}}</span></td>
                                        <td>{{$enterprise->contacts}}</td>
                                        <td>{{$enterprise->phone}}</td>
                                        <td class="text-center">
                                            <div class="label label-table label-success">正常使用</div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger delenter" eid="{{$enterprise->id}}">删除
                                            </button>
                                            <button data-target="#demo-default-modal" data-toggle="modal"
                                                    class="btn btn-info btn-edit" eid="{{$enterprise->id}}">编辑
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
                    <input type="hidden" name="eid" class="eid">
                    <form class="form-horizontal form-edit">
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
                                <label class="col-sm-3 control-label" for="demo-hor-inputpass">企业地址</label>
                                <div class="col-sm-9">
                                    <input name="address" type="text" placeholder="企业地址" id="demo-hor-inputpass"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputpass">企业联系人</label>
                                <div class="col-sm-9">
                                    <input name="contacts" type="text" placeholder="企业联系人" id="demo-hor-inputpass"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputpass">企业号码</label>
                                <div class="col-sm-9">
                                    <input name="phone" type="text" placeholder="企业号码" id="demo-hor-inputpass"
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
            var url = '{{url("delenter")}}' + '/' + $(this).attr('eid');
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
            var name = $(this).parent().prev().prev().prev().prev().prev().text();
            var address = $(this).parent().prev().prev().prev().prev().text();
            var contacts = $(this).parent().prev().prev().prev().text();
            var phone = $(this).parent().prev().prev().text();
            $('.eid').val($(this).attr('eid'));
            $(".form-edit input[name='name']").val(name);
            $(".form-edit input[name='address']").val(address);
            $(".form-edit input[name='contacts']").val(contacts);
            $(".form-edit input[name='phone']").val(phone);
        });
        $('.btn-send-data').click(function () {
            var eid = $('.eid').val();
            var url = '{{url("editenter")}}' + '/' + eid;
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