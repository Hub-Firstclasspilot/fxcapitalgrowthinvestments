<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" style="background: #2D353C;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">{{ $user->firstname. " ".$user->lastname }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('profile') }}"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="pl-3 nav-small-cap">USER DASHBOARD</li>
                       <li> <a class="waves-effect waves-dark" href="{{ route('home') }}"><i class="fa fa-th-large"></i>Home</a></li>
                        <li><a href="{{ route('fund-account') }}"><i class="fa fa-fw fa-arrow-up"></i>Fund Account</a></li>
                        <li><a href="{{ route('show-withdrawal-page') }}"><i class="fa fa-fw fa-arrow-down"></i>Request Withdrawal</a></li>
                        <li><a href="{{ route('show-loan-request-page') }}"><i class="fa fa-fw fa-arrow-left"></i>Request Loan</a></li>
                        <li><a href="{{ route('show-trade-history') }}"><i class="fa fa-fw fa-history"></i>Trade History</a></li>
                        <li><a href="{{ route('show-trade-page') }}"><i class="fa fa-fw fa-random"></i>Place Trade</a></li>
                        <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Log Out</a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->

                <div class="px-3 mx-auto">
                    <img src="{{ asset('images/logos/logo.png') }}" alt="logo" width="70" height="70">
                </div>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->