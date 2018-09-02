<?php

$Name =$_POST['Name'];// we using post method so the data are specifi with name
$Clg=$_POST['Clg'];//here 3 line we create a variable $Name ok then we store the value of user given for example i give 'a' it will be store when i click the signup button
//i will post the video in tamil later..:)
$Email=$_POST['Email'];
$Pass=$_POST['Pass'];
$Repass=$_POST['Repass'];

$servername = "localhost"; //this are server details and user name password and database details
$username = "root";
$password = "";
$db ="db";
// Create connection

$conn = new mysqli($servername, $username, $password,$db);

//if any error in connection show error type
if(mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
			}
//no error on connection then do insert operation 			
else{
       $A="INSERT INTO form (Name,Clg,Email,Pass,Repass) VALUES (?,?,?,?,?)";	//store the perpare statment to $A
	   $stmt = $conn->prepare($A); //then prepare we do insert so prepare the operation it stored in $A variable .next line used for formate of data
       $stmt->bind_param("sssss",$Name,$Clg,$Email,$Pass,$Repass);//which formate did we store the datas like string ,flot, s for string, i-int,b - boolen.
       $stmt->execute();//finally execute the statement.
}

    echo "New record created successfully";


$conn->close();
?>
