<?php
include_once 'DBC.php';

$EID = $_POST['EID'];
$RNAME = $_POST['RName'];
$ADDR = $_POST['EAddress'];
$ECNo = $_POST['ECNo'];
$EJOB = $_POST['EJob'];
$ESal = $_POST['ESal'];

$sql = "INSERT INTO receptionist ( EID, RName ) VALUES ('$EID', '$RNAME');";

$sql1 = "INSERT INTO employee (EID, EName, EAddress, ECNo, EJob, ESal) values ( '$EID', '$RNAME', '$ADDR', '$ECNo', '$EJOB', '$ESal');";

mysqli_query( $conn, $sql);

mysqli_query( $conn, $sql1);

header("Location: ../Receptionist.html?Enter=success");