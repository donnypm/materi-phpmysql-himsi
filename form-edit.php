<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-data.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM list_data WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Vaksin Mahasiswa Perbanas Institute</title>
</head>

<body>

    <div class="content">
        <header>
            <link rel="stylesheet" type="text/css" href="style.css">
            <h3>Edit Data Vaksin Mahasiswa</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset style="margin-bottom:20px;">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                <p>
                    <label for="nim">NIM: </label>
                    <input type="text" name="nim" value="<?php echo $data['nim'] ?>" />
                </p>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" />
                </p>

                <p>
                    <label for="vaksin_1">Vaksin 1: </label>
                    <input type="text" name="vaksin_1" value="<?php echo $data['vaksin_1'] ?>" />
                </p>

                <p>
                    <label for="vaksin_2">Vaksin 2: </label>
                    <input type="text" name="vaksin_2" value="<?php echo $data['vaksin_2'] ?>" />
                </p>
                <p>
                    <label for="tanggal_vaksin1">Tanggal Vaksin 1: </label>
                    <input type="date" name="tanggal_vaksin1" value="<?php echo $data['tanggal_vaksin1'] ?>" />
                </p>
                <p>
                    <label for="tanggal_vaksin2">Tanggal Vaksin 2: </label>
                    <input type="date" name="tanggal_vaksin2" value="<?php echo $data['tanggal_vaksin2'] ?>" />
                </p>

                <p>
                    <input type="submit" value="Simpan" name="submit" />
                </p>

            </fieldset>


        </form>

        <button>
            <a href="list-data.php" style="text-decoration:none; color:black;">Back</a>
        </button>

    </div>
</body>

</html>