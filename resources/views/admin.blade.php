<!doctype html>
<html lang="en">
  <head>
  	<title>admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(https://yt3.ggpht.com/ytc/AKedOLTMwSiSVqd9sKuY-H5xeUlMgfAWDIrYlNRFgScb_A=s900-c-k-c0x00ffffff-no-rj);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Edit Profile</a>
                    </li>
                    <li>
                        <a href="#">Edit Videos</a>
                    </li>
                    <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Edit Posts</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    </ul>
                    </li>
                    <li>
                    <a href="#">Settings</a>
                    </li>
                    <li>
                    <a href="#">Contact</a>
                    </li>
                </ul>

                <div class="footer">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </nav>
        
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2 class="mb-4">Profile</h2>
            <div>
                <input type="text" placeholder="Your username" class="form-control mb-2">
                <input type="email" placeholder="Your email" class="form-control mb-2">

                <div class="mt-4 mb-2">
                    <label for="formFile" class="form-label">Upload your profile picture.</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <input type="button" class="btn btn-primary" value="Save">
                <input type="button" class="btn btn-danger" value="Reset">
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
