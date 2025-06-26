<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Sidebar Brand -->
    <div class="sidebar-brand">
        <a href="./index.html" class="brand-link">
            <img src="{{ url('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>

    <!-- Sidebar Wrapper -->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Manage Users -->
                <li class="nav-item">
                    <a href="{{ url('client/users') }}" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p>Manage Users</p>
                    </a>
                </li>

                <!-- Students Dropdown -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-mortarboard-fill"></i>
                        <p>
                            Students
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('client/students') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Student List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('client/students/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add New Student</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Appointments Dropdown -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-calendar-event-fill"></i>
                        <p>
                            Appointments
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('client/appointments') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Appointment List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('client/appointments/create') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Appointment</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Appointments -->

            </ul>
        </nav>
    </div>
</aside>
