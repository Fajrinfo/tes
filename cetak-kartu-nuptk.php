
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Kartu NUPTK - Guru Abata</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Cetak Kartu ini dibuat sebagai alternatif untuk mempermudah pencetakan Kartu NUPTK untuk PTK dan Kartu NISN untuk Siswa" />
	<meta name="keywords" content="Cetak, Cetak Kartu, Cetak NUPTK OPS BUKAL, Cetak Kartu NUPTK v2, Kartu NUPTK, OPS BUKAL, Kartu NISN" />
	<meta name="author" content="https://restuahmad.com" />
	
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
 <!-- CSS Boostrap -->
 <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
 <!-- CSS Bootstrap Datepicker -->
 <link rel="stylesheet" href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100352571-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100352571-4');
</script>
</head>
<body>
<div class="container">		
		<h1></h1>
		<div class="col-sm-10">
		<form class="form-horizontal" id="formnuptk" action="konfirmasi.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-3" for="nuptk">NUPTK :</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nuptk" id="nuptk" placeholder="Masukan NUPTK" required="required" minlength="16" maxlength="16" autocomplete="off" onkeypress="return Angkasaja(event)" >
				</div>
			</div>
			<div class="form-group">
			
				<label class="control-label col-sm-3" for="nama">Nama :</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sesuai Dapodik" required="required" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="tempat_lahir">Tempat Lahir :</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required="required" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="tanggal_lahir">Tanggal Lahir :</label>
				<div class="col-sm-8">
					<input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="jenis_kelamin">Jenis Kelamin :</label>
				<div class="col-sm-8">
					<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
					<option value="" selected disabled>Pilih Jenis Kelamin</option>
					<option value="Laki-Laki" >Laki-Laki</option>
					<option value="Perempuan" >Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="jenis_kelamin">Foto 2x3 :</label>
				<div class="col-sm-8">
					<input type="file" class="form-control" id="foto" name="foto" accept="image/x-png,image/jpeg" placeholder="Format file jpg/png" required >
					(Ukuran file foto disarankan dibawah 200KB, )
				</div>
			</div>
			<button type="submit" class="btn btn-danger" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Proses</button>
		</form>
<br>
<iframe data-aa="1356716" src="//ad.a-ads.com/1356716?size=320x50" scrolling="no" style="width:320px; height:50px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>		
	</div>
	</div>
 <!-- jQuery -->
 <script src="plugins/jquery/jquery-2.2.3.min.js"></script>
 <!-- Javascript Bootstrap -->
 <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
 <!-- Javascript Bootstrap Datepicker -->
 <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $('.datepicker').datepicker({
                    format: "yyyy-mm-dd",
					endDate: '0',
					todayHighlight: true,
					language: 'id',
                    autoclose:true
                });
function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}

 </script>
</body>

</html>
