<aside id="page-aside" class=" page-aside aside-fixed">
<div class="sidenav darkNav">
    <a href="index.html" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
        <i class="icon-Paper-Plane inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center"></i>
        <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>ASSAN</span> UI</span>
    </a>
    <div class="flex">
        <div class="aside-content slim-scroll">
            <ul class="metisMenu" id="metisMenu">
                <li class="nav-title">Main<span class="nav-thumbnail">MN</span></li>
                <li class="active"> <i class="icon-Gaugage nav-thumbnail"></i>
                    <a href="/"><span class="nav-text">Dashboard</span></a>
                    
                </li><!--Menu-item-->
                
                @hasrole('Admin')
                <li> <i class="icon-Gaugage nav-thumbnail"></i>
                    <a class="has-arrow" href="javascript:void(0)">
                        <span class="nav-text"> Admin Stuff </span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="active">
                            <a href="/users">Users</a>
                        </li>
                        <li><a href="/roles">Roles/Permissions</a></li>
                        <li><a href="/log-viewer">Log Viewer</a></li>
                    </ul>
                </li><!-- admin stuff -->
                @endhasrole
                
                
            </ul>
        </div><!-- aside content end-->
    </div><!-- aside hidden scroll end-->
    <div class="aside-footer p-3 pl-25">
        <div class="">
            App Version - 1.0
        </div>
    </div><!-- aside footer end-->
</div><!-- sidenav end-->
</aside><!-- page-aside end-->