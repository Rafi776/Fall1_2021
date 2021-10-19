<?php include "Controller/process.php"?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
<h1>Please fill up the form</h1>
<hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="first_name">First Name:</label> <input type="text" name="first_name" ><br>
    <label for="last_name">Last Name:</label> <input type="text" name="last_name"><br>
    <label for="email">Email: </label> <input type="text" name="email"><br>
    <label for="gender">Designation:</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br>
    <label for="mobile_no">Mobile No: </label> <input type="text" name="mobile_no"><br>
    <label for="date_of_birth">Date of Birth: </label> <input type="date" name="date_of_birth"><br>
    <label for="hsc_result">HSC Result:</label> <input type="text" name="hsc_result" ><br>
    <label for="ssc_result">SSC Result:</label> <input type="text" name="ssc_result"><br>
    <label for="course">Select a course you want to enroll:</label>
    <select name="course">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
    </select><br>
    <label for="year">Choose enrolling year:</label>
    <select name="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select><br>
    <label for="semester">Choose enrolling semester:</label>
    <select name="semester">
        <option value="Summer">Summer</option>
        <option value="Fall">Fall</option>
        <option value="Spring">Spring</option>
    </select><br>
    <input type="submit" name="submit" value="Insert Data">
</form>>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo  $ins_success . "<br>";
}
?>


</body>
</html>