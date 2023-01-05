<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DAFTAR PEGAWAI</title>
    <link rel="stylesheet" href="form-tambah.css">
</head>

<body>
    <br><br>
    <center>
        <h1>FORMULIR PENAMBAHAN PEGAWAI</h1>
    </center>
    <div class="wrapper">
        <form action="proses_tambah.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
                </p>
                <p>
                    <label for="jenis kelamin">Jenis Kelamin : </label>
                    <input type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                </p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap">
                </p>
                <p>
                    <label for="jabatan">Jabatan : </label>
                    <input type="text" name="jabatan" placeholder="Masukkan Jabatan Anda">
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah">
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>