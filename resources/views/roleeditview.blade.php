@extends('layouts.master')
@section('title','编辑角色')
@section('body')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">修改角色基本信息</h3>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif

            <!--Block Styled Form -->
                <!--===================================================-->
                <form action="{{ url('roleedit') }}" method="POST">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $role['id'] }}">
                                    <label class="control-label">角色名</label>
                                    <input type="text" name="name" class="form-control" value="{{ $role['name'] }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">职位描述</label>
                                    <input type="text" name="display_name" class="form-control"
                                           value="{{ $role['display_name'] }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">角色描述</label>
                                    <input type="text" name="description" class="form-control"
                                           value="{{ $role['description'] }}">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Block Styled Form -->

                <div class="panel-heading">
                    <h3 class="panel-title">修改其权限</h3>
                </div>
                <form action="{{ url('bindpermissions') }}" method="POST">
                    <div class="panel-body">
                        <div class="row">


                            {{ csrf_field() }}
                            <input type="hidden" name="role_id" value="{{ $role['id'] }}">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="control-label">该角色当前拥有的权限</label>
                                    <div>
                                        @if(isset($haves))
                                            @foreach($haves as $have)
                                                <a href="{{ url('unbindpermissions',array($role['id'],$have['id'])) }}"><span
                                                            class="label label-table label-success"
                                                            style="margin-top: 5px;">{{ $have['name'] }} </span></a>
                                            @endforeach
                                        @else
                                            <div class="alert alert-danger"> 该角色目前没有赋予任何权限</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group myinline">
                                        <div>
                                            <label class="control-label">添加角色</label>
                                        </div>
                                        @if(isset($ps))
                                            @foreach($pers as $r)
                                                @if(!in_array($r['id'],$ps))
                                                    <div class="col-sm-4 ckbox">
                                                        <label >
                                                            <input class="roleid" type="checkbox" name="per_id[]" value="{{ $r['id'] }}" />
                                                            {{ $r['name'] }}
                                                        </label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($pers as $r)
                                                <div class="col-sm-4 ckbox">
                                                    <label >
                                                        <input class="roleid" type="checkbox" name="per_id[]" value="{{ $r['id'] }}" />
                                                        {{ $r['name'] }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        //        jQuery(function(){
        //
        //        });
    </script>
@endsection