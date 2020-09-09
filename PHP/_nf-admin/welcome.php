<?php
    $err = false;
    $showAlert = false;

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        


        require '_dbconnect.php';
        session_start();
        $f_name = $_POST['firstname'];
        $l_name = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty(($f_name) && ($l_name) && ($email) && ($mobile) && ($username) && ($password)  )) {
            
            $hash = password_hash($password , PASSWORD_DEFAULT);

            $_SESSION['f_name'] = $f_name;
            $_SESSION['l_name'] = $l_name;
            $_SESSION['email'] = $email;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $hash;
            
            header("Location: site-det.php");
        }else {
            $err = true;
            $showAlert = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="https://princu09.github.io/nfwebbuilder/img/logo.png" type="image/png">

</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="assets/images/logo.jpg" alt="logo" width="250rem">
                            </div>
                            <p class="login-card-description">Sign Up For Admin Panel</p>
                            
                            <form action="welcome.php" method="POST">
                            <?php
                                if ($showAlert) {
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-size:0.8rem;">
                                    <strong>Error !</strong> You should check all fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>';
                                }
                            ?>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="firstname" class="sr-only">FisrtName</label>
                                            <input type="fisrtName" name="firstname" id="email" class="form-control"
                                                placeholder="FisrtName">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="lastname" class="sr-only">LastName</label>
                                            <input type="LastName" name="lastname" id="email" class="form-control"
                                                placeholder="LastName">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile" class="sr-only">Mobile</label>
                                    <input type="tel" maxlength="10" name="mobile" id="email" class="form-control"
                                        placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Username</label>
                                    <input type="Username" name="username" id="email" class="form-control"
                                        placeholder="Username">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Login">
                            </form>
                            <!-- <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a>
                            </p> -->
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>