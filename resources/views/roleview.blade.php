@extends('layouts.master')
@section('title','角色列表')

@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">角色列表</h3>
        </div>

        <div class="panel-body">
            @if(!empty($roles)&&count($roles)>0)
                <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-sort-ignore="true" class="min-width">ID</th>
                        <th data-sort-initial="true" data-toggle="true">角色名</th>
                        <th data-sort-initial="true" data-toggle="true">职位</th>
                        <th>角色描述</th>
                        <th data-hide="phone, tablet">创建时间</th>
                        <th data-hide="phone, tablet">修改时间</th>
                        <th data-hide="phone, tablet">操作</th>
                    </tr>
                    </thead>
                    <div class="pad-btm form-inline">
                        <div class="row">
                            <div class="col-sm-6 text-xs-center">
                                <div class="form-group">
                                    <a href="roleaddview"><i class="demo-pli-plus"></i> 添加角色</a>
                                </div>
                            </div>
                            <div class="col-sm-6 text-xs-center text-right">
                                <div class="form-group">
                                    <input id="demo-input-search2" type="text" placeholder="搜索..." class="form-control"
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <tbody>

                    @foreach($roles as $role)
                        <tr>
                            <td> {{ $role['id'] }} </td>
                            <td> {{ $role['name'] }} </td>
                            <td> {{ $role['display_name'] }} </td>
                            <td> {{ $role['description'] }} </td>
                            <td> {{ $role['created_at'] }} </td>
                            <td> {{ $role['updated_at'] }} </td>
                            <td><a href="{{ url('roleeditview',$role['id']) }}"> <span
                                            class="label label-table label-success px30"> 编辑 </span> </a> | <a
                                        href="{{ url('roledel',$role['id']) }}"><span
                                            class="label label-table label-dark px30"> 删除 </span></a></td>
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
            @else
                <div class="alert alert-danger">暂时没有数据</div>
            @endif
        </div>

    </div>
@endsection