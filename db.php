<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sms";

$name="msr nayeem";
$uname="nayeem";
$email="msr@gmail.com";
$pass=123456;

$insertQ="INSERT INTO admin(name,username,email,password) VALUES('".$name."','".$uname."','".$email."','.$pass.')";
$showQ="SELECT * FROM admin";
$updateQ="UPDATE `admin` SET `name` = 'md shahidur rahman nayeem' WHERE `admin`.`username` = '".$uname."'";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("conn failed: ".$conn->connect_error);
}
else{
	//FOR_INSERT_DATA_INTO_TABLE
	$iresult=$conn->query($insertQ);
	if($iresult){
		echo "Inserted";
	}
	else{
		echo "Already inserted inserted<br>";
	}
	//FOR_VIEW_DATA_FROM_TABLE
	$showResult=$conn->query($showQ);
	if($showResult->num_rows>0){
	while($row=$showResult->fetch_assoc()){
		echo "<br>"."Name: ".$row["name"]." Username: ".$row["username"]." Email: ".$row["email"]." Password: ".$row["password"]."<br>";
		}
	}
	else{
		echo "No data found";
	} 

	//FOR_UPDATE_DATA
	$updateResult=$conn->query($updateQ);
	if($updateResult){
		echo "Updated";
	}
	else{
		echo "Not updated <br>";
	}
	//FOR_VIEW_DATA_FROM_TABLE
	$showResult=$conn->query($showQ);
	if($showResult->num_rows>0){
	while($row=$showResult->fetch_assoc()){
		echo "<br>"."Name: ".$row["name"]." Username: ".$row["username"]." Email: ".$row["email"]." Password: ".$row["password"]."<br>";
		}
	}
	else{
		echo "No data found";
	} 
}
?>