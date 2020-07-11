<!DOCTYPE html>
<html>
<head>
<title> Patient </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<header>
</header>
<section>
<article>
<?php
include_once 'C:\xampp\htdocs\DB\DBC.php';
$Name = $_POST['PName'];
$sql = "SELECT patient.PID,Name,Address,CNo,D_O_Ad,D_O_Dis, RID, Quantity, MName, RNo, EID, RDetails, ReID FROM medicines, patient, records where medicines.PID=patient.PID AND records.PID=patient.PID AND Name='$Name';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["PID"]. "    Name: " . $row["Name"]. "   Address: " . $row["Address"]. "   Contact NO: ". $row["CNo"]. "    Date Of Admission: ". $row["D_O_Ad"]. "   Date Of Discharge: ". $row["D_O_Dis"]. "<br>";
	echo "Medicine ID: " . $row["RID"]. "    Quantity: " . $row["Quantity"]. "   Medicine Name: " . $row["MName"]. "<br>";
 	echo "Record No: " . $row["RNo"]. "    Employee ID: " . $row["EID"]. "   Record Details: " . $row["RDetails"]. "   Room ID:". $row["ReID"]. "<br>"."<br>"."<br>";   
   }
} 
else {
    echo "0 results";
}
$conn->close();
?>
<a href="C:\xampp\htdocs\DB\Pat.html">Go Back</a>
  </article>
</section>

<footer>

</footer>

</body>
</html>