<?php
include "koneksi.php";
$bidang = $_REQUEST['bidang'];
$posisi = $_REQUEST['posisi'];
$nip = $_REQUEST['nip'];

$mysqli  = "UPDATE kepengurusan SET bidang='$bidang', posisi='$posisi', nip='$nip' WHERE id=$id";

$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Edit data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  } else {
    echo "<script>alert('Edit data gagal')</script>";
    echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  }
  mysqli_close($connect);
?>
