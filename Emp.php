<!DOCTYPE html>
<html>
<head>
<title> Employee </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<header>
</header>
<section>
<article>
<?php
include_once 'C:\xampp\htdocs\DB\DBC.php';
$Name = $_POST['EName'];
$sql = "SELECT * FROM Employee where EName='$Name';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["EID"]. "    Name: " . $row["EName"]. "   Address: " . $row["EAddress"]. "   Contact NO: ". $row["ECNo"]. "    Job: ". $row["EJob"]. "   Salary: ". $row["ESal"]. "<br>";
    }
} 
else {
    echo "0 results";
}
?>
<a href="C:\xampp\htdocs\DB\Employees.html">Go Back</a>
  </article>
</section>

<footer>

</footer>

</body>
</html>