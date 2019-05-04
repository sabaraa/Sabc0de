<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$nama=$_POST['nama'];
	$total_suara=$_POST['total_suara'];
    $total_suara++;
	
	
	mysqli_query($conn,"UPDATE kandidat set nama='$nama', total_suara='$total_suara' where id_kandidat='$id'");
	header('location:soal6.php');

?>