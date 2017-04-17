@extends('layouts.master')
@section('title','首页')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group accordion" id="accordion">
                @if(!empty($powers)&&count($powers)>0)
                    @foreach($powers as $power)
                        <div class="panel">

                            <!--Accordion title-->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-parent="#accordion" data-toggle="collapse"
                                       href="#{{$power->id}}">设备号:{{$power->id}}
                                        设备名称:{{$power->name}}</a>
                                </h4>
                            </div>

                            <!--Accordion content-->
                            <div class="panel-collapse collapse {{$loop->first?'in':''}}" id="{{$power->id}}">
                                <div class="panel-body">
                                    <div class="alert alert-primary">
                                        @if(!empty($power->ups)&&count($power->ups)>0)
                                            @foreach($power->ups as $up)
                                                <div>
                                                    <h4>UPS</h4>
                                                    设备ID:{{$up->id}}
                                                    状态:{{$up->status}}
                                                    厂家:{{$up->info}}
                                                </div>
                                                @if(!empty($up->dcs)&&count($up->dcs)>0)
                                                    @foreach($up->dcs as $dc)
                                                        <div>
                                                            <h4>蓄电池</h4>
                                                            设备ID:{{$dc->id}}
                                                            状态:{{$dc->status}}
                                                            厂家:{{$dc->info}}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="alert alert-danger">暂时没有UPS</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">暂时没有您管理的电源管家</div>
                @endif

            </div>
        </div>
    </div>
@stop