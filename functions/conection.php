<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$dsn="mysql:host=$servername; dbname=$dbname;";
try{
	$Conect=new PDO($dsn,$username,$password);
$Conect->exec("SET CHARACTER SET UTF8");
$Conect->exec("set names utf8");
}
catch(PDOException $Error){
	echo "Connet error in server".$Error->__toString();
	
}


//$Conect= mysqli_connect('localhost','root','');
//mysqli_select_db($Conect,'mydb');
?>