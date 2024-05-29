<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../data/admin.php" class="brand-link text-decoration-none ">
        <!-- <i class="fas fa-user fa-fw ms-3"></i> -->
        <i class="bi bi-buildings fs-4 ms-3"></i>
        <span class="brand-text font-weight-light ms-1">Dasboard Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/style/images/women.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-decoration-none">Nursalsabilah</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <li class="nav-item ms-1">
                            <a href="./data_hotels.php" class="nav-link d-flex align-items-center">
                                <i class="bi bi-buildings fs-4 mr-2"></i>
                                <p>Data Hotels</p>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="./data_rooms.php" class="nav-link d-flex align-items-center">
                                <i class="bi bi-door-open fs-4 mr-2"></i>
                                <p>Data Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="./data_reservations.php" class="nav-link d-flex align-items-center">
                                <i class="bi bi-calendar2-check fs-4 mr-2"></i>
                                <p>Data Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="./data_guests.php" class="nav-link d-flex align-items-center">
                                <i class="bi bi-person-vcard fs-4 mr-2"></i>
                                <p>Data Guests</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../../index.php    " class="nav-link d-flex align-items-center">
                        <i class="bi bi-box-arrow-left fs-4 mr-2 "></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>