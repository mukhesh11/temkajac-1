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

echo 'Inside MemberSearchController.php...';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = new Users();
    
    $user->setName(test_input($_POST["name"]));
    $user->setSurname(test_input($_POST["surname"]));
    $user->setRelation(test_input($_POST["relation"]));
    $user->setMother_name(test_input($_POST["mothername"]));
    $user->setMob_no(test_input($_POST["mobileNumber"]));
    $user->setEmail(test_input($_POST["emailID"]));
    $user->setCountry(test_input($_POST["counry"]));
    $user->setRegion(test_input($_POST["region"]));
    $user->setDistrict(test_input($_POST["district"]));
    $user->setLoksabha_consty(test_input($_POST["lok_consty"]));
    $user->setAssembly_consty(test_input($_POST["asbly_consty"]));
    $user->setMandal(test_input($_POST["mandal"]));
    $user->setCity(test_input($_POST["city"]));
    
   
    try {
        
        $con = db_connect();
        
        $sql = "SELECT USERS.NAME, USERS.SURNAME, USERS.RELATION, USERS.MOTHER_NAME, USERS.MOB_NO, USERS.EMAIL, USERS.CITY,";
        $sql .= " USERS.MANDAL AS MANDAL_CODE, (SELECT DESCRIPTION AS CITY_DESC FROM LOCATION WHERE CODE=USERS.MANDAL AND TYPE=\"MANDALS\") AS MANDAL_DESC,";
        $sql .= " USERS.ASSEMBLY_CONSTY AS ASSEMBLY_CODE, (SELECT DESCRIPTION FROM LOCATION WHERE CODE=USERS.ASSEMBLY_CONSTY AND TYPE=\"ASBLY_CONSTY\") AS ASSEMBLY_DESC,";
        $sql .= " USERS.LOKSABHA_CONSTY AS LOK_CODE, (SELECT DESCRIPTION FROM LOCATION WHERE CODE=USERS.LOKSABHA_CONSTY AND TYPE=\"LOK_CONSTY\") AS LOK_DESC,";
        $sql .= " USERS.DISTRICT AS DISTRICT_CODE, ";
        //$sql .= "-- (SELECT DESCRIPTION FROM LOCATION WHERE CODE=USERS.DISTRICT AND PARENT_CODE=USERS.REGION AND TYPE=\"DISTRICTS\") AS DISTRICT_DESC,  ";
        $sql .= " USERS.REGION AS REGION_CODE, (SELECT DESCRIPTION FROM LOCATION WHERE CODE=USERS.REGION AND TYPE=\"STATE\") AS REGION_DESC, ";
        $sql .= " USERS.COUNTRY AS COUNTRY_CODE, (SELECT DESCRIPTION FROM LOCATION WHERE CODE=USERS.COUNTRY AND TYPE=\"COUNTRY\") AS COUNTRY_DESC  ";
        $sql .= " FROM `temkajac-db`.USERS AS USERS ";
        $sql .= " WHERE 1=1 ";
        if ($user !=null && $user->getName() && !empty($user->getName())) {
            $sql .= " AND USERS.NAME = '".$user->getName()."'";
        }
        if ($user !=null && $user->getSurname() && !empty($user->getSurname())) {
            $sql .= " AND USERS.SURNAME = '".$user->getSurname()."'";
        }
        if ($user !=null && $user->getRelation() && !empty($user->getRelation())) {
            $sql .= " AND USERS.RELATION = '".$user->getRelation()."'";
        }
        if ($user !=null && $user->getMother_name() && !empty($user->getMother_name())) {
            $sql .= " AND USERS.MOTHER_NAME = '".$user->getMother_name()."'";
        }
        if ($user !=null && $user->getMob_no() && !empty($user->getMob_no())) {
            $sql .= " AND USERS.MOB_NO = '".$user->getMob_no()."'";
        }
        if ($user !=null && $user->getEmail() && !empty($user->getEmail())) {
            $sql .= " AND USERS.EMAIL = '".$user->getEmail()."'";
        }
        if ($user !=null && $user->getCity() && !empty($user->getCity())) {
            $sql .= " AND USERS.CITY = '".$user->getCity()."'";
        }
        if ($user !=null && $user->getMandal() && !empty($user->getMandal())) {
            $sql .= " AND USERS.MANDAL = '".$user->getMandal()."'";
        }
        if ($user !=null && $user->getAssembly_consty() && !empty($user->getAssembly_consty())) {
            $sql .= " AND USERS.ASSEMBLY_CONSTY = '".$user->getAssembly_consty()."'";
        }
        if ($user !=null && $user->getLoksabha_consty() && !empty($user->getLoksabha_consty())) {
            $sql .= " AND USERS.LOKSABHA_CONSTY = '".$user->getLoksabha_consty()."'";
        }
        if ($user !=null && $user->getDistrict() && !empty($user->getDistrict())) {
            $sql .= " AND USERS.DISTRICT = '".$user->getDistrict()."'";
        }
        if ($user !=null && $user->getRegion() && !empty($user->getRegion())) {
            $sql .= " AND USERS.REGION = '".$user->getRegion()."'";
        }
        if ($user !=null && $user->getCountry() && !empty($user->getCountry())) {
            $sql .= " AND USERS.COUNTRY = '".$user->getCountry()."'";
        }
        
        $sql .= " ORDER BY USERS.NAME ";
        
        //echo "SQL: ".$sql;
        
        $result = mysqli_query($con, $sql);
        $user_array = array();
        

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //echo "NAME: " . $row["NAME"]. " - SurName: " . $row["SURNAME"]. " " . $row["RELATION"]. "<br>";
            
            $uResult = new Users();
           $uResult->setName($row['NAME']);
                $uResult->setSurname($row['SURNAME']);
                $uResult->setRelation($row['RELATION']);
                $uResult->setMother_name($row['MOTHER_NAME']);
                $uResult->setMob_no($row['MOB_NO']);
                $uResult->setEMAIL($row['EMAIL']);
                $uResult->setMandalDesc($row['MANDAL_DESC']); // if un-commented this part not getting output.
                $uResult->setAssembly_constyDesc($row['ASSEMBLY_DESC']);
                $uResult->setLoksabha_constyDesc($row['LOK_DESC']);
                $uResult->setDistrictDesc($row['DISTRICT_CODE']);
                $uResult->setRegionDesc($row['REGION_DESC']);
                $uResult->setCountryDesc($row['COUNTRY_DESC']);

                array_push($user_array, $uResult);
          }
          
          
        } else {
          echo "0 results";
        }

            $_SESSION['usersearch'] = serialize($user_array);
            $_SESSION['status'] = "success";
                
            header("Location:../search-members.php");
            exit;
        ////header('Content-Type: application/json; charset=UTF-8');
        // encoding array to json format
        echo "Result :". json_encode($user_array);
    } catch(Exception $e) {
        //header('Content-Type: application/json; charset=UTF-8');
        echo json_encode("Exception in Controller :". $e);
    } finally {
         $con->close();
    }
}