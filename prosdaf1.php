<?php
include "koneksipas.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


if (empty($nama)){
echo "Nama belum diisi";
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}


    $cek    =mysqli_num_rows (mysqli_query($connect,"SELECT nama,email,username,password FROM users WHERE nama='$_POST[nama]'"));
    if ($cek > 0) {
        echo '<script language="javascript">
              alert ("Nama sudah ada ganti dengan yang berbeda ");
              window.location="daftar1.php?hal=row";
              </script>';
        exit();
    }

else{


$daftar = mysqli_query($connect,"INSERT INTO users(nama,email,username,password) values ('$nama','$email','$username','$password')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftarkan')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar1.php'>";
}
}
?>
