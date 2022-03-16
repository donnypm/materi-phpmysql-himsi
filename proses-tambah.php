<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $vaksin_1 = $_POST['vaksin_1'];
    $vaksin_2 = $_POST['vaksin_2'];
    $tanggal_vaksin1 = $_POST['tanggal_vaksin1'];
    $tanggal_vaksin2 = $_POST['tanggal_vaksin2'];

    // buat query
    $sql = "INSERT INTO list_data (nim, nama, vaksin_1, vaksin_2, tanggal_vaksin1, tanggal_vaksin2) VALUE ('$nim','$nama', '$vaksin_1', '$vaksin_2', '$tanggal_vaksin1', '$tanggal_vaksin2')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo ("<script type='text/javascript'>
                    window.alert('Berhasil Tambah Data');
                    window.location.href='form-tambah.php';
                </script>");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>