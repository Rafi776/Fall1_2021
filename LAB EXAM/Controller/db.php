<?php
class db{
    function open_con()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "276914049";
        $db = "test_db";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else {
            return $conn;
        }
    }
    function add_data($conn, $first_name, $last_name, $email, $gender, $mobile_no, $date_of_birth, $hsc_result, $ssc_result, $course, $year, $semester)
    {
        $sql = "INSERT INTO new_students (FIRST_NAME, LAST_NAME, EMAIL, GENDER, MOBILE_NO, DATE_OF_BIRTH, HSC_RESULT, SSC_RESULT, COURSE, YEAR, SEMESTER)
                VALUES ('$first_name', '$last_name', '$email', '$gender', '$mobile_no', '$date_of_birth', '$hsc_result', '$ssc_result', '$course', '$year', '$semester')";
        $success = $conn->query($sql);
        return $success;
    }

    function close_con($conn)
    {
        $conn -> close();
    }
}