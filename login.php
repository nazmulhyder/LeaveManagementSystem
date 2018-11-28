<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    var x = document.getElementById("mySelect").options[0].text;
    document.getElementById("demo").innerHTML = x;
}
</script>
</head>
<style>
input[type=text], input[type=password] ,select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
     }

input[type=submit] {
    width: 100%;
    background-color: darkblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#psw {
	text-align: right;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: darkred;
}
.container {
    padding: 16px;
}

input[type=submit]:hover {
    background-color: darkred;
}

</style>
<body>
<?php
include 'connect.php';
session_start();
if (!empty($_POST)){
	$user_name = $_REQUEST['user_name'];

	$password =$_REQUEST['password'];
        $query1 = "SELECT * FROM `ppl` WHERE user_name='$user_name' and password=$password and position='Employee'";
		$query2 = "SELECT * FROM `ppl` WHERE user_name='$user_name' and password=$password and position='1st Line Manager'";
	$result1 = mysqli_query($conn,$query1) or die(mysql_error());
	$result2 = mysqli_query($conn,$query2) or die(mysql_error());
	$rows1 = mysqli_num_rows($result1);
	$rows2 = mysqli_num_rows($result2);
        if($rows1==1){
	    $_SESSION['user_name'] = $user_name;
	    header("Location: hmfem.php");
         }
		 else if($rows2==1){
	    $_SESSION['user_name'] = $user_name;
	    header("Location: hmfsp.php");
         }
		 else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3></div>";
	}
}
?>	
<form method="post" style="border: 50px solid aquamarine">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Your User Name..." name="user_name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password..." name="password" required>
	
    <input type="submit" value="Login">
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <p id="psw">Need an account?   <a href="signup.php">Sign In</a>  here</p>
  </div>
</form>

</body>
</html>
