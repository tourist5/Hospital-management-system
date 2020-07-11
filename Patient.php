<?php
include_once 'DBC.php';
$NAME = $_POST['Name'];
$ADDR = $_POST['Address'];
$CNo = $_POST['CNo'];
$D_O_Ad = $_POST['D_O_Ad'];
$PID = $_POST['PID'];
$D_O_Dis = $_POST['D_O_Dis'];

$sql = "INSERT INTO patient ( PID, NAME, Address , CNo, D_O_Ad, D_O_Dis ) VALUES ('$PID', '$NAME', '$ADDR', '$CNo', '$D_O_Ad', '$D_O_Dis');";


mysqli_query( $conn, $sql);


header("Location: ../Patient.html?Enter=success");