<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Rekam Medis</title>

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
            <h1 class="m-0 text-dark">Rekam Medis</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Rekam Medis</h3>
              </div>
                <?php
                $query = mysqli_query($koneksi, "SELECT * from data_mr");
                $data = mysqli_num_rows($query);
             ?>
              <!-- /.card-header -->
              <!-- form start -->
              
			<form method="POST" action="prosestambahmr.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>No. Rekam Medis</label>
                    <input type="text" class="form-control" name="no_rm" placeholder="No. Rekam Medis">
                  </div>
				  
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_pasien"  placeholder="Nama Lengkap">
                  </div>
				  
				  <div class="form-group">
                    <label>Observasi</label>
                    <input type="text" class="form-control" name="observasi"  placeholder="Observasi">
                  </div>
				  
				  <div class="form-group">
                    <label>Diagnosis</label>
                    <input type="text" class="form-control" name="diagnosis" placeholder="Diagnosis">
                  </div>
				  
				  <div class="form-group">
                    <label>Tatalaksana</label>
                    <select class="form-control" name="tatalaksana"  placeholder="Tatalaksana"
						<option value="Terapi Konservatif"> Terapi Konservatif </option>
						<option value="Terapi Konservatif"> Terapi Konservatif </option>
						<option value="Medikamentosa"> Medikamentosa </option>
						<option value="Operasi"> Operasi </option> 
						<option value="Terapi IV Line"> Terapi IV Line </option>
						<option value="Isolasi"> Isolasi </option>
						<option value="Rehabilitasi Medik"> Rehabilitasi Medik </option>
						<option value="Rujuk"> Rujuk </option>
						<option value=".....">.... </option>
								value="<?php echo $data['tatalaksana']; ?>" >
					</select>
                  </div>
				  
				  <div class="form-group">
                    <label>Obat</label>
					<select class="form-control" name="obat" placeholder="Obat">
						<option value="Antihistamine"> Antihistamine </option>
						<option value="Analgesics"> Analgesics </option>
						<option value="Antibiotics"> Antibiotics </option> 
						<option value="Antivirus"> Antivirus </option>
						<option value="Bronchodilators"> Bronchodilators </option>
						<option value="Antacids"> Antacids </option>
						<option value="Antiplatelets"> Antiplatelets </option>
						<option value="Antiseptics"> Antiseptics </option>
						<option value=".....">.... </option>
								value="<?php echo $data['obat']; ?>" >
					</select>
                  </div>
                  
                  <div class="form-group">
                    <label>Data Penunjang</label>
                    <select class="form-control" name="data_penunjang" placeholder="Data Penunjang">
						<option value="CBC"> CBC </option>
						<option value="X-Ray"> X-Ray </option>
						<option value="CT Scan"> CT Scan </option> 
						<option value="Urinalysis"> Urinalysis </option>
						<option value="ECG"> ECG </option>
						<option value="USG"> USG </option>
						<option value="MRI"> MRI </option>
						<option value="Endoscopy"> Endoscopy </option>
						<option value=".....">.... </option>
								value="<?php echo $data['data_penunjang']; ?>" >
					</select>
                  </div>
                  
                 <div class="form-group">
                    <label>Dokter Pemeriksa</label>
                    <input type="text" class="form-control" name="dokter_pemeriksa" placeholder="Dokter Pemeriksa">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="tambah" value="Tambahkan" class="btn btn-success" >
                </div>
              </form>
            </div>
			
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
