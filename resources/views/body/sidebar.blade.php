

<div class="left-side-menu" style="background-color: #97732C;">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <!-- <li>
                    <a href="{{ route('all.event') }}" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Event </span>
                    </a>
                </li> -->

                <li class="menu-title" style="color:black;font-size:14px;"><b>Navigation</b></li>
                
                <li>
                    <a href="{{ route('fullcalender') }}" style="color:white;">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Event </span>
                    </a>
                </li>

                <li>
                    
                    <a href="{{ route('dashboard') }}" style="color:white;">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

              
                
                <li class="menu-title mt-2" style="color:black;font-size:14px;"><b>Apps</b></li>

                <li>
                    <a href="#sidebarEmployee" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Employee Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmployee">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}" style="color:black;">All employee</a>
                            </li>
                            <li>
                                <a href="{{ route('add.employee') }}" style="color:black;">Add employee</a>
                            </li>
                        </ul>
                    </div>
                </li>

                

                <!-- <li>
                    <a href="#sidebarSalary" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Employee salary </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSalary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.salary') }}" style="color:black;">All salary</a>
                            </li>
                            <li>
                                <a href="{{ route('add.salary') }}" style="color:black;">Add salary</a>
                            </li>
                            <li>
                                <a href="{{ route('pay.salary') }}" style="color:black;">Pay salary</a>
                            </li>
                            <li>
                                <a href="{{ route('month.salary') }}" style="color:black;">Last Month Salary</a>
                            </li>
                        </ul>
                    </div>
                </li> -->



                <!-- <li>
                    <a href="#attendence" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Employee attend </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="attendence">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Employee attend</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <li>
                    <a href="#sidebarCustomer" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Customer Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCustomer">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}" style="color:black;">All customer</a>
                            </li>
                            <li>
                                <a href="{{ route('add.customer') }}" style="color:black;">Add customer</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSupplier" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>supplier Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSupplier">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}" style="color:black;">All supplier</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}" style="color:black;">Add supplier</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarcategory" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>category Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarcategory">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}" style="color:black;">All category</a>
                            </li>
                            <li>
                                <a href="{{ route('add.category') }}" style="color:black;">Add category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarproduct" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Formation Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarproduct">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}" style="color:black;">All formations</a>
                            </li>
                            <li>
                                <a href="{{ route('add.product') }}" style="color:black;">Add formation</a>
                            </li>
                            <!-- <li>
                                <a href="{{ route('import.product') }}" style="color:black;">Import Product </a>
                            </li> -->
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarexpense" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>expense Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarexpense">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}" style="color:black;">Add expense</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}" style="color:black;">Today expense </a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}" style="color:black;">Monthly expense</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}" style="color:black;">Yearly expense</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarroles" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Roles and permission </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarroles">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.permission') }}" style="color:black;">All permissions</a>
                            </li>

                            <li>
                                <a href="{{ route('all.roles') }}" style="color:black;">All roles</a>
                            </li>

                            <!-- <li>
                                <a href="{{ route('add.roles.permission') }}">Roles in permission</a>
                            </li>

                            <li>
                                <a href="{{ route('all.roles.permission') }}">All Roles in permission</a>
                            </li> -->
                            
                        </ul>
                    </div>
                </li>

                
                <li>
                    <a href="#admin" data-bs-toggle="collapse" style="color:white;">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Setting admin </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="admin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admin') }}" style="color:black;">All admin</a>
                            </li>

                            <li>
                                <a href="{{ route('add.admin') }}" style="color:black;">Add admin</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- <li>
                    <a href="#backup" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Database Backup  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="backup">
                <ul class="nav-second-level">
                <li>
                    <a href="{{ route('database.backup') }}">Database Backup </a>
                </li> 

                </ul>
                </div>
                </li> -->


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>