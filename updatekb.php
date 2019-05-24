<?php
include "koneksi.php";
$nokk = $_REQUEST['nokk'];
$namakepkel = $_REQUEST['namakepkel'];
$jumlah = $_REQUEST['jumlah'];
$kelurahan = $_REQUEST['kelurahan'];
$rt = $_REQUEST['rt'];
$kecamatan = $_REQUEST['kecamatan'];

$mysqli  = "UPDATE keluargaberencana SET nokk='$nokk', namakepkel='$namakepkel', jumlah='$jumlah', kelurahan='$kelurahan', rt='$rt', kecamatan='$kecamatan' WHERE id=$id";

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
