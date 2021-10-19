<?php
include('db.php');

$first_name = $last_name = $email = $gender = $mobile_no = $date_of_birth = $hsc_result = $ssc_result = $course = $year = $semester = "";

$ins_success = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile_no = $_POST["mobile_no"];
    $date_of_birth = $_POST["date_of_birth"];
    $hsc_result = $_POST["hsc_result"];
    $ssc_result = $_POST["ssc_result"];
    $course = $_POST["course"];
    $year = $_POST["year"];
    $semester = $_POST["semester"];
}

$connection = new db();
$conobj=$connection->open_con();

$insert_success=$connection->add_data($conobj, $first_name, $last_name, $email, $gender, $mobile_no, $date_of_birth, $hsc_result, $ssc_result, $course, $year, $semester);

if($insert_success == true) $ins_success = "Data inserted successfully";
else $ins_success = "Data could not be inserted";

$connection->close_con($conobj);

?>