<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BANK - BUKOPIN | Hasil Analisa</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <!-- bootstrap 3.0.2 -->
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="lte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="lte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Morris charts -->
        <link href="lte/css/morris/morris.css" rel="stylesheet" type="text/css" />
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
		<!-- FLOT CHARTS -->
        <script src="lte/js/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="lte/js/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="lte/js/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="lte/js/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>

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
						<li>
                            <a href="alternatif.php">
                                <i class="fa fa-list"></i> <span>Data Calon Debitur</span>
                            </a>
                        </li>
						<li  class="active">
                            <a href="#">
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
                        Hasil Analisa
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"> Dashboard</a></li>
                        <li class="active">Hasil Analisa</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Bar chart -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!--i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Bar Chart</h3-->
                                </div>
                                <div class="box-body">
                                    <div id="bar-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body-->
                            </div><!-- /.box -->
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
									<?php
										$isi = '<h1 align="center">Hasil Analisa Kredit Modal Kerja<br /> Pada Bank Bukopin Surabaya</h1><br />';
										include 'config.php';
										include 'tes.php';

											$arl = 5;	//array lenght, 5 means ordo for 5x5 matrix
											$alternatif = 0;
											$kriteria = get_kri_name();
											$alt_name = get_alt_name();
											$kri = get_kriteria();
											$subkri = get_subkriteria();
											$alt = get_alternatif();
											$mb = create_mx($kri);
											end($alt); $arl2 = key($alt)+1; //new
											for($i=0;$i<$arl;$i++){
												@$mbs[$i] = create_mx($subkri[$i]);
											}
											echo "<center>";
											//print_ar($mb);
											$k = print_art($mb,$arl,0);   //kriteria
											$sk = array(
												0 => print_art($mbs[0],$arl,2),   //sub_kriteria
												1 => print_art($mbs[1],$arl,2),   //sub_kriteria
												2 => print_art($mbs[2],$arl,2),   //sub_kriteria
												3 => print_art($mbs[3],$arl,2),   //sub_kriteria
												4 => print_art($mbs[4],$arl,2),   //sub_kriteria
											);
											
											echo "<b><i class='text-light-blue'>Hasil Akhir</b></i><table id='example1' class='table table-bordered table-striped'><tr>";
											echo "<td>Nama</td>";
											$isi = $isi.'<b><i>Hasil Akhir</b></i><br /><table border="1"><tr><td align="center">Nama</td>';//
											for($i=0; $i<$arl; $i++){ //new
												echo "<td>".$kriteria[$i]."</td>";
												$isi = $isi.'<td align="center">'.$kriteria[$i]."</td>";//
											}
											echo "<td>Total</td></tr>";
											$isi = $isi.'<td align="center">Total</td></tr>';//
											for($i=0; $i<$arl2; $i++){
												$jml = 0;
												echo "<tr><td>".$alt_name[$i]."</td>";
												$isi = $isi.'<tr><td align="center">'.$alt_name[$i].'</td>';//
												for($j=0; $j<$arl; $j++){
													@$jml = $jml + round((($sk[$j][$alt[$i][$j]+3])*$k[$j]),3);
													echo "<td>".@round((($sk[$j][$alt[$i][$j]+3])*$k[$j]),3)."</td>";
													$isi = $isi.'<td align="center">'.@round((($sk[$j][$alt[$i][$j]+3])*$k[$j]),3)."</td>";//
												}
												echo "<td>".$jml."</td></tr>";
												$isi = $isi.'<td align="center">'.$jml."</td></tr>";//
												$hsl[$i] = $jml; 
											}
											echo "</table></br>";
											$isi = $isi."</table></br>";
											uasort($hsl,'cmp');
											$a = 0; $b = 0;
											for($i=0;$i<$arl2;$i++){ //new for 8 lines below
																	if($i==0){
																		$a = $alt_name[array_search((end($hsl)), $hsl)];
																		$b = current($hsl); 
																		$isi = $isi."<br /><br /><i><b>Kesimpulan :</b></i>
																		<br />Dari tabel tersebut dapat disimpulkan bahwa <b>".$a."</b> mempunyai hasil paling tinggi, yaitu <b>".$b."</b>. ";
																		echo "</br></center><div class='callout callout-info'><h4>Kesimpulan :</h4>
																		<i>Dari tabel tersebut dapat disimpulkan bahwa <b>".$a."</b> mempunyai hasil paling tinggi, yaitu <b>".$b."</b>. ";
																	}
																	elseif($i==$arl2-1){
																		$a = $alt_name[array_search((prev($hsl)), $hsl)];
																		$b = current($hsl); 
																		$isi = $isi."<br />Dan terakhir <b>".$a."</b>, dengan nilai <b>".$b."</b>.</i></div>";
																		echo "</br>Dan terakhir <b>".$a."</b> dengan nilai <b>".$b."</b>.</div>";
																	}
																	else{
																		$a = $alt_name[array_search((prev($hsl)), $hsl)];
																		$b = current($hsl); 
																		$isi = $isi."<br />Lalu diikuti dengan <b>".$a."</b>, dengan nilai <b>".$b."</b>. ";
																		echo "</br>Lalu diikuti dengan <b>".$a."</b> dengan nilai <b>".$b."</b>. ";
																	}
											}
											$isi = $isi.'<hr />generated on : '.date('d-m-Y h.i.s A ').' by Godo.';
											cetakpdf($isi);		//bwt cetak pdf
											
										function cmp($a, $b) {		//function for last sorting
											if ($a == $b) {
												return 0;
											}
											return ($a < $b) ? -1 : 1;
										}
												 
										function print_art(array $x,$arl,$type){	
											$kriteria = get_kri_name(); 
											global $alternatif;
											end($x); $arl = key($x)+1; //new
											 
											for($i=0; $i<$arl; $i++){	//sum of each column
												for($j=0; $j<$arl; $j++){
														@$jml[$i] = $jml[$i] + $x[$j][$i];
												}
												 
											}
											
											for($i=0; $i<$arl; $i++){   //for simplify calculation process
													for($j=0; $j<$arl; $j++){
														$mnk[$i][$j]=round(($x[$i][$j]/$jml[$j]),3);
														@$jmlnk[$i] = $jmlnk[$i] + $mnk[$i][$j]; 	//sum of each row
													}
													$prio[$i] = round(($jmlnk[$i]/$arl),3);
											}
											$mprio = max($prio);
											for($i=0; $i<$arl; $i++){
													if($type==2){
														$prio[$i+$arl] = round(($prio[$i]/($mprio)),3);   //$prio[$i+$arl] = prioritas sub kriteria	 
													}
											}
											
											for($i=0; $i<$arl; $i++){
													for($j=0; $j<$arl; $j++){
														$mp[$i][$j]=round(($x[$i][$j]*$prio[$i]),3);
														@$jmlp[$i] = $jmlp[$i] + $mp[$i][$j]; 	//sum of each row	 
													}
											}
											 
											for($i=0; $i<$arl; $i++){
													@$hasil[$i] = round(($jmlp[$i] + $prio[$i]),3);
													@$hsl = $hsl + $hasil[$i]; 		 
											}					 
											$nmax = round(($hsl/$arl),3);
											$ci = round((($nmax-$arl)/($arl-1)),3);
											$ri = round(((1.98*($arl-2))/$arl),3);
											@$cr = round(($ci/$ri),3); //new
											 
											$alternatif++;
											return $prio;
										}

										function create_mx(array $input){
											end($input); $l = key($input);
											for($i=0;$i<=$l;$i++){
												for($j=0;$j<=$l;$j++){
													@$hsl[$i][$j] = round(($input[$j]/$input[$i]),3);
												}
											}
											//print_ar($hsl);
											return($hsl);
										}

										function get_kriteria(){
											include 'config.php';
											$kriteria = $mysqli->query("select * from kriteria");
											if(!$kriteria){
												echo $mysqli->connect_errno." - ".$mysqli->connect_error;
												exit();
											}
											$i=0;
											while ($row = $kriteria->fetch_assoc()) {
												@$kri[$i] = $row["bobot_kriteria"];
												$i++;
											}
											//print_ar($kri);
											return $kri;
										}
										
										function get_subkriteria(){
											include 'config.php';
											$kriteria = $mysqli->query("select * from kriteria");
											if(!$kriteria){
												echo $mysqli->connect_errno." - ".$mysqli->connect_error;
												exit();
											}
											$i=0;
											while ($row = $kriteria->fetch_assoc()) {
												@$kri[$i][0] = $row["kurang"];
												@$kri[$i][1] = $row["cukup"];
												@$kri[$i][2] = $row["baik"];
												$i++;
											}
											//print_ar($kri);
											return $kri;
										}

										function get_kri_name(){
											include 'config.php';
											$kriteria = $mysqli->query("select * from kriteria");
											if(!$kriteria){
												echo $mysqli->connect_errno." - ".$mysqli->connect_error;
												exit();
											}
											$i=0;
											while ($row = $kriteria->fetch_assoc()) {
												@$kri[$i] = $row["kriteria"];
												$i++;
											}
											//print_ar($kri);
											return $kri;
										}

										function get_alternatif(){
											include 'config.php';
											$alternatif = $mysqli->query("select * from alternatif");
											if(!$alternatif){
												echo $mysqli->connect_errno." - ".$mysqli->connect_error;
												exit();
											}
											$i=0;
											while ($row = $alternatif->fetch_assoc()) {
												@$alt[$i][0] = $row["k1"];
												@$alt[$i][1] = $row["k2"];
												@$alt[$i][2] = $row["k3"];
												@$alt[$i][3] = $row["k4"];
												@$alt[$i][4] = $row["k5"];
												//@$alt[3][$i] = $row["k4"];
												$i++;
											}
											//print_ar($alt);
											return $alt;
										}

										function get_alt_name(){
											include 'config.php';
											$alternatif = $mysqli->query("select * from alternatif");
											if(!$alternatif){
												echo $mysqli->connect_errno." - ".$mysqli->connect_error;
												exit();
											}
											$i=0;
											while ($row = $alternatif->fetch_assoc()) {
												@$alt[$i] = $row["alternatif"];
												$i++;
											}
											//print_ar($alt);
											return $alt;
										}

										function print_ar(array $x){	//just for print array
											echo "<pre>";
											print_r($x);
											echo "</pre></br>";
										}

										/*
										// DSS with ahp method implementation using N as ordo for matrix creation, web based coding with PHP..
										// coded with love, by ip@ng http://www.firstplato.com    email: admin@firstplato.com
										*/

									?>
									
									<!-- Page script -->
									<script type="text/javascript">

										$(function() {
											/*
											 * BAR CHART
											 * ---------                 
											 */

											var bar_data = {
												
												data: [<?php for($i=0; $i<$arl2; $i++){ echo '["'.$alt_name[$i].'", '.$hsl[$i].'],'; }?>],
												color: "#3c8dbc"
											};
											$.plot("#bar-chart", [bar_data], {
												grid: {
													borderWidth: 1,
													borderColor: "#f3f3f3",
													tickColor: "#f3f3f3"
												},
												series: {
													bars: {
														show: true,
														barWidth: 0.5,
														align: "center"
													}
												},
												xaxis: {
													mode: "categories",
													tickLength: 0
												}
											});
											/* END BAR CHART */
										 });
										 /*
										 * Custom Label formatter
										 * ----------------------
										 */
										function labelFormatter(label, series) {
											return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
													+ label
													+ "<br/>"
													+ Math.round(series.percent) + "%</div>";
										}
									</script><!--end chart script-->
									
									<a href='ahpn.php' target=_blank>Klik untuk melihat detail proses.</a>
									<!-- <a class='btn btn-primary' href='#'><i class='fa fa-plus-square'></i> Tambah Data Kriteria</a> -->
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
                $("#example2").dataTable();
                $('#example1').dataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": false,
                    "bAutoWidth": false
                });
            });
        </script>
    </body>
									
</html>