@extends('layouts.master')
@section('title','编辑权限')
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
                <form action="{{ url('peredit') }}" method="POST">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $per['id'] }}">
                                    <label class="control-label">节点名</label>
                                    <input type="text" name="name" class="form-control" value="{{ $per['name'] }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">节点描述</label>
                                    <input type="text" name="display_name" class="form-control"
                                           value="{{ $per['display_name'] }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">权限范围描述</label>
                                    <input type="text" name="description" class="form-control"
                                           value="{{ $per['description'] }}">
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


            </div>
        </div>
    </div>
@endsection