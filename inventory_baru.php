<?php
if( empty( $_SESSION['id_user'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

	if( isset( $_REQUEST['submit'] )){

		$tanggal = $_REQUEST['tanggal'];
		$nama = $_REQUEST['nama'];
		$team = $_REQUEST['team'];
		$pembelian = $_REQUEST['pembelian'];
		$merk = $_REQUEST['merk'];
		$tipe = $_REQUEST['tipe'];
		$kode_inventaris = $_REQUEST['kode_inventaris'];
		$harga_beli = $_REQUEST['harga_beli'];
		$status = $_REQUEST['status'];
		$serial_number = $_REQUEST['serial_number'];
		$processor = $_REQUEST['processor'];
		$ram = $_REQUEST['ram'];
		$hardisk = $_REQUEST['hardisk'];
		$pengecekan = $_REQUEST['pengecekan'];
		$kondisi = $_REQUEST['kondisi'];
		$divisi = $_REQUEST['divisi'];
		$posisi = $_REQUEST['posisi'];
		$payment_budget = $_REQUEST['payment_budget'];
		$pemegang = $_REQUEST['pemegang'];
		$status_audit = $_REQUEST['status_audit'];
		$id_user = $_SESSION['id_user'];

		$sql = mysqli_query($koneksi, "INSERT INTO data (tanggal, nama, team, pembelian, merk, tipe, kode_inventaris, harga_beli, status, serial_number, processor, ram, hardisk, pengecekan, kondisi, divisi, posisi, payment_budget, pemegang, status_audit, id_user) VALUES(NOW(), '$nama', '$team','$pembelian', '$merk', '$tipe', '$kode_inventaris', '$harga_beli', '$status', '$serial_number', '$processor', '$ram', '$hardisk', '$pengecekan', '$kondisi', '$divisi', '$posisi', '$payment_budget', '$pemegang', '$status_audit', '$id_user')");

		if($sql == true){
			header('Location: ./admin.php?hlm=inventory');
			die();
		} else {
			
		}
	} else {
?>
<h2>Tambah Inventaris Baru</h2>
<hr>
<form method="post" action="" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="nama" class="col-sm-2 control-label">Nama Pemegang</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemegang" required>
		</div>
	</div>	<div class="form-group">
		<label for="team" class="col-sm-2 control-label">Team</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="team" name="team" placeholder="Team" required>
		</div>
	</div>
	<div class="form-group">
		<label for="pembelian" class="col-sm-2 control-label">Pembelian</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pembelian" name="pembelian" placeholder="Pembelian" required>
		</div>
	</div>
	<div class="form-group">
		<label for="merk" class="col-sm-2 control-label">Merk</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" required>
		</div>
	</div>
	<div class="form-group">
		<label for="tipe" class="col-sm-2 control-label">Tipe</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="tipe" name="tipe" placeholder="tipe" required>
		</div>
	</div>
	<div class="form-group">
		<label for="kode_inventaris" class="col-sm-2 control-label">Kode Inventaris</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="kode_inventaris" name="kode_inventaris" placeholder="Kode Inventaris" required>
		</div>
	</div>
	<div class="form-group">
		<label for="harga_beli" class="col-sm-2 control-label">Harga Beli</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Harga Beli" required>
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-sm-2 control-label">Status Laptop</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="status" name="status" placeholder="Status Laptop" required>
		</div>
	</div>
	<div class="form-group">
		<label for="serial_number" class="col-sm-2 control-label">Serial Number</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number" required>
		</div>
	</div>
	<div class="form-group">
		<label for="processor" class="col-sm-2 control-label">Processor</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="processor" name="processor" placeholder="Processor" required>
		</div>
	</div>
	<div class="form-group">
		<label for="ram" class="col-sm-2 control-label">RAM</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="ram" name="ram" placeholder="RAM" required>
		</div>
	</div>
	<div class="form-group">
		<label for="hardisk" class="col-sm-2 control-label">Hardisk</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="hardisk" name="hardisk" placeholder="Hardisk" required>
		</div>
	</div>
	<div class="form-group">
		<label for="pengecekan" class="col-sm-2 control-label">Pengecekan Terakhir</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pengecekan" name="pengecekan" placeholder="Pengecekan Terakhir" required>
		</div>
	</div>
	<div class="form-group">
		<label for="kondisi" class="col-sm-2 control-label">Kondisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi" required>
		</div>
	</div>
	<div class="form-group">
		<label for="kondisi" class="col-sm-2 control-label">Divisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi" required>
		</div>
	</div>
	<div class="form-group">
		<label for="posisi" class="col-sm-2 control-label">Job Posisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="posisi" name="posisi" placeholder="Job Posisi" required>
		</div>
	</div>
	<div class="form-group">
		<label for="payment_budget" class="col-sm-2 control-label">Payment Budget</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="payment_budget" name="payment_budget" placeholder="Payment Budget" required>
		</div>
	</div>
	<div class="form-group">
		<label for="pemegang" class="col-sm-2 control-label">Pemegang Sebelumnya</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pemegang" name="pemegang" placeholder="Pemegang Sebelumnya" required>
		</div>
	</div>
	<div class="form-group">
		<label for="status_audit" class="col-sm-2 control-label">Status Audit</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="status_audit" name="status_audit" placeholder="Status Audit" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="submit" class="btn btn-success">Simpan</button>
			<a href="./admin.php?hlm=inventory" class="btn btn-danger">Batal</a>
		</div>
	</div>
</form>
<?php
	}
}
?>
