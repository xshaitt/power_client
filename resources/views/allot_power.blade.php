@extends('layouts.master')
@section('title','分配电源管家')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">分配电源管家</h3>
                </div>
                <form class="form-horizontal enter-form" onsubmit="return false;">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">未分配的电源管家</label>
                            <div class="col-sm-9" style="height: 33px;">
                                @if(!empty($powers)&&count($powers)>0)
                                    <select class="form-control" name="pid">
                                        @foreach($powers as $power)
                                            <option value="{{$power->id}}">{{$power->name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <div class="alert alert-danger">暂时没有可以分配的电源管家</div>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">所属企业</label>
                            <div class="col-sm-9" style="height: 33px;">
                                <select class="form-control" name="enter_id">
                                    @if(!empty($enterprises)&&count($enterprises)>0)
                                        @foreach($enterprises as $enterprise)
                                            <option value="{{$enterprise->id}}">{{$enterprise->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success create-btn" type="submit">创建</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $('.create-btn').click(function () {
            $.ajax({
                type: 'post',
                data: $('.enter-form').serialize(),
                success: function (data) {
                    if (data.status == 200) {
                        location.href = data.nextToUrl;
                    }
                    alert(data.message);
                }
            });
        })
    </script>
@stop