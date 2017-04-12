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
                                                        class="fa fa-clock-o"></i>{{$enterprise->address}}</span>
                                        </td>
                                        <td>{{$enterprise->contacts}}</td>
                                        <td class="text-center">
                                            <div class="label label-table label-success">正常使用</div>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-danger">删除</a>
                                            <buttion class="btn btn-info">编辑</buttion>
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
@stop