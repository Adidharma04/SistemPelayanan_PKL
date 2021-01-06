
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Template/Admin/vendor/fontawesome-free/css/all.min.css';?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Template/Admin/css/sb-admin-2.min.css';?>">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Admin/home');?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pelayanan
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Pelayanan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Komponen Data:</h6>
                    <a class="collapse-item" href="<?php echo base_url('Admin/singkronisasi');?>">Singkronisasi</a>
                </div>
            </div>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url().'assets/Template/Admin/vendor/jquery/jquery.min.js';?>"></script>
<script src="<?php echo base_url().'assets/Template/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url().'assets/Template/Admin/vendor/jquery-easing/jquery.easing.min.js';?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url().'assets/Template/Admin/js/sb-admin-2.min.js';?>"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url().'assets/Template/Admin/vendor/chart.js/Chart.min.js';?>"></script>
<!-- Page level custom scripts -->
<script src="<?php echo base_url().'assets/Template/Admin/js/demo/chart-area-demo.js';?>"></script>
<script src="<?php echo base_url().'assets/Template/Admin/js/demo/chart-pie-demo.js';?>"></script>


