@extends('layouts.master')
@section('title','添加企业')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">添加企业</h3>
                </div>
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">Email</label>
                            <div class="col-sm-9">
                                <input type="email" placeholder="Email" id="demo-hor-inputemail" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">创建</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop