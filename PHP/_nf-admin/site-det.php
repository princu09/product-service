<?php
    $err = false;
    $showAlert = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require '_dbconnect.php';
        session_start();
        
        // Admin Site Data
        $f_name = $_SESSION['f_name'];
        $l_name = $_SESSION['l_name'];
        $email = $_SESSION['email'];
        $mobile = $_SESSION['mobile'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        // This site data
        $site_name = $_POST['site-name'];
        $company_name = $_POST['company-name'];
        $sitelogo = $_POST['sitelogo'];
        $faviconlogo = $_POST['faviconlogo'];
        $facebook = $_POST['facebook-url'];
        $instagram = $_POST['instagram-url'];
        $twitter = $_POST['twitter-url'];
        
        if (!empty(($f_name) && ($l_name) && ($email) && ($mobile) && ($username) && ($password) && ($site_name) && ($company_name) && ($sitelogo) && ($faviconlogo) && ($facebook) && ($instagram) && ($twitter) )) {
            
            $sql = "INSERT INTO `admin-login` (`first-name`, `last-name`, `email`, `mobile`, `username`, `password`, `site-name`, `site-logo`, `site-favicon`, `comapny-name`, `facebook`, `instagram`, `twitter`, `timestamp`) VALUES ('$f_name', '$l_name', '$email', '$mobile', '$username', '$password', '$site_name', '$sitelogo', '$faviconlogo', '$company_name', '$facebook', '$instagram', '$twitter', current_timestamp());";

            $result = mysqli_query($connect, $sql);

            if($result){
                header("Location: ../index.php");
            }else {
                echo "Error :(";
            }
        }else{
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
                        <img src="assets/images/site-logo.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body" style="padding:40px 50px 40px">
                            <div class="brand-wrapper">
                                <img src="assets/images/logo.jpg" alt="logo" width="250rem">
                            </div>
                            <p class="login-card-description">Setup Your Website</p>
                            <form action="site-det.php" method="POST">
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
                                            <label for="site-name" class="sr-only">Site Name</label>
                                            <input type="text" name="site-name" id="site-name" class="form-control"
                                                placeholder="Site Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Company Name" class="sr-only">Company Name</label>
                                            <input type="text" name="company-name" id="company-name"
                                                class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Site-Logo" class="sr-only">Site Logo</label>
                                    <input type="text" name="sitelogo" id="sitelogo" class="form-control"
                                        placeholder="Site Logo (url)">
                                </div>
                                
                                <div class="form-group">
                                    <label for="favicon-Logo" class="sr-only">Favicon Url</label>
                                    <input type="text" name="faviconlogo" id="faviconlogo" class="form-control"
                                        placeholder="Favicon (url)">
                                </div>

                                <div class="form-group">
                                    <label for="Facebook Name" class="sr-only">Facebook Url</label>
                                    <input type="text" name="facebook-url" id="facebook-url" class="form-control"
                                        placeholder="Facebook Url">
                                </div>

                                <div class="form-group">
                                    <label for="instagram Name" class="sr-only">instagram Url</label>
                                    <input type="text" name="instagram-url" id="instagram-url" class="form-control"
                                        placeholder="Instagram Url">
                                </div>

                                <div class="form-group">
                                    <label for="twitter Name" class="sr-only">twitter Url</label>
                                    <input type="text" name="twitter-url" id="twitter-url" class="form-control"
                                        placeholder="Twitter Url">
                                </div>

                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Finish">
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