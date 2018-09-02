<!DOCTYPE html>
<html>
<head>
	<title>CREATE FORM HERE</title>
	<link rel="icon" href="icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>
<h1 style="text-align: center;font-family: sans-serif; color: #114358">FORM REGISTATION</h1>
<!--FORM CREATION HERE-->

<form style="text-align: center" method="POST" action="conn.php">
<p>NAME</p>   			   
 <input type="text" name="Name" class="" required=""></br></br>
<p>Collage</p> 		   
 <input type="text" name="Clg" required="">	</br></br>
<p>EMAIL</p>     		   
 <input type="email" name="Email" required=""></br></br>	
<p>Password</p>  	
 <input type="Password" name="Pass" required="">	</br></br>
<p>Re-type Password</p>   
<input type="Password" name="Repass" required=""></br></br>
<button class="animated rubberBand" id="crt">Signup</button>

</form>
<style>
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 20px;
    font-size: 16px;
    background-color: white;
    background-size: 20px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
}

input[type=password] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 20px;
    font-size: 16px;
    background-color: white;
    background-size: 20px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
}

input[type=email] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 20px;
    font-size: 16px;
    background-color: white;
    background-size: 20px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
}



input[type=text]:focus {
    width: 30%;
}
input[type=password]:focus {
    width: 30%;
}
input[type=email]:focus {
    width: 30%;
}


p{
	font-family: serif;
}

button
{
border: none;
background: #4CAF50;
padding: 15px;
}
button:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
body{
	background: #47BBC3;
	border: 7px solid gray;
}
</style>
</body>
</html>
