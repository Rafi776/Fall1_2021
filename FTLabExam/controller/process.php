<?php
include('../model/db.php');

$id = $_GET['id'];
$name = $_GET['name'];
$salaryMin = $_GET['salaryMin'];
$salaryMax = $_GET['salaryMax'];

$connection = new db();
$conobj=$connection->open_con();

$result = $connection->searchEmp($conobj, $id, $name, $salaryMin, $salaryMax);

if($result == 'not found') echo 'No search criteria was provided';
elseif ($result->num_rows > 0){
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Joining Date</th><th>Salary</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["JoiningDate"]."</td><td>".$row["Salary"]."</td></tr>";
    }
}
else{
    echo 'No results found';
}

?>