<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <title>Sign Up-Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/More styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php">Sign Up and Join</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 content-center">
                    <h1 class="mt-4 text-white">Welcome to Our Page</h1>
                    <img src="assets/img/FUI Transparent.png" alt="FUI" class="logo">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php"></a></li>
                    </ol>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body"> <img src="assets/img/sign up.png" alt="sign up" class="logo"></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="signup.php">Signup Here</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-warning text-white h-100">
                                <div class="card-body"><img src="assets/img/LOG IN.png" alt="LOG IN" class="logo"> </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="login.php">Login Here</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-danger text-white h-100">
                                <div class="card-body"><img src="assets/img/Admin.png" alt="Admin" class="logo"></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="admin">Admin Here</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once('includes/footer.php');?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
