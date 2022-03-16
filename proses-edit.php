<?php

include "koneksi.php";

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['submit'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $vaksin_1 = $_POST['vaksin_1'];
    $vaksin_2 = $_POST['vaksin_2'];
    $tanggal_vaksin1 = $_POST['tanggal_vaksin1'];
    $tanggal_vaksin2 = $_POST['tanggal_vaksin2'];

    // buat query
    $sql = "UPDATE list_data SET nim='$nim', nama='$nama', vaksin_1='$vaksin_1', vaksin_2='$vaksin_2', tanggal_vaksin1='$tanggal_vaksin1', tanggal_vaksin2='$tanggal_vaksin2' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo ("<script type='text/javascript'>
                    window.alert('Berhasil Edit Data');
                    window.location.href='list-data.php';
                </script>");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
