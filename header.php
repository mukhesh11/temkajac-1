<?php
include("data/Users.php");
/**
  $_SESSION['emailID'] = $user->getEmail();
  $_SESSION['name'] = $user->getName();
  $_SESSION['user'] = $user;
  $_SESSION['status'] = "success";
 * 
 */
$user = null;
$status = null;
if (isset($_SESSION['status'])) {
    $user = unserialize($_SESSION['user']);
    $status = $_SESSION['status'];
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Telangana Munnurukapu Associations JAC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- styles -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <link href="assets/css/sequence.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/color/default.css" rel="stylesheet">

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body>
        <header>
            <!-- Navbar
            ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="index.php"><img src="assets/img/temkajac-logo.png" alt="" style="height:100px"></a>
                        <!-- end logo -->
                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown active">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about.php">About Us</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="history.php">Our History</a></li>
                                            <li><a href="famous-personalities.php">Famous Personalities</a></li>
                                        </ul>
                                    </li>
                                    <?php if ($status === 'success') { ?>
                                    <li>
                                        <a href="search-members.php">Member List</a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="founder-members.php">Founder Members</a>
                                    </li>
                                    <li>
                                        <a href="jac-coordinators.php">JAC Coordinators</a>
                                    </li>

                                    <!-- li>
                                        <a href="life-members.php">Life Members</a>
                                    </li-->
                                    <!-- li class="dropdown">
                                        <a>Members</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="search-members.php">Search Members</a></li>
                                            <li><a href="founder-members.php">Founder Members</a></li>
                                            <li><a href="jac-coordinators.php">JAC Coordinators</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.php">Events</a>
                                    </li>
                                    <li>
                                        <a href="index.php">Offers</a>
                                    </li>
                                    <li>
                                        <a href="index.php">Matrimony</a>
                                    </li>
                                    <li>
                                        <a href="index.php">Gallery</a>
                                    </li -->
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>

                                <?php
                                if ($status === null || $status === "") {
                                    ?>
                                    <ul class="nav rightnav">
                                        <li class="">
                                            <a href="login.php">
                                                <i class="icon-briefcase icon"></i>Login</a>
                                        </li>
                                        <li class="">
                                            <a href="register.php">
                                                <i class="icon-plane icon"></i>Register!</a>
                                        </li>
                                    </ul>
                                    <?php
                                } else if ($status === 'success') {
                                    ?>
                                    <ul class="nav rightnav">
                                        <li class="">
                                            <a> <?php echo "Welcome " . $user->name." ".$user->surname ?> </a><br>
                                        </li>    
                                        <li class="">
                                            <a href="logout.php"> <i class="icon-eject icon"></i>Logout</a>
                                        </li>

                                    </ul>

                                <?php
                                }
                                ?>
                            </nav>
                        </div>
                        <!-- end menu -->
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>