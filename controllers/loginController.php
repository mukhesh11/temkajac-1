<?php
session_start();
include_once("functions.php");
include_once("../data/Users.php");


//$user = new Users();
$emailID = null;
$password = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailID = test_input($_POST["emailID"]);
    $password = test_input($_POST["password"]);

    if ($emailID != null && $password != null) {
        $con = db_connect();
        $myemail = mysqli_real_escape_string($con, $emailID);
        $mypassword = mysqli_real_escape_string($con, $password);
        
        $sql = "SELECT 1 FROM USERS WHERE EMAIL = '$myemail' and PASSWORD = '$mypassword'";
        
        echo 'SQL Query:'.$sql;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //$active = $row['active'];
        $count = mysqli_num_rows($result);
        echo 'SQL Query:'.$sql;
        
        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count >= 1) {
                      
        $user = getUserData($con, $emailID);
            
          $_SESSION['emailID'] = $myemail;
          $_SESSION['user'] = serialize($user);
          $_SESSION['status'] = "success";
         // echo 'login successful';
          
          header("Location:../index.php");
          exit;

            //header("location: login.php");
            //echo 'INVALID Email-address or Password';
        } else {
            
            $error = "Your Login EmailID or Password is Invalid";
           // $_POST['error'] = $error;
            header("Location:../login.php?status=failed&error='$error'");
            exit;
        }
    } else {
        $error = "Your Login Name or Password is Empty";
        $_POST['error'] = $error;
        header("Location:../login.php?status=failed&error='$error'");
        exit;
    }
    
    $con->close();
   
}


function getUserData($con, $emailID) {
   $con = db_connect();
   $user = new Users();
   
   $sql = "SELECT * FROM USERS where EMAIL='$emailID'";
   $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $user->setEmail($row["EMAIL"]);
            $user->setName($row["NAME"]);
            $user->setSurname($row["SURNAME"]);
            $user->setSex($row["SEX"]);
            $user->setRelation($row["RELATION"]);
            $user->setMother_name($row["MOTHER_NAME"]);
            $user->setMother_maiden($row["MOTHER_MAIDEN"]);
            $user->setAadhar_no($row["AADHAR_NO"]);
            $user->setMob_no($row["MOB_NO"]);
            $user->setDob($row["DOB"]);
            /*
            $user->$row["MARITAL_STATUS"];
            $user->$row["OCCUPATION"];
            $user->$row["ORGANIZATION"];
            $user->$row["ORG_ROLE"];
            $user->$row["ORG_ADDRESS"];
            $user->$row["RES_ADDRESS1"];
            $user->$row["RES_ADDRESS2"];
            $user->$row["CITY"];
            $user->$row["REGION"];
            $user->$row["POSTAL_CODE"];
            $user->$row["COUNTRY"];
            $user->$row["SEND_JOB_OPPORTUNITIES"];
            $user->$row["SEND_MATRIMONY"];
            $user->$row["SEND_BUSINESS_PROMOTIONS"];
            $user->$row["SEND_BLOOD_DONATIONS"]; 
            $user->$row["SEND_MONTHLY_NEWSLETTERS"];
            $user->$row["CREATED_DATE"];
            $user->$row["UPDATED_DATE"];
             * 
             */
        }
       
    } else {
        return $error="No user results found.";
    }

    return $user;
    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
       

    
 $con->close();    
}

?>