<?php
$EmployeeID= $_POST['EmployeeID'];
$FirstName= $_POST['FirstName'];
$LastName= $_POST['LastName'];
$dbhost = 'localhost';
$dbuser = 'raam';
$dbpass = 'test1234';
$dbname = 'mydb';

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($con)
 echo 'CONNECTED TO  mydb....';
 else
 echo ' not CONNECTED TO  mydb....';
$sql = "INSERT INTO Employees (EmployeeID, FirstName, LastName)
VALUES ($EmployeeID, '$FirstName', '$LastName')";
$query=mysqli_query($con,$sql);
if($query)
echo "New record created successfully";
Include 'index.html';
?>
