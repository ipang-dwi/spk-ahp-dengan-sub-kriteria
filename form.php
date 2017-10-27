<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BANK - BUKOPIN | Edit Data Kriteria</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="lte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="lte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		
		<!-- jQuery 2.0.2 -->
        <script src="lte/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="lte/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="lte/js/AdminLTE/app.js" type="text/javascript"></script>
		<!-- exclusive js -->
		<script src="lte/js/jquery.bootstrap-growl.js"></script>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                BANK - BUKOPIN
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-windows"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Data Kriteria</span>
                            </a>
                        </li>
						<li>
                            <a href="sub-kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Detail Kriteria</span>
                            </a>
                        </li>
						<li>
                            <a href="alternatif.php">
                                <i class="fa fa-list"></i> <span>Data Calon Debitur</span>
                            </a>
                        </li>
						<li>
                            <a href="analisa.php">
                                <i class="fa fa-book"></i> <span>Hasil Analisa</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Form Kriteria
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
						<li><a href="index.php"> Dashboard</a></li>
                        <li><a href="kriteria.php"> Data Kriteria</a></li>
                        <li class="active">Form</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                  
				   <div class="row">
                        <!--div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Tambah Data Kriteria</h3>                                    
                                </div><!-- /.box-header -->
								 <!-- form start -->
                                <!--form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kriteria</label>
                                            <input type="text" class="form-control" id="kriteria" placeholder="Kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bobot Kriteria</label>
                                            <input type="text" class="form-control" id="bobot" placeholder="Bobot Kriteria">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <!--div class="box-footer">
										<a href="kriteria.php" type="cancel" class="btn btn-danger">Cancel</a>
										<button type="reset" class="btn btn-warning">Reset</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
						  <!--/div-->
						<?php
									include('config.php');
									$result = $mysqli->query("select * from kriteria where id_kriteria = ".$_GET['id']."");
									if(!$result){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									while($row = $result->fetch_assoc()){
						?>
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Update Data Kriteria</h3>                                    
                                </div><!-- /.box-header -->
								 <!-- form start -->
                                <form role="form" method="post" action="updk.php?id=<?php echo $_GET['id'];?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kriteria</label>
                                            <input type="text" class="form-control" name="kriteria" id="kriteria" value="<?php echo $row["kriteria"];?>" placeholder="Kriteria">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bobot Kriteria</label>
                                            <input type="text" class="form-control" name="bobot" id="bobot" value="<?php echo $row["bobot_kriteria"];?>" placeholder="Bobot Kriteria">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
										<a href="kriteria.php" type="cancel" class="btn btn-danger">Cancel</a>
										<button type="reset" class="btn btn-warning">Reset</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
								<?php
									}
								?>
                            </div><!-- /.box -->
						  </div>
					 </div>
				<!-- <script type="text/javascript">

						$(function() {
							$.bootstrapGrowl("This is a test.");
							
							setTimeout(function() {
								$.bootstrapGrowl("This is another test.", { type: 'success' });
							}, 1000);
							
							setTimeout(function() {
								$.bootstrapGrowl("Danger, Danger!", {
									type: 'danger',
									align: 'center',
									width: 'auto',
									allow_dismiss: false
								});
							}, 2000);
							
							setTimeout(function() {
								$.bootstrapGrowl("Danger, Danger!", {
									type: 'info',
									align: 'left',
									stackup_spacing: 30
								});
							}, 3000);
						});
				</script> -->
				
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        
    </body>
</html>