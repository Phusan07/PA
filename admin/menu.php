<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
<li class="nav-item d-none d-sm-inline-block ">       
<a href="index.php" class="nav-link"><i class="fas fa-home"></i></i>Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link"></a>
</li>
</ul>
<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
<!-- Navbar Search -->
 <li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle"  id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2  text-gray-600 small"><?php print_r($_SESSION["Adminname"]);?></span>
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a onClick="return confirm('Are you sure you want to Logout?')" class="dropdown-item" href="checklogout.php" data-target="#logoutModal">Sign Out<i class="fas fa-sign-out-alt"></i></a>
</li>
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
<!-- Brand Logo -->
<a href="index.php" class="brand-link">
<i class="fas fa-suitcase" aria-hidden="true"></i>
<span class="brand-text font-weight-bold " style="text-align: center;">ADMIN SPACE</span>
</a>
<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fas fa-user-edit"></i>
<p> ข้อมูลบุคคล <i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="admin.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ข้อมูลAdmin</p>
</a>
</li>

<li class="nav-item">
<a href="employee.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ข้อมูลพนักงาน</p>
</a>
</li>
</li>
<li class="nav-item">
<a href="customer.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ข้อมูลลูกค้า</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fas fa-hotel"></i>
<p> ข้อมูลทั่วไป<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="room.php" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>ข้อมูลห้องพัก</p>
</a>
</li>
</ul>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="type.php" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>ประเภทห้องพัก</p>
</a>
</li>
</ul>

<ul class="nav nav-treeview">
<li class="nav-item">
<a href="reserved.php" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>ข้อมูลการจอง</p>
</a>
</li>
</ul>


<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fas fa-blog"></i>
<p> ส่วนออกบิล <i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="receipt.php" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>ออกบิล</p>
</a>
</li>
</ul>
</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside> 

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>
<!-- /.control-sidebar -->