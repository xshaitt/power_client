@extends('layouts.master')
@section('title', '短信列表')
@section('body')
    <div class="panel-body">
        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user_id</th>
                    <th class="min-tablet">phone</th>
                    <th class="min-tablet">message</th>
                    <th class="min-tablet">time</th>
                    <th class="min-tablet">操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->user_id}}</td>
                    <td>{{$message->phone}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{date('Y-m-d H:i:s',$message->time)}}</td>
                    <td><a href="javascript:void(0)" id="delMessage" mid="{{$message->id}}">删除</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin:0 auto;width:800px;text-align:center">{{$paginator->render()}}</div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">删除信息</h4>
                </div>
                <form class="form-inline">
                    <div class="modal-body">
                        <div class="form-group" >
                            <h4 id="delResult"></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $('#delMessage').click(function(){
            var url = '{{url("delmessage")}}';
            var that = $(this);
            $.ajax({
                url:url,
                type:'get',
                data:{'id':$(this).attr('mid')},
                dataType: 'json',
                success:function(data){
                    if(data.status == 200) that.parent().parent().hide('slow');
                    $('#delResult').html(data.message);
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        $('#myModal').modal('hide');
                        $('#delResult').html('');
                    },1500)
                }
            })
        })
    </script>
@stop