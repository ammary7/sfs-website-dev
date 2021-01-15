
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
      

    <!-- MAIN CONTENT-->
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Admins Work</h2>
                                    
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div> -->
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            




                                            <div class="row">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Select Options</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <div class="form-check-inline form-check">
                                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                        <option value="0">Campus</option>
                                                        <option value="1">Bab ul ilm</option>
                                                        <option value="2">Madina tul ilm</option>
                                                    </select>
                                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                        <option value="0">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">Febuary</option>
                                                    </select>
                                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                        <option value="0">Year</option>
                                                        <option value="1">2020</option>
                                                        <option value="2">2021</option>
                                                    </select>
</div>
                                                </div>
                                            </div>

                                            




                                            </form>
                                    </div>

                                    <!-- </div> -->
                                </div>
                                       

                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Rs. 123443</h2>
                                                <span>Opening Balance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Rs. 128585</h2>
                                                <span>Recovered</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Rs. 128585</h2>
                                                <span>Remaining</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Rs. 000000</h2>
                                                <span>Petty Cash Balance</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>
                        <div class="row">

                        <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Monthly Fee Recovery</h3>
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">

                                    <div class="sfs-logo">
                                        <!-- <img src="images/logo.png" alt="" height="332px"> -->
                                        <img src="images/logo.png" alt="" height="240vh" width="200vw">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <div class="sfs-logo-2">
                                        <!-- <img src="images/logo.png" alt="" height="382px"> -->
                                        <img src="images/logo.png" alt="" height="460vh" width="250vw">
                                    </div>
                                    </div>
                                </div>
                            </div>

                        <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Monthly Fee Recovery</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Recovered</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Remaining</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            
                            
                        </div>

                        <!--  -->

                        
                        


      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>

<?php include 'includes/scripts.php'; ?>


<!-- <script>





</script> -->





</body>
</html>
