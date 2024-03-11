<?php
if( empty( $_SESSION['id_user'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

	if( isset( $_REQUEST['submit'] )){

		$id_inventory = $_REQUEST['id_inventory'];
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

		$sql = mysqli_query($koneksi, "UPDATE data SET tanggal=NOW(), nama='$nama', team='$team', pembelian='$pembelian', merk='$merk', tipe='$tipe', kode_inventaris='$kode_inventaris', harga_beli='$harga_beli', status='$status', serial_number='$serial_number', processor='$processor', ram='$ram', hardisk='$hardisk', pengecekan='$pengecekan', kondisi='$kondisi', divisi='$divisi', posisi='$posisi', payment_budget='$payment_budget', pemegang='$pemegang', status_audit='$status_audit', id_user='$id_user' WHERE id_inventory='$id_inventory'");

		if($sql == true){
			header('Location: ./admin.php?hlm=inventory');
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
	} else {

		$id_inventory = $_REQUEST['id_inventory'];

		$sql = mysqli_query($koneksi, "SELECT * FROM data WHERE id_inventory='$id_inventory'");
		while($row = mysqli_fetch_array($sql)){

?>

<h2>Edit Data Inventory</h2>
<hr>
<form method="post" action="" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="nama" class="col-sm-2 control-label">Nama</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="petugas" value="<?php echo $row['nama']; ?>"name="nama" placeholder="Nama">
		</div>
	</div>
	<div class="form-group">
		<label for="team" class="col-sm-2 control-label">Team</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="team" value="<?php echo $row['team']; ?>"name="team" placeholder="Team" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="pembelian" class="col-sm-2 control-label">Pembelian</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pembelian" value="<?php echo $row['pembelian']; ?>"name="pembelian" placeholder="Pembelian" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="merk" class="col-sm-2 control-label">Merk</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="merk" value="<?php echo $row['merk']; ?>"name="merk" placeholder="Merk" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="tipe" class="col-sm-2 control-label">Tipe</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="tipe" value="<?php echo $row['tipe']; ?>"name="tipe" placeholder="Tipe" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="kode_inventaris" class="col-sm-2 control-label">Kode Inventaris</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="kode_inventaris" value="<?php echo $row['kode_inventaris']; ?>"name="team" placeholder="Kode Inventaris" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="harga_beli" class="col-sm-2 control-label">Harga Beli</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="harga_beli" value="<?php echo $row['harga_beli']; ?>"name="harga_beli" placeholder="Harga Beli" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-sm-2 control-label">Status</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="status" value="<?php echo $row['status']; ?>"name="status" placeholder="Status" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="serial_number" class="col-sm-2 control-label">Serial Number</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="serial_number" value="<?php echo $row['serial_number']; ?>"name="serial_number" placeholder="Serial Number" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="processor" class="col-sm-2 control-label">Processor</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="processor" value="<?php echo $row['processor']; ?>"name="processor" placeholder="Processor" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="ram" class="col-sm-2 control-label">RAM</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="ram" value="<?php echo $row['ram']; ?>"name="ram" placeholder="RAM" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="hardisk" class="col-sm-2 control-label">Hardisk</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="hardisk" value="<?php echo $row['hardisk']; ?>"name="hardisk" placeholder="Hardisk" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="pengecekan" class="col-sm-2 control-label">Pengecekan Terakhir</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pengecekan" value="<?php echo $row['pengecekan']; ?>"name="pengecekan" placeholder="Pengecekan Terakhir" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="kondisi" class="col-sm-2 control-label">Kondisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="kondisi" value="<?php echo $row['kondisi']; ?>"name="kondisi" placeholder="Kondisi Laptop" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="divisi" class="col-sm-2 control-label">Divisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="divisi" value="<?php echo $row['divisi']; ?>"name="divisi" placeholder="Divisi">
		</div>
	</div>
	<div class="form-group">
		<label for="posisi" class="col-sm-2 control-label">Posisi</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="posisi" value="<?php echo $row['posisi']; ?>"name="posisi" placeholder="Posisi">
		</div>
	</div>
	<div class="form-group">
		<label for="payment_budget" class="col-sm-2 control-label">Payment Budget</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="payment_budget" value="<?php echo $row['payment_budget']; ?>"name="payment_budget" placeholder="Payment Budget" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="pemegang" class="col-sm-2 control-label">Pemegang Terakhir</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="pemegang" value="<?php echo $row['pemegang']; ?>"name="pemegang" placeholder="Pemegang Terakhir" readonly>
		</div>
	</div>
	<div class="form-group">
		<label for="status_audit" class="col-sm-2 control-label">Status Audit</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="status_audit" value="<?php echo $row['status_audit']; ?>"name="status_audit" placeholder="Status Audit" readonly>
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
}
?>
