 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Admin</a>
       </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?php echo base_url('Dashboard'); ?>" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Branda
               <!-- <span class="right badge badge-danger">New</span> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>
               Pesanan Baru
               <!-- <span class="right badge badge-danger">New</span> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?php echo base_url('Kendaraan'); ?>" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Data Kendaraan
               <!-- <span class="badge badge-info right">6</span> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Data Driver
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Data User
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p>
               Laporan
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Setting
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Edit Profile</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Logout</p>
               </a>
             </li>
           </ul>
         </li>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>