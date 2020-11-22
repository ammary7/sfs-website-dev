<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>safiullah</p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="../admin-panels/reg.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>INCOME</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="income1.php"><i class="fa fa-circle-o"></i> INCOME LIST <?php echo $admin['camp'];  ?></a></li>
		 <!-- <li><a href="productpicadd.php"><i class="fa fa-circle-o"></i> Addmission List</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
        -->
		</ul>
      </li>
	     <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>EXPENSE</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="expense1.php"><i class="fa fa-circle-o"></i> ADD EXPENSE</a></li>
       
		</ul>
      </li>
	  
	  
	  
	   <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>BALANCE</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        
           <li><a href="balance_inquire1.php"><i class="fa fa-circle-o"></i> BALANCE-INQUIRE</a></li>
		        <li><a href="exp_inquire1.php"><i class="fa fa-circle-o"></i> EXPENSE-INQUIRE</a></li>
		</ul>
      </li>
	  
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>