<?php
include_once 'C:\xampp\htdocs\DB\DBC.php';

$EID = $_POST['EID'];
$DNAME = $_POST['DName'];
$ADDR = $_POST['Address'];
$ECNo = $_POST['ECNo'];
$EJOB = $_POST['EJob'];
$ESal = $_POST['ESal'];
$D_SP = $_POST['D_Sp'];

$sql = "INSERT INTO doctor ( EID, DNAME, D_Sp ) VALUES ('$EID', '$DNAME', '$D_SP');";

$sql1 = "INSERT INTO employee (EID, EName, EAddress, ECNo, EJob, ESal) values ( '$EID', '$DNAME', '$ADDR', '$ECNo', '$EJOB', '$ESal');";

mysqli_query( $conn, $sql);

mysqli_query( $conn, $sql1);

