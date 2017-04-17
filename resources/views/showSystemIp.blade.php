@extends('layouts.master')
@section('title', '云服务IP')
@section('body')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">告警通知条件</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li><h4>当电源电量低于<span id="showMinPower">{{$power}}</span>%时将发送短信提示&nbsp;&nbsp;<button type="button" class="btn btn-info" id="minPower">修改条件</button></h4></li>
                <li>
                    <h4>ups开启或关闭发送短信提示&nbsp;&nbsp;
                        <button type="button" class="btn btn-info" id="switch">{{$switch}}</button>
                    </h4>

                </li>
            </ul>
        </div>
    </div>

    <div class="modal fade" id="myPower" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">编辑最低告警电量</h4>
                </div>
                <form class="form-inline">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputMinPower">最低告警电量</label>
                            <input type="text" class="form-control" value="{{$power}}" id="inputMinPower" placeholder="" style="width:150px;">%
                            <div></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" id="savePower">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">域名管理</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li><h4>当前域名：&nbsp;&nbsp;<a href="" style="font-size:12px;color:lightskyblue;">修改</a></h4></li>
            </ul>
        </div>
    </div>
@stop

@section('script')
    <script>
        $('#minPower').click(function(){
            $('#myPower').modal('show');
        })
        $('#savePower').click(function(){
            $.ajax({
                url:'{{url('editminpower')}}',
                type:'get',
                data:{'num':$('#inputMinPower').val()},
                success:function(data){
                    if(data.status == 200){
                        $('#inputMinPower').attr('readonly',true).next().html('修改成功').css({
                            'color':'#76B9ED',
                            'font-weight':600
                        });
                        $('#showMinPower').html($('#inputMinPower').val());
                    }else{
                        $('#inputMinPower').attr('readonly',true).next().html('修改失败').css({
                            'color':'red',
                            'font-weight':600
                        });
                    }
                    setTimeout(function(){
                        $('#myPower').modal('hide');
                        $('#inputMinPower').attr('readonly',false).next().html('');
                    },1500);
                }
            })
        })

        $('#switch').click(function(){
            $.ajax({
                url:'{{url('editups')}}',
                type:'get',
                success:function(data){
                    if(data.status == 200){
                        if($('#switch').html() == '点击开启'){
                            $('#switch').html('点击关闭');
                        }else{
                            $('#switch').html('点击开启');
                        }


                    }
                }
            })
        })

    </script>
@stop