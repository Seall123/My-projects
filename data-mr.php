<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Rekam Medis</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
		<!-- Header Menu -->
	<?php include "headerhis.php";?>
	
      <!-- Sidebar Menu -->
	  <?php include 'menuhis.php';?>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Rekam Medis</h1>
            
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Data Pasien</i></h3>

                <div class="card-tools">
                 <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
				  <a href="tambah-mr.php" class="btn btn-secondary float-right"> <i class="fas fa-plus"></i> &nbsp; TAMBAH REKAM MEDIS</a>
                  </div>
                  </div>
                </div>
              </div>
           
        </ul>
    </div>
</nav>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <tr>
                      <th>No. RM</th>
                      <th>Nama Pasien</th>
                      <th>Observasi</th>
                      <th>Diagnosis</th>
                      <th>Tatalaksana</th>
                      <th>Obat</th>
                      <th>Data Penunjang</th>
                      <th>Dokter Pemeriksa</th>
                    </tr>
					<?php
					$query = mysqli_query($koneksi, "SELECT * FROM data_mr");
                                 
									
				

					while ($data = mysqli_fetch_array($query)) 
					{

					?>
					<tr>
					
					<td><?php echo $data['no_rm']; ?> </td>

					<td><?php echo $data['nama_pasien']; ?> </td>
					
					<td><?php echo $data['observasi']; ?> </td>
					
					<td><?php echo $data['diagnosis']; ?> </td>
					
					<td><?php echo $data['tatalaksana']; ?> </td>
					
        	        <td><?php echo $data['obat']; ?> </td>
        	        
        	        <td><?php echo $data['data_penunjang']; ?> </td>
	             	
		        	<td><?php echo $data['dokter_pemeriksa']; ?> </td>
				
				    <td> 
					<a href="edit-mr.php?id=<?php echo $data['data-mr']; ?>" class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> EDIT</a> &nbsp; &nbsp; &nbsp; 
					
					</tr>
					<?php
					$no++;
					}
					?>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
		
		
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
