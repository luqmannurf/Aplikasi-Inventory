<?php
    if( empty( $_SESSION['id_user'] ) ){

    	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
    	header('Location: ./');
    	die();
    } else {
?>

<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet"/>
</head>
<body onload="window.print()">
    <div class="container">

<?php

    $id_inventory = $_REQUEST['id_inventory'];

    $sql = mysqli_query($koneksi, "SELECT tanggal, nama, merk, tipe, kode_inventaris,  serial_number, id_user FROM data WHERE id_inventory='$id_inventory'");

    list($tanggal, $nama, $merk, $tipe, $kode_inventaris, $serial_number, $id_user) = mysqli_fetch_array($sql);

    echo '
        <center><h3>Form Serah Terima</h3></center>
        <hr/>
        <h4>Tanggal : <b>'.$tanggal.'</b></h4>
        <table class="table table-bordered">
         <thead>
           <tr class="info">
           <th width="10%">Tanggal</th>
             <th width="15%">Nama</th>
             <th width="5">Merk</th>
             <th width="5%">Tipe</th>
             <th width="10%">Kode Inventaris</th>
             <th width="10%">Serial Number</th>          
             </tr>
         </thead>
         <tbody>

           <tr>
             <td>'.date("d M Y", strtotime($tanggal)).'</td>
             <td>'.$nama.'</td>
             <td>'.$merk.'</td>
             <td>'.$tipe.'</td>
             <td>'.$kode_inventaris.'</td>
             <td>'.$serial_number.'</td>
             <tr/>

        </tbody>
    </table>

    <div style="margin: 0 0 50px 75%;">
        <p style="margin-bottom: 60px;">IT Support & GA</p>
        <p><p>';

        
        echo "<b><u>Zainudin Jeje</u></b>";

        echo '</p></p>
    </div>

    <center>-------------------- Terima Kasih ------------------- </center>

    </div>
</body>
</html>';
}
?>
