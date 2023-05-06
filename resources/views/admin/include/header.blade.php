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