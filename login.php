<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Telangana Munnurukapu Associations JAC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- styles -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/login.css" rel="stylesheet">
        <link href="assets/color/default.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>

    <body>
<!--  ------------------------Header Section ---------------------------- -->   
<?php include("header.php"); ?> 

<?php 
    
    if (isset($_POST['error'])) {
        $error = $_POST['error'];
        echo "Your Login Name or Password is Invalid";
       echo 'Login Failed : '.$error;
      }

?>

        <section id="logincontent">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <!-- Login Form ================================================== -->
                        <div id="logreg-forms">
                            <form action="controllers/loginController.php" method="POST" class="form-signin">
                                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                              <!--  <div class="social-login">
                                    <button class="btn btn-primary" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                                    <button class="btn btn-danger" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
                                </div>
                                <p style="text-align:center"> OR  </p> -->
                                <input type="text" id="emailID" name="emailID" class="form-control" placeholder="Email address" required autofocus onclick="please enter a valid emailID">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <br>
                                <?php
                                    if (isset($_GET['status'])) {
                                        $error = $_GET['error'];
                                        ?>
                                <p class="text-error">  <strong> Login Failed!!! </strong><?php echo 'Reason: '.$error; ?></p>
                                        <?php
                                    }
                                ?>

                                
                                <button class="btn btn-success social-btn" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                                <a href="#" id="forgot_pswd">Forgot password?</a>
                                <hr>
                                <!-- <p>Don't have an account!</p>  -->
                                <button class="btn btn-primary social-btn" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
                            </form>

                          <!--  <form action="/reset/password/" class="form-reset">
                                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
                            </form>

                            <form  class="form-signup">
                                <div class="social-login">
                                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                                </div>
                                <div class="social-login">
                                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                                </div>

                                <p style="text-align:center">OR</p>

                                <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
                                <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
                                <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

                                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                            </form>-->
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- Footer  ================================================== -->
         <?php include 'footer.php';  ?> 



        <!-- JavaScript Library Files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/google-code-prettify/prettify.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.elastislide.js"></script>
        <script src="assets/js/sequence/sequence.jquery-min.js"></script>
        <script src="assets/js/sequence/setting.js"></script>
        <script src="assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/application.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/hover/jquery-hover-effect.js"></script>
        <script src="assets/js/hover/setting.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="assets/js/custom.js"></script>

        <script>
                    function toggleResetPswd(e){
                    e.preventDefault();
                            $('#logreg-forms .form-signin').toggle() ;// display:block or none
                            $('#logreg-forms .form-reset').toggle() ;// display:block or none
                            }

            function toggleSignUp(e){
            alert("Inside toggleSignUp()..");
                    e.preventDefault();
                    $('#logreg-forms .form-signin').toggle(); // display:block or none
                    $('#logreg-forms .form-signup').toggle(); // display:block or none
                    }

            $(()=>{
            // Login Register Form
            $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
                    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
                    $('#logreg-forms #btn-signup').click(toggleSignUp);
                    $('#logreg-forms #cancel_signup').click(toggleSignUp);
                    });
        </script>

    </body>

</html>
