<?php include "koneksi.php";?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>List Data Vaksin Mahasiswa Perbanas Institute</title>
</head>

<body>
    <div class="content">

        <header>
            <h3>List Data Vaksin Mahasiswa</h3>
        </header>

        <nav>
            <a href="form-tambah.php">[+] Tambah Baru</a><br/>
            <a href="index.php">[<-] Kembali</a>
        </nav>

        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Vaksin Ke-1</th>
                    <th>Vaksin Ke-2</th>
                    <th>Tanggal Vaksin Ke-1</th>
                    <th>Tanggal Vaksin Ke-2</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $sql = "SELECT * FROM list_data";
                    $query = mysqli_query($db, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $data['id'] . "</td>";
                        echo "<td>" . $data['nim'] . "</td>";
                        echo "<td>" . $data['nama'] . "</td>";
                        echo "<td>" . $data['vaksin_1'] . "</td>";
                        echo "<td>" . $data['vaksin_2'] . "</td>";
                        echo "<td>" . $data['tanggal_vaksin1'] . "</td>";
                        echo "<td>" . $data['tanggal_vaksin2'] . "</td>";

                        echo "<td>";
                        echo "<a href='form-edit.php?id=" . $data['id'] . "'>Edit</a> | ";
                        echo "<a href='hapus.php?id=" . $data['id'] . "'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                ?>

            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </div>

</body>

</html>