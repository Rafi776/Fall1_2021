
<!doctype html>
<html lang="en">
<head>
    <title>Final Lab</title>
</head>
<body>
<h1>Search Employee</h1>
<label for="id">Search by ID:</label> <input type="text" name="id" id="id"><br>
<label for="name">Search by Name:</label> <input type="text" name="name" id="name"><br>
<label >Search by Salary: </label>
<label for="salary_min">Minimum:</label> <input type="text" name="salary_min" id="salary_min"><br>
<label for="salary_max">Maximum:</label> <input type="text" name="salary_max" id="salary_max"><br>
<button type="button" onclick="getEmp()">Search</button>
<h3>Search Results: </h3>
<p id="result"></p>

<script src="js/script.js"></script>
</body>
</html>