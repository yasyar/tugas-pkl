<?php
include '../config/database.php';
session_start();
if(!$_SESSION['username']) {
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pelanggaran Siswa</title>

    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="index.php">
                        Pembukuan Pelanggaran
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li><a href="catatan_kasus.php">Catatan Kasus</a></li>
                            <li><a href="input_catatankasus.php">Input Catatan Kasus</a></li>
                            <li><a href="mahasiswa.php">Mahasiswa</a></li>
                            <li><a href="input_mahasiswa.php">Input Mahasiswa</a></li>
                            <li><a href="input_kasus.php">Input Kasus</a></li>
                            <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CONTENT -->
    <div class="container">
        <div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Catatan Kasus</div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NRP</th>
                                    <th scope="col">Kasus</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        $query = $connection->query("SELECT * FROM catatan_kasus");
                                        while ($data = $query->fetch_array(MYSQLI_BOTH)) {
                                        $no++;

                                        $nrp = $data['nrp'];
                                        $kasus = $data['kasus'];
                                        $keterangan = $data['keterangan'];
                                        $tanggal = $data['tanggal'];
                                    ?>
                                    <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $nrp; ?></td>
                                    <td><?php echo $kasus; ?></td>
                                    <td><?php echo $keterangan; ?></td>
                                    <td><?php echo $tanggal; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </div>

    <!-- Scripts -->
    <script src="../js/app.js"></script>
</body>
</html>