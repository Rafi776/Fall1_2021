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

    function searchEmp($conn,$id, $name, $salaryMin, $salaryMax){
        $result = '';
        if(empty($id) && empty($name) && empty($salaryMin) && empty($salaryMax)){
            $result = 'not found';
        }
        elseif(empty($name) && empty($salaryMin) && empty($salaryMax)){
            $result = $conn->query("SELECT * FROM employee WHERE ID='$id'");
        }
        elseif(empty($id) && empty($salaryMin) && empty($salaryMax)){
            $result = $conn->query("SELECT * FROM employee WHERE Name='$name'");
        }
        elseif(empty($id) && empty($name) && empty($salaryMax)){
            $result = $conn->query("SELECT * FROM employee WHERE Salary>='$salaryMin'");
        }
        elseif(empty($id) && empty($name) && empty($salaryMin)){
            $result = $conn->query("SELECT * FROM employee WHERE Salary<='$salaryMax'");
        }
        elseif(empty($salaryMin) && empty($salaryMax)){
            $result = $conn->query("SELECT * FROM employee WHERE ID='$id' AND Name='$name'");
        }
        elseif(empty($id) && empty($name)){
            $result = $conn->query("SELECT * FROM employee WHERE Salary>='$salaryMin' AND Salary<='$salaryMax'");
        }
        return $result;
    }

    function close_con($conn)
    {
        $conn -> close();
    }
}