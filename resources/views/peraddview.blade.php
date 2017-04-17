@extends('layouts.master')
@section('title','添加权限')
@section('body')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">添加权限节点</h3>
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
                <form action="{{ url('peradd') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">权限节点名</label>
                                    <input type="text" name="name" class="form-control" autofocus >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">节点描述</label>
                                    <input type="text" name="display_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">权限范围</label>
                                    <input type="text" name="description" class="form-control">
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