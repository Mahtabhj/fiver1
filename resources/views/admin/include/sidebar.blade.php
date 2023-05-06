<div class="sidebar-panel">
    <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="assets/images/logog.png" style="width:250px !important; margin:10px;" alt="alt" />
        <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
        <div class="sidebar-compact-switch ml-auto"><span></span></div>
    </div>
    <!--  user -->
    <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
        <div class="side-nav">
            <div class="main-menu">
                <ul class="metismenu" id="menu">
                    <li class="Ul_li--hover"><a href="/adminDash"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard</span></a></li>
                    
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Library text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Location Users</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="alerts.html"><i class="nav-icon i-Bell1"></i><span class="item-name">view</span></a></li>
      
                            <li class="nav-item"><a href="dropdown.html"><i class="nav-icon i-Bell1"></i><span class="item-name">Add New</span></a></li>
                            
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="/rewards"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Rewards</span></a></li>
                    <li class="Ul_li--hover"><a href="/profile"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Call Stats</span></a></li>
               
                    <!--  <p class="main-menu-title text-muted ml-3 font-weight-700 text-13 mt-4 mb-2">UI Elements</p> -->
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Coupon</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">View</span></a></li>
                           
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Customers</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">view</span></a></li>
                            <li class="item-name"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Add New</span></a></li>
                           
                        </ul>
                    </li>
                   
                    <li class="Ul_li--hover"><a href="datatables.html"><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Logs</span></a></li>
                    <li class="Ul_li--hover"><a class="has-arrow"><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Reports</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">view</span></a></li>
                            <li class="item-name"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">add  new</span></a></li>
                            <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                        </ul>
                    </li>
                   
                    <li class="Ul_li--hover"><a href="/profile"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Profile</span></a></li>
               
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
<div class="customizer open">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body ps ps--active-y" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>

                

    <div class="card-body">
        {{-- <div class="layouts">

            <!---->
            <div class="layout-box mb-4 ">
                <a href="https://gull-html-laravel.ui-lib.com/large-compact-sidebar/dashboard/dashboard1">
                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/02_preview.png"><i class="i-Eye"></i>
                </a>
            </div>
            <div class="layout-box mb-4 ">
                <a href="https://gull-html-laravel.ui-lib.com/large-sidebar/dashboard/dashboard1">
                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/04_preview.png"><i class="i-Eye"></i>
                </a>
            </div>
            <div class="layout-box mb-4 ">
                <a href="https://gull-html-laravel.ui-lib.com/horizontal-bar/dashboard/dashboard1">
                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/horizontal.png"><i class="i-Eye"></i>
                </a>
            </div>
            <div class="layout-box mb-4 mt-30 active">
                <a href="https://gull-html-laravel.ui-lib.com/vertical/dashboard/dashboard1">
                    <span class="badge badge-danger p-1">New</span>

                    <img alt="" src="https://gull-html-laravel.ui-lib.com/assets/images/screenshots/verticallayout.png">

                    <i class="i-Eye"></i>
                </a>
            </div>
        </div>
        <div class="text-center pt-3">More layouts coming...</div> --}}
    </div>
    <div class="card d-none">
        <div class="card-header" id="headingOne">
            <p class="mb-0">
                Sidebar Colors
            </p>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCustomizer">
            <div class="card-body">
                <div class="colors sidebar-colors">
                    <a class="color gradient-purple-indigo" data-sidebar-class="sidebar-gradient-purple-indigo">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-black-blue" data-sidebar-class="sidebar-gradient-black-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-black-gray" data-sidebar-class="sidebar-gradient-black-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color gradient-steel-gray" data-sidebar-class="sidebar-gradient-steel-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color dark-purple active" data-sidebar-class="sidebar-dark-purple">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color slate-gray" data-sidebar-class="sidebar-slate-gray">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color midnight-blue" data-sidebar-class="sidebar-midnight-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color blue" data-sidebar-class="sidebar-blue">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color indigo" data-sidebar-class="sidebar-indigo">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color pink" data-sidebar-class="sidebar-pink">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color red" data-sidebar-class="sidebar-red">
                        <i class="i-Eye"></i>
                    </a>
                    <a class="color purple" data-sidebar-class="sidebar-purple">
                        <i class="i-Eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" id="headingTwo">
        <p class="mb-0">
            RTL
        </p>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
        <div class="card-body">
            <label class="checkbox checkbox-primary">
                <input type="checkbox" id="rtl-checkbox">
                <span>Enable RTL</span>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header" id="headingTwo">
        <p class="mb-0">
            Dark Version
        </p>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
        <div class="card-body">
            <label class="checkbox checkbox-primary">
                <input type="checkbox" id="dark-checkbox">
                <span>Enable Dark Mode</span>
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>


</div>
<div class="ps__rail-x" style="left: 0px; bottom: -71px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 71px; height: 563px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 64px; height: 499px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: -71px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 71px; height: 563px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 64px; height: 499px;"></div></div></div>
</div>

{{-- customizer --}}