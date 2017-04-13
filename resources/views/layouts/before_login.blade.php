<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')----电源管家云控制台</title>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset("css/nifty.min.css")}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset("css/demo/nifty-demo-icons.min.css")}}" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset("css/demo/nifty-demo.min.css")}}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{asset("plugins/magic-check/css/magic-check.min.css")}}" rel="stylesheet">


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset("plugins/pace/pace.min.css")}}" rel="stylesheet">
    <script src="{{asset("plugins/pace/pace.min.js")}}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset("js/jquery-2.2.4.min.js")}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset("js/bootstrap.min.js")}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset("js/nifty.min.js")}}"></script>


    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{{asset("js/demo/bg-images.js")}}"></script>


</head>


<body>

@section('body')
@show
@section('script')
@show

</body>
</html>