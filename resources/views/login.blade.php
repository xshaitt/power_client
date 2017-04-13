@extends('layouts.before_login')
@section('title','登录')
@section('body')
    <div id="container" class="cls-container">

        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay"></div>


        <!-- LOGIN FORM -->
        <!--===================================================-->
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h3 class="h4 mar-no">登录</h3>
                    </div>
                    <form onsubmit="return false;" class="form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="用户名" autofocus>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="密码">
                        </div>
                        {{--<div class="checkbox pad-btm text-left">--}}
                        {{--<input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">--}}
                        {{--<label for="demo-form-checkbox">记住我</label>--}}
                        {{--</div>--}}

                    </form>
                    <button class="btn btn-primary btn-lg btn-block btn-login">登录</button>
                </div>

                <div class="pad-all">
                    <a href="pages-password-reminder.html" class="btn-link mar-rgt">忘记密码 ?</a>
                </div>
            </div>
        </div>
        <!--===================================================-->


        <!-- DEMO PURPOSE ONLY -->
        <!--===================================================-->
        <div class="demo-bg">
            <div id="demo-bg-list">
                <div class="demo-loading"><i class="psi-repeat-2"></i></div>
                <img class="demo-chg-bg bg-trans active" src="{{asset('img/bg-img/thumbs/bg-trns.jpg')}}"
                     alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-1.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-2.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-3.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-4.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-5.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-6.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-7.jpg')}}" alt="Background Image">
            </div>
        </div>
        <!--===================================================-->
    </div>
@stop
@section('script')
    <script>
        $('.btn-login').click(function () {
            var url = "{{url('/login')}}";
            $.ajax({
                type: 'post',
                data: $('.form-data').serialize(),
                url: url,
                success: function (data) {
                    if (data.status == 200) {
                        location.href = data.nextToUrl;
                    } else {
                        alert(data.message);
                    }
                }
            });
        });
    </script>
@stop