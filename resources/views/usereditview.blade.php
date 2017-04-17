@extends('layouts.master')
@section('title','分配角色')
@section('body')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">修改角色</h3>
                </div>

                <form action="{{ url('bindrole') }}" method="POST">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $user['id'] }}">
                                    <label class="control-label"><h3>{{ $user['name'] }}</h3></label>
                                    <label class="control-label"> 当前拥有以下角色 </label>
                                    <div>
                                        @if(isset($haves))
                                            @foreach($haves as $have)
                                                <a href="{{ url('unbindrole',array($user['id'],$have['id'])) }}"><span
                                                            class="label label-table label-success"
                                                            style="margin-top: 5px;">{{ $have['name'] }} </span></a>
                                            @endforeach
                                        @else
                                            <div class="alert alert-danger"> 该用户目前没有任何角色</div>
                                        @endif
                                        {{--<span class="label label-table label-danger">删除时的状态</span>--}}
                                        {{--<button class="demo-delete-row btn btn-danger btn-xs"><i class="demo-pli-cross"></i></button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    @if(isset($ridarr))
                                        @foreach($roles as $role)
                                            @if(!in_array($role['id'],$ridarr))
                                                <div class="col-sm-3">
                                                    <label>
                                                        <input type="checkbox" name="role[]" value="{{ $role['id'] }}">
                                                        {{ $role['name'] }}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach($roles as $role)
                                            <div class="col-sm-3">
                                                <label>
                                                    <input type="checkbox" name="role[]" value="{{ $role['id'] }}">
                                                    {{ $role['name'] }}
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>

                        </div>
                        {{--<div class="row">--}}
                        {{--<div class="col-sm-12">--}}
                        {{--<div class="form-group">--}}
                        {{--<label class="control-label">添加角色</label>--}}
                        {{--<select name="role" id="" class="form-control">--}}
                        {{--@foreach($roles as $role)--}}
                        {{--<option value="{{ $role['id'] }}"> {{ $role['name'] }} </option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--</div>--}}
                    </div>

                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection