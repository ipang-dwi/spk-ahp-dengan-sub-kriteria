<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BANK - BUKOPIN | Data Calon Debitur</title>
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
        <!-- DATA TABES SCRIPT -->
        <script src="lte/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="lte/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
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
                            <a href="index.php">
                                <i class="fa fa-windows"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Data Kriteria</span>
                            </a>
                        </li>
						<li>
                            <a href="sub-kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Detail Kriteria</span>
                            </a>
                        </li>
						<li  class="active">
                            <a href="#">
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
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Calon Debitur
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"> Dashboard</a></li>
                        <li class="active">Data Calon Debitur</li>
                    </ol>
                </section>

				<?php
					include 'config.php';
					$alternatif = $mysqli->query("select * from alternatif");
					if(!$alternatif){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					
				?>
				
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
									<table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kapasitas Membayar Kredit</th>
												<th>Modal Yang Dimiliki</th>
												<th>Jaminan Yang Dimiliki</th>
												<th>Usia Produktivitas</th>
												<th>Pendapatan</th>
                                                <th>Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$i = 1;
												while ($row = $alternatif->fetch_assoc()) {
													echo '<tr>';
													echo '<td>'.$i++.'</td>';
													echo '<td>'.$row["alternatif"].'</td>';
													if($row["k1"]==0) echo '<td>kurang</td>';
													if($row["k1"]==1) echo '<td>cukup</td>';
													if($row["k1"]==2) echo '<td>baik</td>';
													if($row["k2"]==0) echo '<td>kurang</td>';
													if($row["k2"]==1) echo '<td>cukup</td>';
													if($row["k2"]==2) echo '<td>baik</td>';
													if($row["k3"]==0) echo '<td>kurang</td>';
													if($row["k3"]==1) echo '<td>cukup</td>';
													if($row["k3"]==2) echo '<td>baik</td>';
													if($row["k4"]==0) echo '<td>kurang</td>';
													if($row["k4"]==1) echo '<td>cukup</td>';
													if($row["k4"]==2) echo '<td>baik</td>';
													if($row["k5"]==0) echo '<td>kurang</td>';
													if($row["k5"]==1) echo '<td>cukup</td>';
													if($row["k5"]==2) echo '<td>baik</td>';
													echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
													?>
													<a class='btn btn-sm btn-primary' href="form2.php?id=<?php echo $row['id_alternatif'];?>"><i class="fa fa-pencil"></i> Edit</a>
													<a class='btn btn-sm btn-danger' href="del-alternatif.php?id=<?php echo $row['id_alternatif'];?>" onClick="return confirm('Anda yakin akan DELETE data <?php echo $i-1;?> atas nama <?php echo $row['alternatif'];?> ?');"><i class="fa fa-times"></i> Del</a></td>
													<?php
													echo '</tr>';
												}
											?>
                                        </tfoot>
                                    </table>
									<a class='btn btn-primary' href='form-alternatif.php'><i class='fa fa-plus-square'></i> Tambah Data Calon Debitur</a>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>