<?php
if( empty( $_SESSION['id_user'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {

if(isset($_REQUEST['submit'])){

    $id_inventory = $_REQUEST['id_inventory'];

    $sql = mysqli_query($koneksi, "DELETE FROM data WHERE id_inventory='$id_inventory'");
    if($sql == true){
        header("Location: ./admin.php?hlm=inventory");
        die();
    }
    }
}
?>
