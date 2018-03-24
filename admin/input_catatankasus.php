<?php
session_start();
if(!$_SESSION['username']) {
    header('location: ../login.php');
}
include '../config/database.php';
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
                    <div class="panel-heading">Input Masalah Mahasiswa</div>
                        <div class="panel-body">
                            <form id="demo-form2" novalidate class="form-horizontal form-label-left" method="post" action="process_catatankasus.php" enctype='multipart/form-data'>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRP <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select" name="nrp">
                                        <?php
                                            $query = $connection->query("SELECT * FROM mahasiswa");
                                            while ($data = $query->fetch_array(MYSQLI_BOTH)) {
                                        ?>
                                        <option value="<?php echo $data['nrp']; ?>"><?php echo $data['nama']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kasus<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select" name="kasus">
                                            <?php
                                                $query = $connection->query("SELECT * FROM kasus");
                                                while ($data = $query->fetch_array(MYSQLI_BOTH)) {
                                            ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="keterangan" placeholder="" required="required" >
                                    </div>
                                </div>

                                <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" placeholder="" required="required" >
                                    </div>
                                </div>
                                
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
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