<?php
if( empty( $_SESSION['id_user'] ) ){
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

      if(isset($_REQUEST['submit'])){

	     $submit = $_REQUEST['submit'];
         $tgl1 = $_REQUEST['tgl1'];
         $tgl2 = $_REQUEST['tgl2'];

		 $sql = mysqli_query($koneksi, "SELECT * FROM data WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'");
		 if(mysqli_num_rows($sql) > 0){
			 $no = 0;

		 echo '<h2>Rekap Laporan Inventory<small>'.$tgl1.' sampai '.$tgl2.'</small></h2><hr>

		 <div class="col-sm-1">
		  <a href="?hlm=laporan" id="tombol" class="btn btn-info pull-left"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a><br/><br/><br/>

		   <button id="tombol" onclick="window.print()" class="btn btn-warning"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button>

		   </div>

		  <div class="col-sm-11">
		  <table class="table table-bordered">
		  <thead>
			<tr class="info">
			  <th width="5%">No</th>
			  <th width="10%">Tanggal</th>
			  <th width="10%">Nama</th>
			  <th width="10%">Merk</th>
			  <th width="10%">Tipe</th>
			  <th width="10%">Kode Inventaris</th>
			  <th width="10%">Serial Number</th>
			  <th width="10%">Posisi</th>
			</tr>
		  </thead>
		  <tbody>';

		  while($row = mysqli_fetch_array($sql)){
			 $no++;
		 echo '

			<tr>
			  <td>'.$no.'</td>
			  <td>'.$row['tanggal'].'</td>
			  <td>'.$row['nama'].'</td>
			  <td>'.$row['merk'].'</td>
			  <td>'.$row['tipe'].'</td>
			  <td>'.$row['kode_inventaris'].'</td>
			  <td>'.$row['serial_number'].'</td>
			  <td>'.$row['posisi'].'</td>';
		 }
	 }
	 echo '
		 </tbody>
	 </table>

		<div class="col-sm-6"><table class="table table-bordered">';
	

		 }
		 echo '
			   </table>
		   </div>
		   </div>
		   </div>
		 </div>';

	 

?>
	<div class="well well-sm noprint">
	<form class="form-inline" role="form" method="post" action="">
	  <div class="form-group">
	    <label class="sr-only" for="tgl1">Mulai</label>
	    <input type="date" class="form-control" id="tgl1" name="tgl1" required>
	  </div>
	  <div class="form-group">
	    <label class="sr-only" for="tgl2">Hingga</label>
	    <input type="date" class="form-control" id="tgl2" name="tgl2" required>
	  </div>
	  <button type="submit" name="submit" class="btn btn-success">Tampilkan</button>
	</form>
	</div>
<?php
      echo '
	  		</table>
	  	</div>
		<div class="col-sm-1">
		  	<button id="tombol" onclick="window.print()" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button>
		 </div>
	  	</div>
	  </div>';
   }
?>
