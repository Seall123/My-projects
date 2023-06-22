<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Pasien</title>

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
            <h1 class="m-0 text-dark">Edit Pasien</h1>
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
                <h3 class="card-title">Form Edit Pasien</h3>
              </div>
              
              
			
              <!-- /.card-header -->
              <!-- form start -->
                            <?php
              
              $ambilid = $_GET['id'];
              
              $query = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id_pasien = '$ambilid' ");
              
              $data = mysqli_fetch_array($query);
              ?>
			<form method="POST" action="proseseditpasien.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID pasien</label>
                    <input type="text" class="form-control" name="id_pasien" placeholder="ID pasien"
					value="<?php echo $data['id_pasien']; ?>" readonly>
                  </div>
				  
				  <div class="form-group">
                    <label>No. RM</label>
                    <input type="text" class="form-control" name="no_rm"  placeholder="No. RM"
					value="<?php echo $data['no_rm'] ?>" >
                  </div>
                  
				    <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" class="form-control" name="nama_pasien"  placeholder="nama pasien"
					value="<?php echo $data['nama_pasien'] ?>" >
                  </div>
				  
				  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir"  placeholder="tanggal lahir"
					value="<?php echo $data['tanggal_lahir'] ?>" >
                  </div>
                  
<div class="form-group">
                    <label>Jenis</label>
                   
                    <select class="form-control" name="jenis">
						<option value="BPJS"> BPJS </option>
						<option value="Umum">Umum </option>
						<option value="Asuransi"> Asuransi</option> 
					value="<?php echo $data['jenis']; ?>" >
						
					</select>
                  </div>
                  
                  <div class="form-group">
                    <label>Usia</label>
                    <input type="text" class="form-control" name="usia"  placeholder="usia"
					value="<?php echo $data['usia'] ?>" >
                  </div>
				  
				  <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control" name="no_hp"  placeholder="no hp"
					value="<?php echo $data['no_hp'] ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label>Kontak Darurat</label>
                    <input type="text" class="form-control" name="kontak_darurat"  placeholder="kontak darurat"
					value="<?php echo $data['kontak_darurat'] ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label>Hubungan</label>
                    <input type="text" class="form-control" name="hubungan"  placeholder="Hubungan"
					value="<?php echo $data['hubungan'] ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label>No. HP darurat</label>
                    <input type="text" class="form-control" name="no_hpdar"  placeholder="no. hp darurat"
					value="<?php echo $data['no_hpdar'] ?>" >
                  </div>
                  
				  
				  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="ubah" value="UBAH" 
                  onclick="return confirm('Apakah Anda yakin akan mengubah Data?')"
                  class="btn btn-primary" >
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
