<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Nifty - Admin Template</title>


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
                        <span class="brand-text">电源管家</span>
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
                                <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Database Repair</p>
                                                    <p class="pull-right">70%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 70%;" class="progress-bar">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Upgrade Progress</p>
                                                    <p class="pull-right">10%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">10% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left">
                                                    <i class="demo-pli-data-settings icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">HDD is full</div>
                                                    <small class="text-muted">50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <i class="demo-pli-file-edit icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Write a news article</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left">
                                                    <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Comment Sorting</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New User Registered</div>
                                                    <small class="text-muted">4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li class="bg-gray">
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <img class="img-circle img-sm" alt="Profile Picture"
                                                         src="img/profile-photos/9.png">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">30 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li class="bg-gray">
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <img class="img-circle img-sm" alt="Profile Picture"
                                                         src="img/profile-photos/3.png">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
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
                            <div class="username hidden-xs">Aaron Chavez</div>
                        </a>


                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                            <!-- Dropdown heading  -->
                            <div class="pad-all bord-btm">
                                <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="sr-only">70%</span>
                                    </div>
                                </div>
                            </div>


                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-male icon-lg icon-fw"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">9</span>
                                        <i class="demo-pli-mail icon-lg icon-fw"></i> Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success pull-right">New</span>
                                        <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="pages-login.html" class="btn btn-primary">
                                    <i class="demo-pli-unlock"></i> Logout
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
                <h1 class="page-header text-overflow">Dashboard</h1>

                <!--Searchbox-->
                <div class="searchbox">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
                            </span>
                    </div>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Order Status</h3>
                            </div>

                            <!--Data Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="pad-btm form-inline">
                                    <div class="row">
                                        <div class="col-sm-6 table-toolbar-left">
                                            <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add
                                            </button>
                                            <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i class="demo-pli-information"></i>
                                                </button>
                                                <button class="btn btn-default"><i class="demo-pli-recycling"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 table-toolbar-right">
                                            <div class="form-group">
                                                <input type="text" autocomplete="off" class="form-control"
                                                       placeholder="Search" id="demo-input-search2">
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i
                                                            class="demo-pli-download-from-cloud"></i></button>
                                                <div class="btn-group">
                                                    <button class="btn btn-default dropdown-toggle"
                                                            data-toggle="dropdown">
                                                        <i class="demo-pli-gear"></i>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tracking Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                            <td>$45.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$245.30</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$38.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                            <td>$77.99</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                            <td>$18.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link">Order #53437</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                            <td>$658.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link">Order #536584</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i
                                                            class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                            <td>$45.58</td>
                                            <td class="text-center">
                                                <div class="label label-table label-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="pull-right">
                                    <ul class="pagination text-nowrap mar-no">
                                        <li class="page-pre disabled">
                                            <a href="#">&lt;</a>
                                        </li>
                                        <li class="page-number active">
                                            <span>1</span>
                                        </li>
                                        <li class="page-number">
                                            <a href="#">2</a>
                                        </li>
                                        <li class="page-number">
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <span>...</span>
                                        </li>
                                        <li class="page-number">
                                            <a href="#">9</a>
                                        </li>
                                        <li class="page-next">
                                            <a href="#">&gt;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Data Table-->

                        </div>
                    </div>
                </div>


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
                                        <p class="mnp-name">年轻而且有才</p>
                                        <span class="mnp-desc">773999579@qq.com</span>
                                    </a>
                                </div>
                            </div>

                            <ul id="mainnav-menu" class="list-group">

                                <!--Category name-->
                                <li class="list-header">Navigation</li>

                                <!--Menu list item-->
                                <li class="active-link">
                                    <a href="index.html">
                                        <i class="demo-psi-home"></i>
                                        <span class="menu-title">
												<strong>Dashboard</strong>
											</span>
                                    </a>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="demo-psi-split-vertical-2"></i>
                                        <span class="menu-title">
												<strong>Layouts</strong>
											</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
                                        <li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
                                        <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a>
                                        </li>
                                        <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing
                                                Navigation</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                                        <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                                        <li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                                        <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="widgets.html">
                                        <i class="demo-psi-gear-2"></i>
                                        <span class="menu-title">
												<strong>Widgets</strong>
												<span class="pull-right badge badge-warning">24</span>
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

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending
                action.</a>
        </div>


        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            14GB of <strong>512GB</strong> Free.
        </div>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2016 Your Company</p>


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


<!-- SETTINGS - DEMO PURPOSE ONLY -->
<!--===================================================-->
<!--===================================================-->
<!-- END SETTINGS -->


</body>
</html>
