<?php
include("../controllers/functions.php");

try {
    $type = $_POST['type']; 
    $parentCode= $_POST['code'];
        
    $con = db_connect();
    $sql = "select CODE, DESCRIPTION from LOCATION where TYPE='".$type."' and PARENT_CODE='".$parentCode."' ";   
    $result = mysqli_query($con, $sql);
    $loc_array = array();

    while( $row = mysqli_fetch_array($result) ){
        $code = $row['CODE'];
        $description = $row['DESCRIPTION'];
        $loc_array[] = array("code" => $code, "description" => $description);
    }
    header('Content-Type: application/json; charset=UTF-8');
    // encoding array to json format
    echo json_encode($loc_array);
} catch(Exception $e) {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($e);
} finally {
    
}
    
    
