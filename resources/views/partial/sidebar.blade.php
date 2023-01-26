<nav id="sidebar" class="sidebar close shadow">

    <div class="sidebar-header  shadow-sm">
        <img class="logo" src="{{ url('/img/smartSystems.png') }}" alt="Image" /> {{-- <i class='bx bxl-c-plus-plus'></i> --}}
        {{-- <span class="logo_name">CodingLab</span> --}}
    </div>
    <div class="scrollbox">
        <div class="scrollbox-inner">
            <ul class="nav-links">
                {{-- <li>
                    <a href="manufacturing">
                        <i class='bx bx-grid-alt bx-md'></i>
                        <span class="link_name fs-5">Manufacturing Overview</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name " href="">Production</a></li>
                    </ul>
                </li> --}}
                <li class="mt-0">
                    <div class="iocn-link ">
                        <a href="/production">
                            {{-- <i class='bx bx-collection bx-md d-xxl-inline'></i> --}}
                            <i class='bx bx-collection '></i>
                            <span class="link_name  ">
                                <div class="sidemenu-font">Production</div>
                            </span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                        {{-- <svg class="arrow " xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7L86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                </svg> --}}

                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Production Monitoring</a></li>
                        <li><a href="/production/melting">Melting</a></li>
                        <li><a href="/production/casting">Casting</a></li>
                        <li><a href="#">Machining</a></li>
                        <li><a href="#">Painting</a></li>
                        <li><a href="#">Assembling</a></li>
                        <li><a href="#">Final Inspection</a></li>
                        <li><a href="#">Shipping</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-book-alt'></i>
                            <span class="link_name">
                                <div class="sidemenu-font">Supply Chain</div>
                            </span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Supply Chain</a></li>
                        <li><a href="#">Vendor</a></li>
                        <li><a href="#">Subcont</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="link_name">
                            <div class="sidemenu-font">Stock Control</div>
                        </span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Stock Control</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-line-chart'></i>
                        <span class="link_name">
                            <div class="sidemenu-font">Shipping Overview</div>
                        </span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Shipping Overview</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-plug'></i>
                            <span class="link_name">
                                <div class="sidemenu-font">Shipping Overview</div>
                            </span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu blank">
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-compass'></i>
                        <span class="link_name">
                            <div class="sidemenu-font">Cost Overview</div>
                        </span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Cost Overview/a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-history'></i>
                        <span class="link_name">
                            <div class="sidemenu-font">Budget Analynis</div>
                        </span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Budget Analynis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">
                            <div class="sidemenu-font">Setting</div>
                        </span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Setting</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
