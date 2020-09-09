<?php

    require '_nf-admin/_dbconnect.php';
    $sql = "SELECT * FROM `admin-login` LIMIT 1";
    $result = mysqli_query($connect , $sql);
    $num = mysqli_num_rows($result);

    $sitename = array();
    $companyname = array();
    $favicon = array();
    $logo = array();
    $facebook = array();
    $instagram = array();
    $twitter = array();

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $sitename[] = $row['site-name'];
            $companyname[] = $row['comapny-name'];
            $favicon[] = $row['site-favicon'];
            $logo[] = $row['site-logo'];
            $facebook[] = $row['facebook'];
            $instagram[] = $row['instagram'];
            $twitter[] = $row['twitter'];
        }
    } else {
        header("Location: _nf-admin/welcome.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename[0]; ?></title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $favicon[0]; ?>" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>

<body>

    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <h3 class="mr-2 text-xl font-semibold"><?php echo $sitename[0]; ?></h3>
                <img src="<?php echo $logo[0]; ?>" width="30px" alt="Logo Here" style="box-shadow:1px 1px 5px; border-radius: 50px;">
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="index.php" class="mr-5 hover:text-gray-900 font-semibold">Home</a>
                <a href="#" class="mr-5 hover:text-gray-900 font-semibold">Products</a>
                <a href="about.php" class="mr-5 hover:text-gray-900 font-semibold">About</a>
                <a href="contact.php" class="mr-5 hover:text-gray-900 font-semibold">Contact</a>
            </nav>
            <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Login
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>
