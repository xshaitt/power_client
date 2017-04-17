<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')----电源管家云控制台</title>


    <!--STYLESHEET-->
    <!--=================================================-->


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo.min.css')}}" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{asset('plugins/morris-js/morris.min.css')}}" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="{{asset('plugins/magic-check/css/magic-check.min.css')}}" rel="stylesheet">


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/pace/pace.min.js')}}"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('js/nifty.min.js')}}"></script>


    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{asset('js/demo/nifty-demo.min.js')}}"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="{{asset('plugins/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('plugins/morris-js/raphael-js/raphael.min.js')}}"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>


    <!--Specify page [ SAMPLE ]-->
    {{--    <script src="{{asset('js/demo/dashboard.js')}}"></script>--}}


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="{{url('/')}}" class="navbar-brand">
                    <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">电源管家云控制台</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-view-list"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->


                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="demo-pli-bell"></i>
                            <span class="badge badge-header badge-danger"></span>
                        </a>

                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="pad-all bord-btm">
                                <p class="text-semibold text-main mar-no">您还有3条未读消息.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <i class="demo-pli-data-settings icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">张江高科机房-蓄电池电量不足</div>
                                                    <small class="text-muted">50 分钟之前</small>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>显示所有消息
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->
                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                </span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu">
                            <li>
                                <!--English-->
                                <a href="#" class="active">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </li>
                            <li>
                                <!--France-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/france.png" alt="France">
                                    <span class="lang-id">FR</span>
                                    <span class="lang-name">Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <!--Germany-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
                                    <span class="lang-id">DE</span>
                                    <span class="lang-name">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <!--Italy-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
                                    <span class="lang-id">IT</span>
                                    <span class="lang-name">Italiano</span>
                                </a>
                            </li>
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
                                    <span class="lang-id">ES</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->


                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male ic-user"></i>
                                </span>
                            <div class="username hidden-xs">{{$user->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="{{url('/changepwd')}}">
                                        <i class="demo-pli-computer-secure icon-lg icon-fw"></i>修改密码
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-computer-secure icon-lg icon-fw"></i>锁屏
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="{{url('/logout')}}" class="btn btn-primary">
                                    <i class="demo-pli-unlock"></i> 退出
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">我的电源管家</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                @section('body')
                @show
            </div>
            <!--===================================================-->
            <!--End page content-->


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">

                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">
                                <div class="profile-wrap">
                                    <div class="pad-btm">
                                        <img class="img-circle img-sm img-border" src="img/profile-photos/1.png"
                                             alt="Profile Picture">
                                    </div>
                                    <a href="#profile-nav" class="box-block" data-toggle="collapse"
                                       aria-expanded="false">
                                        <p class="mnp-name">{{$user->name}}</p>
                                        <span class="mnp-desc">{{$user->email}}</span>
                                    </a>
                                </div>
                            </div>

                            <ul id="mainnav-menu" class="list-group">

                                <li {!!Request::path()=='/'?'class="active-link"':''!!}>
                                    <a href="{{url('/')}}">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>欢迎页</strong>
											</span>
                                    </a>
                                </li>

                                <li class="list-header">企业管理</li>
                                <li {!!Request::path()=='enterlist'?'class="active-link"':''!!}>
                                    <a href="{{url('/enterlist')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>企业列表</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='createenter'?'class="active-link"':''!!}>
                                    <a href="{{url('createenter')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>添加企业</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>

                                <li class="list-header">电源管家管理</li>
                                <li {!!Request::path()=='powerlist'?'class="active-link"':''!!}>
                                    <a href="{{url('powerlist')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>电源管家列表</strong>
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets.html">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>电源管家功能</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='allotpower'?'class="active-link"':''!!}>
                                    <a href="{{url('allotpower')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>分配电源管家</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='createpower'?'class="active-link"':''!!}>
                                    <a href="{{url('createpower')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>创建电源管家</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>

                                <li class="list-header">系统设置</li>
                                <li>
                                    <a href="{{asset('systemid')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>云服务IP</strong>
											</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('showmessage')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>短信列表</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>

                                <li class="list-header">权限管理</li>
                                <li {!!Request::path()=='userview'?'class="active-link"':''!!}>
                                    <a href="{{url('userview')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>角色用户</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='roleview'?'class="active-link"':''!!}>
                                    <a href="{{url('roleview')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>角色列表</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='perview'?'class="active-link"':''!!}>
                                    <a href="{{url('perview')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>权限列表</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>

                                <li class="list-header">用户管理</li>
                                <li {!!Request::path()=='userlist'?'class="active-link"':''!!}>
                                    <a href="{{url('userlist')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>用户列表</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='createuser'?'class="active-link"':''!!}>
                                    <a href="{{url('createuser')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>添加用户</strong>
											</span>
                                    </a>
                                </li>
                                <li {!!Request::path()=='changepwd'?'class="active-link"':''!!}>
                                    <a href="{{url('changepwd')}}">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>修改密码</strong>
											</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>


    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <p class="pad-lft">&#0169; 2017 教学部A大队</p>

    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->


</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
@section('script')
@show
</body>
</html>
