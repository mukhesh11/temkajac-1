<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Kolkata');
include_once("functions.php");
include_once("../data/Users.php");
include_once("../exceptions/ApplicationException.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = new Users();
    $user->setEmail(test_input($_POST["emailID"]));
    $user->setPassword(test_input($_POST["password"]));
    $user->setCpassword(test_input($_POST["cpassword"]));
    $user->setName(test_input($_POST["fullName"]));
    $user->setSurname(test_input($_POST["surname"]));
    $user->setSex(test_input($_POST["gender"]));
    $user->setRelation(test_input($_POST["relation"]));
    $user->setMother_name(test_input($_POST["motherName"]));
    $user->setMother_maiden(test_input($_POST["motherMaidenName"]));
    $user->setAadhar_no(test_input($_POST["aadharNumber"]));
    $user->setMob_no(test_input($_POST["mobileNumber"]));
    $user->setDob(test_input($_POST["dateOfBirth"]));
    $user->setMarital_status(test_input($_POST["maritalStatus"]));
    $user->setOccupation(test_input($_POST["profession_category"]));
    $user->setOrganization(test_input($_POST["organizationName"]));
    $user->setRole(test_input($_POST["occupationRole"]));
    $user->setAddress(test_input($_POST["organizationAddress"]));
    $user->setAddress1(test_input($_POST["address1"]));
    $user->setAddress2(test_input($_POST["address2"]));


    $user->setPostal_code(test_input($_POST["postal_code"]));
    $user->setCountry(test_input($_POST["country"]));
    $user->setRegion(test_input($_POST["region"]));
    $user->setDistrict(test_input($_POST["district"]));
    $user->setLoksabha_consty(test_input($_POST["lok_consty"]));
    $user->setAssembly_consty(test_input($_POST["asbly_consty"]));
    $user->setMandal(test_input($_POST["mandal"]));
    $user->setCity(test_input($_POST["city"]));

    if (isset($_POST["jobAccess"])) {
        $user->setSendJobOpportunities("Y");
    } else {
        $user->setSendJobOpportunities("N");
    }
    if (isset($_POST["matrimonyAccess"])) {
        $user->setSendMatrimony(("Y"));
    } else {
        $user->setSendMatrimony("N");
    }
    if (isset($_POST["businessAccess"])) {
        $user->setSendBusinessPromotions(("Y"));
    } else {
        $user->setSendBusinessPromotions("N");
    }
    if (isset($_POST["bloodDonation"])) {
        $user->setSendBloodDonations(("Y"));
    } else {
        $user->setSendBloodDonations("N");
    }
    if (isset($_POST["newsletter"])) {
        $user->setSendmonthlyNewsletters(("Y"));
    } else {
        $user->setSendmonthlyNewsletters("N");
    }


    try {
        $bflag = false;
        if ($user->getEmail() == "") {
            $msg = "Email ID cannot be empty";
        } else if ($user->getPassword() == "") {
            $msg = "Password cannot be empty";
        } else if ($user->getName() == "") {
            $msg = "Name cannot be empty";
        } else if ($user->getAadhar_no() == "") {
            //echo 'Email ID cannot be empty';
            $msg = "Aadhar Number cannot be empty";
        } else if ($user->getPassword() === $user->getCpassword()) {
            //$user->getPassword() = md5($user->getPassword());
            echo 'both the passwords match';
            $msg = "both the passwords match";
            $bflag = true;
        } else {
            $msg = "password and confirm password do not match.";
        }

        if (($bflag == true) && ($user->getName() != "" && $user->getEmail() != "" && $user->getPassword() != "" && $user->getAadhar_no() != "")) {

            $file_name = basename($_FILES["uploadphoto"]["name"]);
            if($file_name === "") {
                throw new ApplicationException("Upload Photo cannot be Empty.");
            }

            $target_dir = "../uploads/";
            $file_name = $file_name;
            $target_file = $target_dir . $file_name;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["uploadphoto"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                    throw new ApplicationException("Upload Photo is not an Image.");
                }
            }

            // Check file size
            if ($_FILES["uploadphoto"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                throw new ApplicationException("Upload Photo is too large.");
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
                    $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                throw new ApplicationException("Upload Photo, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                $temp = explode(".", $_FILES["uploadphoto"]["name"]);
                $newfilename = round(microtime(true)) . '.' . end($temp);
                if (move_uploaded_file($_FILES["uploadphoto"]["tmp_name"], $target_dir.$newfilename)) {
                    echo "The file " . basename($_FILES["uploadphoto"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    throw new ApplicationException("Upload Photo, error uploading your file.");
                }
            }

            $con = db_connect();
            $msg = insertUserData($con, $user, $newfilename);
            //$msg = "error";

            echo "Return Value from InsertUserData :" . $msg;
            if ($msg === "success") {
                //$msg = '1';
                $_SESSION['emailID'] = $user->getEmail();
                $_SESSION['name'] = $user->getName();
                $_SESSION['user'] = serialize($user);
                $_SESSION['status'] = "success";
                header("Location:../index.php");
                exit;
            } else {
                $msg = '0';
            }
        } else {
            $_SESSION['message'] = $msg;
            $_SESSION['status1'] = "error";

            echo 'Error :' . $msg;
            header("Location:../register.php");
            exit;
        }
    } catch (ApplicationException $ae) {
        error_log($ae->getMessage());
        $_SESSION['message'] = $ae->getMessage();
        $_SESSION['status1'] = "error";

        echo 'Application Error :' . $msg;
        header("Location:../register.php");
        exit;
    } catch (Exception $e) {
        error_log($e->getMessage());
        $_SESSION['message'] = $e->getMessage();
        $_SESSION['status1'] = "error";

        echo 'Error :' . $msg;
        header("Location:../register.php");
        exit;
    }
    //header('Location:../register.php , action=success');
}

function insertUserData($con, Users $user, $file_name) {
    //$returnvalue = null;

    print_r("222. Print User Details :" . $user->getEmail());

    try {

        $date = explode('/', $user->dob);
        $time = mktime(0, 0, 0, intval($date[1]), intval($date[0]), intval($date[2]));
        $mysqldob = date('Y-m-d', $time);

        $query = "INSERT INTO USERS (EMAIL,PASSWORD,NAME,SURNAME,SEX,RELATION,
                        MOTHER_NAME,MOTHER_MAIDEN,USER_PHOTO, AADHAR_NO,MOB_NO,DOB,
                        MARITAL_STATUS,OCCUPATION,ORGANIZATION,ORG_ROLE,ORG_ADDRESS,
                        RES_ADDRESS1,RES_ADDRESS2,CITY,REGION,COUNTRY,POSTAL_CODE,
                        DISTRICT, LOKSABHA_CONSTY, ASSEMBLY_CONSTY, MANDAL,
                        SEND_JOB_OPPORTUNITIES,SEND_MATRIMONY,SEND_BUSINESS_PROMOTIONS,
                        SEND_BLOOD_DONATIONS,SEND_MONTHLY_NEWSLETTER,CREATED_DATE,UPDATED_DATE)
            VALUES ('" . $user->email . "','" . $user->password . "','" . $user->name . "','" . $user->surname . "','" . $user->sex . "','" . $user->relation . "','" .
                $user->mother_name . "','" . $user->mother_maiden . "','" . $file_name . "','" . $user->aadhar_no . "','" . $user->mob_no . "','" . $mysqldob . "','" .
                $user->marital_status . "','" . $user->occupation . "','" . $user->organization . "','" . $user->role . "','" . $user->address . "','" .
                $user->address1 . "','" . $user->address2 . "','" . $user->city . "','" . $user->region . "','" . $user->country . "','" . $user->postal_code . "','" .
                $user->district . "','" . $user->loksabha_consty . "','" . $user->assembly_consty . "','" . $user->mandal . "','" .
                $user->sendJobOpportunities . "','" . $user->sendMatrimony . "','" . $user->sendBusinessPromotions . "','" .
                $user->sendBloodDonations . "','" . $user->sendmonthlyNewsletters . "', SYSDATE(),SYSDATE())";

        //echo $query;
        if (!mysqli_query($con, $query)) {
            print_r(mysqli_error_list($con));
        }
        $returnvalue = "success";
    } catch (Exception $e) {
        error_log("DB Error:".$e->getMessage());
        throw new ApplicationException("DB Error:".$e->getMessage());
    } 
    finally {
        $con->close();
    }

    return $returnvalue;
}
