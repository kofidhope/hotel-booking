<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "hbwebsite";

$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die("cannot connect to database: " . mysqli_connect_error());
}

function filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];

    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed -SELECT: " . mysqli_stmt_error($stmt));
        }
    } else {
        die("query cannot be prepared -SELECT: " . mysqli_error($con));
    }
}

function update($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];

    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);
            die("query cannot be executed -Update: " . $error);
        }
    } else {
        die("query cannot be prepared -Update: " . mysqli_error($con));
    }
}

// if (isset($_POST['upd_general'])) {
//     $frm_data = filteration($_POST);

//     $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
//     $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
//     $res = update($q, $values, 'ssi');
//     echo $res;
// }
?>
