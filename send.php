<?php
$name=$_POST['nama'];
$email=$_POST['email'];
$subject=$_POST['telp'];
$message=$_POST['pesan'];
$to="akbatmetak@gmail.com";
$message="Dear, <br /> <br />".$message;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: admin@email.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'index.html';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to akbatmetal@gmail.com');
window.location = 'index.html';
</script>
<?php
}
?>