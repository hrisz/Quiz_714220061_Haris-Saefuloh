<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kepegawaian</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav>
        <ul>
            <li class="title"><a>SISTEM INFORMASI KEPEGAWAIAN</a></li>
            <li><a href="form-tambah.php">TAMBAH PEGAWAI</a></li>
            <li><a href="">EDIT PEGAWAI</a></li>
            <li><a>HAPUS PEGAWAI</a></li>
        </ul>
        </div>
        </div>
    </nav>
    <br><br>
    <center>
        <h1>DAFTAR PEGAWAI</h1>
    </center>
    <br><br>
    <section id="daftar_pegawai">
        <div class="background">
            <center>
                <table id="tabelpegawai" border="1">
                    <thead>
                        <tr>
                            <th> No. &nbsp; &nbsp;</th>
                            <th> Nama &nbsp; &nbsp;</th>
                            <th>Jenis Kelamin &nbsp;&nbsp; </th>
                            <th>Alamat &nbsp; &nbsp;</th>
                            <th>Jabatan &nbsp; &nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("config.php");
                        $sql = "SELECT * FROM data_pegawai";
                        $query = mysqli_query($database, $sql);

                        while ($pegawai = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $pegawai['id'] . "</td>";
                            echo "<td>" . "&nbsp;" . $pegawai['nama'] . "&nbsp;" . "</td>";
                            echo "<td>" . "&nbsp;" . $pegawai['jenis_kelamin'] . "&nbsp;" . "</td>";
                            echo "<td>" . "&nbsp;" . $pegawai['alamat'] . "&nbsp;" . "</td>";
                            echo "<td>" . "&nbsp;" . $pegawai['jabatan'] . "&nbsp;" . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </center>
        </div>
    </section>
</body>

</html>