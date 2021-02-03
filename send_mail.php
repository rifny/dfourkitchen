<?php
$nama=$_POST[‘nama’];
$nomorhp=$_POST[’nomorhp’];
$email=$_POST[’email’];
$pesan=$_POST[‘pesan’];
$email2=’dfour.site@gmail.com’; //Ini adalah email penerima pesan. Silahkan ganti dengan email anda!!
$subjek=”No-reply”;
$to=$email2;

$pesan=”Nama : $nama <br>
Nomor HP : $nomorhp <br>
Email : $email <br><br>
Pesan : “.$pesan;

$headers = “MIME-Version: 1.0” . “\r\n”;
$headers .= “Content-type:text/html;charset=iso-8859-1” . “\r\n”;

$headers .= ‘Dari: <visitor@email.com>’ . “\r\n”; //Ini adalah nama tampilan pada saat anda terima pesan. Silahkan ganti sesuai kebutuhan!!

@mail($to,$subjek,$pesan,$headers);
if(@mail)
{
echo”<script>alert(‘Pesan anda sudah terkirim! Terima kasih.’)</script>”;
echo”<script>location=’index.php'</script>”;
}
?>