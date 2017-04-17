@extends('layouts.master')
@section('title','用户列表')

@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">角色列表</h3>
        </div>

        <!-- Foo Table - Add & Remove Rows -->
        <!--===================================================-->
        <div class="panel-body">
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                <tr>
                    <th data-sort-ignore="true" class="min-width">ID</th>
                    <th data-sort-initial="true" data-toggle="true">用户名</th>
                    <th data-sort-initial="true" data-toggle="true">邮箱</th>
                    <th data-hide="phone, tablet">创建时间</th>
                    <th data-hide="phone, tablet">修改时间</th>
                    <th data-hide="phone, tablet">操作</th>
                </tr>
                </thead>
                <div class="pad-btm form-inline">
                    <div class="row">
                        <div class="col-sm-6 text-xs-center">
                            <div class="form-group">
                                <a href="{{ asset('useraddview') }}"><i class="demo-pli-plus"></i> 添加用户</a>
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td> {{ $user['id'] }} </td>
                        <td> {{ $user['name'] }} </td>
                        <td> {{ $user['email'] }} </td>
                        <td> {{ $user['created_at'] }} </td>
                        <td> {{ $user['updated_at'] }} </td>
                        <td><a href="{{ url('usereditview',$user['id']) }}"> 修改角色 </a> | <a href="{{ url('userdel', $user['id']) }}">删除</a></td>
                    </tr>
                @endforeach

                </tbody>
                {{--<tfoot>--}}
                {{--<tr>--}}
                {{--<td colspan="7">--}}
                {{--<div class="text-right">--}}
                {{--<ul class="pagination"></ul>--}}
                {{--</div>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--</tfoot>--}}
            </table>
        </div>
        <!--===================================================-->
        <!-- End Foo Table - Add & Remove Rows -->

    </div>
@endsection