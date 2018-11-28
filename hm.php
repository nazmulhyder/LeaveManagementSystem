<?php session_start();
	require_once('../config.php');
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: aquamarine;
    position: fixed;
    height: 657px;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: darkblue;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
<body>
<form action="/action_page.php">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="apfem.html">Application Form</a></li>
  <li><a href="apfsp.html">Leave application</a></li>
  <li><a href="lh.html">Leave History</a></li>
</ul>

<div style="margin-left:25%;padding:1px 1px;">
   <img width="100%" height="657px" src="C:\xampp\htdocs\LeaveManagement/company-007.jpg" ></br>
 </div>
</form>
</body>
</html>