<?php
include_once 'DBC.php';

$RNo = $_POST['RNo'];
$PID = $_POST['PID'];
$EID = $_POST['EID'];
$RDetails = $_POST['RDetails'];
$ReID = $_POST['ReID'];

$sql = "INSERT INTO records ( RNo, PID, EID, RDetails, ReID ) VALUES ('$RNo', '$PID', '$EID', '$RDetails', '$ReID');";

mysqli_query( $conn, $sql);



header("Location: ../Records.html?Enter=success");