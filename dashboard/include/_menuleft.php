<aside class="main-sidebar hidden-print">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
      <div class="pull-left info">
        <p><?=$s_login_username?></p>
        <p class="designation"><?=$s_login_email?></p>
      </div>
    </div>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li <?php if($page == 'dashboard'){ echo 'class="active"';} ?>><a href="admin.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li <?php if($page == 'product') {echo 'class="active"';} ?>><a href="product.php"><i class="fa fa-dashboard"></i><span>product</span></span></a></li>
      <li <?php if($page == 'user') {echo 'class="active"';} ?>><a href="user.php"><i class="fa fa-dashboard"></i><span>user</span></span></a></li>
      <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
