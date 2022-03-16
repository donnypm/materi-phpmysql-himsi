<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tambah Data Vaksin Mahasiswa Perbanas Institute</title>
</head>

<body>
    <div class="content">

        <header>
            <h3>Tambah Data Vaksin</h3>
        </header>

        <form action="proses-tambah.php" method="POST">

            <fieldset style="margin-bottom:20px;">

                <p>
                    <label for="nama">NIM : </label>
                    <input type="text" name="nim" placeholder="NIM" />
                </p>
                <p>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="nama">Vaksin Ke-1 : </label>
                    <input type="text" name="vaksin_1" placeholder="Jenis Vaksin 1" />
                </p>
                <p>
                    <label for="nama">Vaksin Ke-2 : </label>
                    <input type="text" name="vaksin_2" placeholder="Jenis Vaksin 2" />
                </p>
                <p>
                    <label for="nama">Tanggal Vaksin Ke-1 : </label>
                    <input type="date" name="tanggal_vaksin1" placeholder="Tanggal Vaksin 1" />
                </p>
                <p>
                    <label for="nama">Tanggal Vaksin Ke-2 : </label>
                    <input type="date" name="tanggal_vaksin2" placeholder="Tanggal Vaksin 2" />
                </p>

                <p>
                    <input type="submit" value="Submit" name="submit" />
                </p>


            </fieldset>

        </form>

        <button>
            <a href="index.php" style="text-decoration:none; color:black;">Back</a>
        </button>

    </div>

</body>

</html>