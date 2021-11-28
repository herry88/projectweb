<?php
error_reporting(0);
//deklarasi pada form
$hargabeli = $_POST['harga_beli'];
$hargajual = $_POST['harga_jual'];
$operator = $_POST['operator'];

if($operator == "tambah"){
    $output = $hargabeli + $hargajual;

}
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
                                    <td>Harga Beli :</td>
                                    <td><input type="text" name="harga_beli" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual :</td>
                                    <td><input type="text" name="harga_jual" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Operator</td>
                                    <td>
                                        <input type="radio" name="operator" value="tambah">+
                                        <input type="radio" name="operator" value="kurang">-
                                        <input type="radio" name="operator" value="kali">*
                                        <input type="radio" name="operator" value="bagi">/
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
                <td>Harga Beli :</td>
                <td><?php echo $hargabeli; ?></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><?php echo $hargajual; ?></td>
            </tr>
            <tr>
                <td>Outputnya</td>
                <td><?php echo $output; ?></td>
            </tr>
        </table>
    </div>

</body>

</html>