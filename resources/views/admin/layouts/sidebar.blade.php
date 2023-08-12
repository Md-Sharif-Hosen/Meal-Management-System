        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('dashboard') }}"
                                aria-expanded="false">
                                <i data-feather="home" class="mr-2"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i data-feather="mail" class="mr-2"></i>
                                <span class="hide-menu">User management</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i data-feather="mail" class="mr-2"></i>
                                <span class="hide-menu">Accounts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="inbox-email.html" class="sidebar-link">
                                        <i data-feather="droplet" class="mr-2"></i>
                                        <span class="hide-menu">All Users </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-detail.html" class="sidebar-link">
                                        <i data-feather="droplet" class="mr-2"></i>
                                        <span class="hide-menu"> Daily Expance </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
