@extends('layouts.master')

@section('title','权限列表')

@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">权限节点列表</h3>
        </div>

        <!-- Foo Table - Add & Remove Rows -->
        <!--===================================================-->
        <div class="panel-body">
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                <tr>
                    <th data-sort-ignore="true" class="min-width">ID</th>
                    <th data-sort-initial="true" data-toggle="true">权限节点名</th>
                    <th data-sort-initial="true" data-toggle="true">节点描述</th>
                    <th data-hide="phone, tablet">权限范围</th>
                    <th data-hide="phone, tablet">修改时间</th>
                    <th data-hide="phone, tablet">修改时间</th>
                    <th data-hide="phone, tablet">操作</th>
                </tr>
                </thead>
                <div class="pad-btm form-inline">
                    <div class="row">
                        <div class="col-sm-6 text-xs-center">
                            <div class="form-group">
                                <a href="peraddview"><i class="demo-pli-plus"></i> 添加权限节点</a>
                            </div>
                        </div>
                        <div class="col-sm-6 text-xs-center text-right">
                            <div class="form-group">
                                <input id="demo-input-search2" type="text" placeholder="搜索..." class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>

                @foreach($pers as $per)
                    <tr>
                        <td> {{ $per['id'] }} </td>
                        <td> {{ $per['name'] }} </td>
                        <td> {{ $per['display_name'] }} </td>
                        <td> {{ $per['description'] }} </td>
                        <td> {{ $per['created_at'] }} </td>
                        <td> {{ $per['updated_at'] }} </td>
                        <td><a href="{{ url('pereditview',$per['id']) }}"> 编辑 </a> | <a href="{{ url('perdel',$per['id']) }}">删除</a> </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="7">
                        <div class="text-right">
                            <ul class="pagination"></ul>
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <!--===================================================-->
        <!-- End Foo Table - Add & Remove Rows -->

    </div>
@endsection
