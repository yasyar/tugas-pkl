<?php
session_start();
if(isset($_SESSION['username'])) {
    header('location: admin/index.php');
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
    <link href="css/app.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="#">
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
                            <li><a href="#">Berita</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CONTENT -->
        <div class="container">
            <div class="row">
			    <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">LOGIN</div>
        
                        <div class="panel-body">
                            <form action="process_login.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
									<small id="emailHelp" class="form-text-muted">we'll never share your username with anyone else</small>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password">
                                    <small id="emailHelp" class="form-text-muted">we'll never share your password with anyone else</small>
                                </div>
								<button type="submit" class="btn btn-primary">submit</button>
							</form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </div>

    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>
</html>


