<?php
session_start();
if( empty( $_SESSION['id_user'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>Aplikasi Inventory Kitabisa.com</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jquery-ui.min.css" rel="stylesheet">

	<style type="text/css">
	body {
	  min-height: 200px;
	  padding-top: 70px;
	}
   @media print {
	   .container {
		   margin-top: -30px;
	   }
	   #tombol,		
      .noprint {
         display: none;
      }
   }
	</style>

  </head>

  <body>

    <?php include "menu.php"; ?>

    <div class="container">

	<?php
	if( isset($_REQUEST['hlm'] )){

		$hlm = $_REQUEST['hlm'];

		switch( $hlm ){
			case 'inventory':
				include "inventory.php";
				break;
			case 'details':
				include "inventory_details.php";
				break;	
			case 'laporan':
				include "laporan.php";
				break;
			case 'user':
				include "user.php";
				break;
			case 'cetak':
				include "cetak_inventory.php";
				break;
		}
	} else {
	?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Selamat Datang di Aplikasi Inventory</h2>

        <p>Halo <strong><?php echo $_SESSION['nama']; ?></strong>, Anda login sebagai
			<strong>
			<?php
				if($_SESSION['level'] == 1){
					echo 'Admin.';
				} else {
						echo 'Pegawai.';
				}
			?>
			</strong>
		</p>
      </div>
	<?php
	}
	?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>

  </body>

</html>
<?php
}
?>
