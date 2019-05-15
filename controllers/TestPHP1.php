<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TestPHP1.php</title>
    </head>
    <body>
        <?php
        if(isset($_POST["submit"])){
             echo '11111111111111111111111111';
        }
        if(isset($_POST["emailID"])){
             echo '22222222222222222222';
        }
        ?>
        welcome <?php echo $_POST["emailID"]; ?> <br>
        welcome <?php echo $_POST["password"]; ?> <br>
        welcome <?php echo $_POST["cpassword"]; ?> <br>
        welcome <?php echo $_POST["fullName"]; ?> <br>
        welcome <?php echo $_POST["surname"]; ?> <br>
        welcome <?php echo $_POST["gender"]; ?> <br>
        welcome <?php echo $_POST["relation"]; ?> <br>
        welcome <?php echo $_POST["motherName"]; ?> <br>
        welcome <?php echo $_POST["motherMaidenName"]; ?> <br>
        welcome <?php echo $_POST["aadharNumber"]; ?> <br>
        welcome <?php echo $_POST["mobileNumber"]; ?> <br>
        welcome <?php echo $_POST["dateOfBirth"]; ?> <br>
        welcome <?php echo $_POST["marital_status"]; ?> <br>
        welcome <?php echo $_POST["profession_category"]; ?> <br>
        welcome <?php echo $_POST["occupationRole"]; ?> <br>
        welcome <?php echo $_POST["organizationAddress"]; ?> <br>
        welcome <?php echo $_POST["address1"]; ?> <br>
        welcome <?php echo $_POST["address2"]; ?> <br>
        welcome <?php echo $_POST["city"]; ?> <br>
        welcome <?php echo $_POST["region"]; ?> <br>
        welcome <?php echo $_POST["postal_code"]; ?> <br>
        welcome <?php echo $_POST["country"]; ?> <br>
        welcome <?php echo $_POST["jobAccess"]; ?> <br>
        welcome <?php echo $_POST["matrimonyAccess"]; ?> <br>
        welcome <?php echo $_POST["businessAccess"]; ?> <br>
        welcome <?php echo $_POST["bloodDonation"]; ?> <br>
        welcome <?php echo $_POST["newsletter"]; ?> <br>


    </body>  
</html>
