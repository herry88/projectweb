<?php
error_reporting(0);
//deklarasi pada form
$nama = $_POST['namatxt'];
$agama = $_POST['agama'];
$jk = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
// echo $nama."<br>";
// echo $agama;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LOGO / Gambar</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="https://google.com" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Formulir</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Formulir</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama :</td>
                                    <td><input type="text" name="namatxt" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Agama :</td>
                                    <td>

                                        <input type="radio" class="form-check-input position-static" name="agama" value="tambah">+
                                        <input type="radio" class="form-check-input  position-static" name="agama" value="kurang">-
                                        <input type="radio" class="form-check-input  position-static" name="agama" value="budha">Islam
                                        <input type="radio" class="form-check-input  position-static" name="agama" value="hindu">Islam

                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <input type="radio" name="jenis_kelamin" value="Laki Laki">Laki Laki
                                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Terakhir</td>
                                    <td>
                                        <select name="pendidikan" class="form-control">
                                            <option value="0">--Pilih Pendidikan--</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SLTP</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="S1">S1</option>
                                            
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Kirim Data</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <table border="1">
            <tr>
                <td>Nama :</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?php echo $agama; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $jk; ?></td>
            </tr>
        </table>
    </div>

</body>

</html>