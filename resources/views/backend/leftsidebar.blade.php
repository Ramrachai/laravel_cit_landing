<!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ url('/') }}">
                <!-- logo goes here  -->

                <span class="brand-name text-truncate"> {{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-image-outline"></i>
                        <span class="nav-text">Banners</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                                    <span class="nav-text">Banner list</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('banner.create') }}">
                                    <span class="nav-text">Add Banner</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('about.index') }}" 
                    >
                    <i class="mdi mdi-image-outline"></i>
                    <span class="nav-text">About</span> 
                </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
