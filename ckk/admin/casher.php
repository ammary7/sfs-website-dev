
<?php include 'includes/header.php'; ?>
<script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/nvb.php'; ?>
  <?php include 'includes/nm.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
	  /*
	  		if(!isset($_SESSION['user'])){
	         
              header('location: ../index.php');			 
			 			
	        			}
        */
      ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <h3> System User Work </h3>
		  
        </div>
        <!-- ./col -->
      
        <!-- ./col -->
        <!-- ./col -->
      </div>
     
     
	  <div class="row"><!--     Design Your way
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Balance Report</h3>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                     </select>
					<select class="form-control input-sm" id="select_month">
                    </select>
					
					 <input type='button'  class="btn btn-success btn-round" id="fin" value='Check' style="width:100px">	
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:350px"></canvas>
              </div>
            
			
			</div>
          
		  	<div id='myDiv' style="height:350px"><!-- Plotly chart will be drawn inside this DIV </div>
		  
		  </div>
        </div>-->
      </div>
	
	 

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>

<?php include 'includes/scripts.php'; ?>



</body>
</html>
