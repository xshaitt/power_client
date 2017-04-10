@extends('layouts.master')
@section('title','首页')
@section('body')
    <div class="row">
        <div class="col-md-12">

            <!--Default Accordion-->
            <!--===================================================-->
            <div class="panel-group accordion" id="accordion">
                <div class="panel">

                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" data-toggle="collapse" href="#collapseOne">设备号:1
                                设备名称:张江高科1号机房</a>
                        </h4>
                    </div>

                    <!--Accordion content-->
                    <div class="panel-collapse collapse in" id="collapseOne">
                        <div class="panel-body">
                            <div class="alert alert-primary">
                                <div>
                                    <h4>UPS</h4>
                                    设备ID:123
                                    状态:开启
                                    厂家:富士通
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:2
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:3
                                    状态:电量不足
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:4
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">

                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">设备号:2
                                设备名称:张江高科2号机房</a>
                        </h4>
                    </div>

                    <!--Accordion content-->
                    <div class="panel-collapse collapse" id="collapseTwo">
                        <div class="panel-body">
                            <div class="alert alert-primary">
                                <div>
                                    <h4>UPS</h4>
                                    设备ID:123
                                    状态:开启
                                    厂家:富士通
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:2
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:3
                                    状态:电量不足
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:4
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">

                    <!--Accordion title-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" data-toggle="collapse" href="#collapseThree">设备号:3
                                设备名称:张江高科3号机房</a>
                        </h4>
                    </div>

                    <!--Accordion content-->
                    <div class="panel-collapse collapse" id="collapseThree">
                        <div class="panel-body">
                            <div class="alert alert-primary">
                                <div>
                                    <h4>UPS</h4>
                                    设备ID:123
                                    状态:开启
                                    厂家:富士通
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:2
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:3
                                    状态:电量不足
                                    厂家:富士通
                                    有效期:3年
                                </div>
                                <div>
                                    <h4>蓄电池</h4>
                                    设备ID:4
                                    状态:正常使用
                                    厂家:富士通
                                    有效期:3年
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Default Accordion-->

        </div>
    </div>
@stop