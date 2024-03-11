<?php

if( empty( $_SESSION['id_user'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	if( isset( $_REQUEST['aksi'] )){
		$aksi = $_REQUEST['aksi'];
		switch($aksi){
			case 'baru':
				include 'inventory_baru.php';
				break;
			case 'edit':
				include 'inventory_edit.php';
				break;
			case 'hapus':
				include 'inventory_hapus.php';
				break;
			case 'cetak':
				include 'cetak_inventory.php';
				break;
		}
	} else {

		echo '

			<div class="container">
				<h3 style="margin-bottom: -20px;">Data Inventory</h3>
					<a href="./admin.php?hlm=inventory&aksi=baru" class="btn btn-success btn-s pull-right">Tambah Data</a>
				<br/><hr/>

				<table class="table table-bordered">
				 <thead>
				   <tr class="info">
					 <th width="5%">No</th>
					 <th width="10%">Tanggal Update</th>
					 <th width="15%">Nama Pemegang</th>
					 <th width="10%">Team</th>
					 <th width="10%">Pembelian</th>
					 <th width="10%">Merk</th>
					 <th width="10%">Tipe</th>
					 <th width="20%">Kode Inventaris</th>
					 <th width="10%">Harga Beli</th>
					 <th width="10%">Status</th>
					 <th width="10%">Serial Number</th>
					 <th width="10%">Processor</th>
					 <th width="10%">RAM</th>
					 <th width="10%">Hardisk</th>
					 <th width="10%">Pengecekan Terakhir</th>
					 <th width="10%">Kondisi Barang</th>
					 <th width="10%">Divisi</th>
					 <th width="10%">Posisi</th>
					 <th width="10%">Payment Budget</th>
					 <th width="10%">Pemegang Sebelumnya</th>
					 <th width="10%">Status Audit</th>
					 <th width="10%">Tindakan</th>
				   </tr>
				 </thead>
				 <tbody>';

			//skrip untuk menampilkan data dari database
		 	$sql = mysqli_query($koneksi, "SELECT * FROM data");
		 	if(mysqli_num_rows($sql) > 0){
		 		$no = 0;

				 while($row = mysqli_fetch_array($sql)){
	 				$no++;
	 			echo '

				   <tr>
					 <td>'.$no.'</td>
					 <td>'.date("d M Y", strtotime($row['tanggal'])).'</td>
					 <td>'.$row['nama'].'</td>
					 <td>'.$row['team'].'</td>
					 <td>'.$row['pembelian'].'</td>
					 <td>'.$row['merk'].'</td>
					 <td>'.$row['tipe'].'</td>
					 <td>'.$row['kode_inventaris'].'</td>
					 <td>'.$row['harga_beli'].'</td>
					 <td>'.$row['status'].'</td>
					 <td>'.$row['serial_number'].'</td>
					 <td>'.$row['processor'].'</td>
					 <td>'.$row['ram'].'</td>
					 <td>'.$row['hardisk'].'</td>
					 <td>'.$row['pengecekan'].'</td>
					 <td>'.$row['kondisi'].'</td>
					 <td>'.$row['divisi'].'</td>
					 <td>'.$row['posisi'].'</td>
					 <td>'.$row['payment_budget'].'</td>
					 <td>'.$row['pemegang'].'</td>
					 <td>'.$row['status_audit'].'</td>
					 <td>

					<script type="text/javascript" language="JavaScript">
					  	function konfirmasi(){
						  	tanya = confirm("Anda yakin akan menghapus data ini?");
						  	if (tanya == true) return true;
						  	else return false;
						}
					</script>
					 <a href="?hlm=inventory&aksi=edit&id_inventory='.$row['id_inventory'].'" class="btn btn-warning btn-s">Edit</a>

					 <a href="?hlm=inventory&aksi=hapus&submit=yes&id_inventory='.$row['id_inventory'].'" onclick="return konfirmasi()" class="btn btn-danger btn-s">Hapus</a>

					 <a href="?hlm=cetak&id_inventory='.$row['id_inventory'].'" class="btn btn-info btn-s" target="_blank">Cetak Data</a>

					 </td>';
				}
			} else {
				 echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?hlm=inventory&aksi=baru">Tambah data baru</a></u> </p></center></td></tr>';
			}
			echo '
			 	</tbody>
			</table>
		</div>';
	}
}
?>
