<?php

include "koneksi.php";

$id = $_POST['mahasiswa_id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$ubah = $koneksi->query("UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE mahasiswa_id='$id'");

if ($ubah == true) {
    header("location:tampil-mahasiswa.php?pesan=editBerhasil");
} else {
    echo "Error";
}

?>