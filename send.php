<?php
if($_POST['kirim']){
	$admin = 'akbatmetal@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['telp']);
	$pesan	= htmlentities($_POST['pesan']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>