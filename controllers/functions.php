<?php

//ini_set('memory_limit','1024M');
//include_once '../data/Users.php';
//include 'registerController.php';
//session_start();

function db_connect() {

    $hostname = "107.180.12.18";
    $username = "temka-db-admin";
    $password = "jacpwd";
    $dbname = "temkajac-db";

    $con = new mysqli($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        printf("connection failed: %s\n", mysqli_connect_error());
        exit();
    } else {
        echo 'connected to DB';
    }

    return $con;
}


function run_query($query) {
    return mysqli_query(run_query, $query);
}

function real_escape_string($con, $query) {
    return mysqli_real_escape_string($con, $query);
}

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
/*
  function affected_rows() {
  return mysqli_affected_rows(db_connect());
  }

  function fetch_array($query) {
  return mysqli_fetch_array($query);
  }

  function count_rows($sql) {
  return mysqli_num_rows($sql);
  }

  function fetch_assoc($result) {
  return mysqli_fetch_assoc($result);
  }

  function fetch_row($result) {
  return mysqli_fetch_row($result);
  }

  function get_max($key, $tbl) {
  $query = run_query("select MAX($key) as maxid from $tbl");
  $row = fetch_assoc($query);
  return $row['maxid'] + 1;
  }

  function login($user, $pass) {
  $sql = run_query("SELECT * FROM `register.php` as l INNER JOIN employees as e ON l.login_id = e.emp_login_id INNER JOIN usertype as u ON u.ut_id = l.login_type WHERE l.login_acde = '1' AND l.login_open='1' AND e.emp_open='1' AND u.ut_open='1' AND l.login_name='$user' AND l.login_password='$pass'");
  $rec = fetch_array($sql);
  $count = count_rows($sql);
  if ($count == 1) {
  setsession('login_id', $rec["login_id"]);
  setsession('username', $rec["emp_name"]);
  return true;
  }
  return false;
  }
 */



/*
function updatedata($user, $table_name, $cond) {
    $count = 0;
    $fields = '';
    foreach ($user as $col => $val) {
        if ($count++ != 0)
            $fields .= ', ';
        $col = real_escape_string($col);
        $val = real_escape_string($val);
        $fields .= "`$col` = '$val'";
    }
    $sql = "UPDATE `$table_name` SET $fields $cond";
    if ($query == run_query($sql)) {
        return TRUE;
    }
    return FALSE;
}

function redirect($uri) {
    echo "<SCRIPT>window.location.href='?page=$uri';</SCRIPT>";
}

function select_rows_by_condition($table, $cond) {
    $arr = array();
    $query = run_query("select * from $table  $cond");
    while ($row9 = fetch_assoc($query)) {
        $arr[] = $row9;
    }
    return $arr;
}

function select_rowby_condition($col, $table, $cond) {
//	echo "select $col from $table  $cond";exit;
    $row = array();
    $query = run_query("select $col from $table  $cond");
    $row9 = fetch_assoc($query);
    return $row;
}

function get_row_count_by_condition($table, $cond) {
//        return "select * from $table  $cond";
    $query = run_query("select * from $table  $cond");
    $count = count_rows($query);
    return $count;
}

function select_condition($col, $table, $cond) {
    //       echo  "select $col from $table  $cond";exit;
    $arr = array();
    $query = run_query("select $col from $table  $cond");
    while ($row9 = fetch_assoc($query)) {
        $arr[] = $row9;
    }
    return $arr;
}

function get_count_condition($col, $table, $cond) {
//	/echo "select $col from $table  $cond";exit;
    $query = run_query("select $col from $table  $cond");
    $count = count_rows($query);
    return $count;
}

function get_fetchdata($query) {
    $arr = array();
    while ($row9 = fetch_assoc($query)) {
        $arr[] = $row9;
    }
    return $arr;
}

function selectdata($table) {
//        return "select * from $table";exit;
    $query = run_query("select * from $table");
    $row = fetch_assoc($query);
    return $row;
}
 *
 */

?>
