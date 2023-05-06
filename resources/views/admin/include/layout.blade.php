<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<title>Dashboard v1 | Gull admin template</title>-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="admin/dist-assets/css/themes/lite-purple.css" rel="stylesheet" />
    <link href="admin/dist-assets/css/plugins/perfect-scrollbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="admin/dist-assets/css/plugins/fontawesome-5.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="admin/dist-assets/css/plugins/metisMenu.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="admin/dist-assets/css/plugins/datatables.min.css" />
    <link rel="stylesheet" href="admin/dist-assets/css/plugins/apexcharts.min.css" />
    <style>
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           
           text-align: center;
        }
        .warning{
            color: red;
            padding-left:200px; 
            padding-bottom:200px; 
        }
        .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #ffffff;
    font-size: 24px;
    color: #d10b4f;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #d10b4f;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}






@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

        </style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
      {{-- sidebar --}}
      <div class="sidebar-panel">
        <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center">
            <h3 class="text-white">Triple Crown Bingo</h3>
            <!--<img class="pl-3" src="assets/images/logog.png" style="width:250px !important; margin:10px;" alt="alt" />-->
            <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
            <!--<div class="sidebar-compact-switch ml-auto"><span></span></div>-->
        </div>
        <!--  user -->
        <br><br><br>
        <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
            <div class="side-nav">
                <div class="main-menu">
                    <ul class="metismenu" id="menu">
                        <li class="Ul_li--hover"><a href="/adminDash">
                            <i class="fa-sharp fa-solid fa-gauge  mr-4 text-white"></i>
                            <span class="item-name text-15 text-white">Dashboard</span></a></li>
                        
                        <li class="Ul_li--hover"><a href="/contacts"><i class="fa-sharp fa-solid fa-address-book  mr-4 text-white"></i><span class="item-name text-15 text-white">Contacts</span></a></li>
                        
                         <!--<li class="Ul_li--hover"><a href="/coupon"><i class="i-Telephone mr-4 text-white"></i><span class="item-name text-15 text-white">Text On Missed Calls </span></a></li>-->
                        
                       
                         <li class="Ul_li--hover"><a href="/what-chat"><i class="nav-icon i-Speach-Bubble-3 mr-4 text-white"></i><span class="item-name text-15 text-white">Conversations</span></a></li>
                         
                          <li class="Ul_li--hover"><a href="#"><i class="i-Feedburner mr-4 text-white"></i><span class="item-name text-15 text-white">Spin The Wheel</span></a></li>
                           <li class="Ul_li--hover"><a href="#"><i class="i-Feedburner mr-4 text-white"></i><span class="item-name text-15 text-white">SMS Contest</span></a></li>
                        
                         <hr style="background-color:#cecece;">
                         
                       
                            
                          
                             <li class="Ul_li--hover"><a href="/locations"><i class="nav-icon i-Add-User mr-4 text-white"></i><span class="item-name text-15 text-white">Locations</span></a></li>
                            
                            
                       
                        <li class="Ul_li--hover"><a href="/location_users"><i class="nav-icon i-Add-User mr-4 text-white"></i><span class="item-name text-15 text-white">Location Users</span></a></li>
                        
                         <li class="Ul_li--hover"><a href="/rewards">
                          <i class="nav-icon i-Suitcase  mr-4 text-white"></i><span class="item-name text-15 text-white">Rewards</span></a></li>
                        
                         <li class="Ul_li--hover"><a href="/template-chat"><i class="i-Ticket mr-4 text-white"></i><span class="item-name text-15 text-white">Coupons</span></a></li>
                        
                        
                        <li class="Ul_li--hover"><a href="/logs"><i class="nav-icon i-Receipt-4 mr-4 text-white"></i><span class="item-name text-15 text-white">Logs</span></a></li>
                        
                        
                        <!--<li class="Ul_li--hover"><a href="/reports"><i class="i-File-Horizontal-Text text-20 mr-2 text-white"></i><span class="item-name text-15 text-white">Reports</span></a></li>-->
                        <!--<li class="Ul_li--hover"><a href="/what-chat"><i class="i-Administrator text-20 mr-2 text-white"></i><span class="item-name text-15 text-white">call logs</span></a></li>-->
                        
                        <!--  <p class="main-menu-title text-white ml-3 font-weight-700 text-13 mt-4 mb-2">UI Elements</p> -->
                        <!--<li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-white"></i><span class="item-name text-15 text-white">Coupon</span></a>-->
                        <!--    <ul class="mm-collapse">-->
                        <!--        <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">View</span></a></li>-->
                               
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Administrator text-20 mr-2 text-white"></i><span class="item-name text-15 text-white">Customers</span></a>-->
                        <!--    <ul class="mm-collapse">-->
                        <!--        <li class="item-name"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">view</span></a></li>-->
                        <!--        <li class="item-name"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Add New</span></a></li>-->
                               
                        <!--    </ul>-->
                        <!--</li>-->
                       
                       
                        <!--<li class="Ul_li--hover"><a class="has-arrow"><i class="i-File-Horizontal-Text text-20 mr-2 text-white"></i><span class="item-name text-15 text-white">Reports</span></a>-->
                        <!--    <ul class="mm-collapse">-->
                        <!--        <li class="item-name"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">view</span></a></li>-->
                        <!--        <li class="item-name"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">add  new</span></a></li>-->
                        <!--        <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <li class="Ul_li--hover"><a href="/admins"><i class="i-Administrator  mr-4 text-white"></i><span class="item-name text-15 text-white">Admin</span></a></li>
                        <li class="Ul_li--hover"><a href="/profile"><i class="i-Administrator  mr-4 text-white"></i><span class="item-name text-15 text-white">Profile</span></a></li>
                        
                        
                        
                         <li class="Ul_li--hover"><a href="/profile"><i class=" i-File-Clipboard-File--Text  mr-4 text-white"></i><span class="item-name text-15 text-white">Report</span></a></li>
                   
                    </ul>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
            </div>
        </div>
        <!--  side-nav-close -->
    </div>
    {{-- customizer --}}
    <!--<div class="customizer open">-->
    <!--    <div class="handle" (click)="isOpen = !isOpen">-->
    <!--        <i class="i-Gear spin"></i>-->
    <!--    </div>-->
    <!--    <div class="customizer-body ps ps--active-y" data-perfect-scrollbar="" data-suppress-scroll-x="true">-->
    <!--        <div class="accordion" id="accordionCustomizer">-->
    <!--            <div class="card">-->
    <!--                <div class="card-header" id="headingOne">-->
    <!--                    <p class="mb-0">-->
    <!--                        Sidebar Layout-->
    <!--                    </p>-->
    <!--                </div>-->
    
                    
    
    <!--    <div class="card-body">-->
    <!--        {{-- <div class="layouts">-->
    
                <!---->
    <!--            <div class="layout-box mb-4 ">-->
    <!--                <a href="https://gull-html-laravel.ui-lib.com/large-compact-sidebar/dashboard/dashboard1">-->
    <!--                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/02_preview.png"><i class="i-Eye"></i>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="layout-box mb-4 ">-->
    <!--                <a href="https://gull-html-laravel.ui-lib.com/large-sidebar/dashboard/dashboard1">-->
    <!--                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/04_preview.png"><i class="i-Eye"></i>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="layout-box mb-4 ">-->
    <!--                <a href="https://gull-html-laravel.ui-lib.com/horizontal-bar/dashboard/dashboard1">-->
    <!--                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/horizontal.png"><i class="i-Eye"></i>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--            <div class="layout-box mb-4 mt-30 active">-->
    <!--                <a href="https://gull-html-laravel.ui-lib.com/vertical/dashboard/dashboard1">-->
    <!--                    <span class="badge badge-danger p-1">New</span>-->
    
    <!--                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/verticallayout.png">-->
    
    <!--                    <i class="i-Eye"></i>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="text-center pt-3">More layouts coming...</div> --}}-->
    <!--    </div>-->
    <!--    <div class="card d-none">-->
    <!--        <div class="card-header" id="headingOne">-->
    <!--            <p class="mb-0">-->
    <!--                Sidebar Colors-->
    <!--            </p>-->
    <!--        </div>-->
    
    <!--        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCustomizer">-->
    <!--            <div class="card-body">-->
    <!--                <div class="colors sidebar-colors">-->
    <!--                    <a class="color gradient-purple-indigo" data-sidebar-class="sidebar-gradient-purple-indigo">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color gradient-black-blue" data-sidebar-class="sidebar-gradient-black-blue">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color gradient-black-gray" data-sidebar-class="sidebar-gradient-black-gray">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color gradient-steel-gray" data-sidebar-class="sidebar-gradient-steel-gray">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color dark-purple active" data-sidebar-class="sidebar-dark-purple">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color slate-gray" data-sidebar-class="sidebar-slate-gray">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color midnight-blue" data-sidebar-class="sidebar-midnight-blue">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color blue" data-sidebar-class="sidebar-blue">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color indigo" data-sidebar-class="sidebar-indigo">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color pink" data-sidebar-class="sidebar-pink">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color red" data-sidebar-class="sidebar-red">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                    <a class="color purple" data-sidebar-class="sidebar-purple">-->
    <!--                        <i class="i-Eye"></i>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    <!--<div class="card">-->
    <!--    <div class="card-header" id="headingTwo">-->
    <!--        <p class="mb-0">-->
    <!--            RTL-->
    <!--        </p>-->
    <!--    </div>-->
    
    <!--    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">-->
    <!--        <div class="card-body">-->
    <!--            <label class="checkbox checkbox-primary">-->
    <!--                <input type="checkbox" id="rtl-checkbox">-->
    <!--                <span>Enable RTL</span>-->
    <!--                <span class="checkmark"></span>-->
    <!--            </label>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    
    <!--<div class="card">-->
    <!--    <div class="card-header" id="headingTwo">-->
    <!--        <p class="mb-0">-->
    <!--            Dark Version-->
    <!--        </p>-->
    <!--    </div>-->
    
    <!--    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">-->
    <!--        <div class="card-body">-->
    <!--            <label class="checkbox checkbox-primary">-->
    <!--                <input type="checkbox" id="dark-checkbox">-->
    <!--                <span>Enable Dark Mode</span>-->
    <!--                <span class="checkmark"></span>-->
    <!--            </label>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    
    <!--</div>-->
    <!--<div class="ps__rail-x" style="left: 0px; bottom: -71px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 71px; height: 563px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 64px; height: 499px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: -71px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 71px; height: 563px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 64px; height: 499px;"></div></div></div>-->
    <!--</div>-->
    
    {{-- customizer --}}

      {{-- sidebar --}}
        <div class="switch-overlay"></div>
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
            {{-- header --}}
            <header class="main-header bg-white d-flex justify-content-between p-2">
                <div class="header-toggle">
                    <div class="menu-toggle mobile-menu-icon">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="header-part-right">
                    <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
                    <!-- Grid menu Dropdown-->
                   <!-- User avatar dropdown -->
                   <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="{{asset('assets/images/faces/1.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
            
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                           
                            <a class="dropdown-item" href="/adminLogout">Sign out</a>
                        </div>
                    </div>
                </div>
                </div>
            </header>

      {{-- header --}}
           

            <!-- ============ Body content start ============= -->
        <div>
            @yield('content')
        </div> 
                <!-- end of main-content -->
            </div>
            <div class="sidebar-overlay open"></div>
            <!-- Footer Start -->
           
                <div class="flex-grow-1"></div>
                            <!-- <div class="app-footer">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                                            <sunt></sunt>
                                        </p>
                                    </div>
                                </div> -->
                                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                                    <!--<a class="btn btn-primary text-white btn-rounded" target="_blank" href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970?ref=ui-lib">Buy-->
                                        <!--Gull HTML</a>-->
                                    <span class="flex-grow-1"></span>
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="logo" src="https://gull-html-laravel.ui-lib.com/assets/images/logo.png" alt=""> --}}
                                        <div>
                                            <p class="m-0">© 2023 </p>
                                            <p class="m-0">All rights reserved</p>
                                        </div>
                                    </div>
                                </div>
            <!-- fotter end -->
        </div>
    </div>

    <script src="admin/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="admin/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="admin/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="admin/dist-assets/js/scripts/tooltip.script.min.js"></script>
    <script src="admin/dist-assets/js/scripts/script.min.js"></script>
    <script src="admin/dist-assets/js/scripts/script_2.min.js"></script>
    <script src="admin/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="admin/dist-assets/js/plugins/feather.min.js"></script>
    <script src="admin/dist-assets/js/plugins/metisMenu.min.js"></script>
    <script src="admin/dist-assets/js/scripts/layout-sidebar-vertical.min.js"></script>
    <script src="admin/dist-assets/js/plugins/echarts.min.js"></script>
    <script src="admin/dist-assets/js/scripts/echart.options.min.js"></script>
    <script src="admin/dist-assets/js/scripts/dashboard.v1.script.min.js"></script>
    <script src="https://gull-html-laravel.ui-lib.com/assets/js/customizer.script.js"></script>
    <script src="admin/dist-assets/js/plugins/datatables.min.js"></script>
    <script src="admin/dist-assets/js/scripts/datatables.script.min.js"></script>
    <script src="admin/dist-assets/js/scripts/card.metrics.script.min.js"></script>
    <script src="admin/dist-assets/js/plugins/apexcharts.min.js"></script>
    <script src="admin/dist-assets/js/plugins/apexcharts.dataseries.min.js"></script>
    <script src="admin/dist-assets/js/scripts/apexChart.script.min.js"></script>
</body>

</html>