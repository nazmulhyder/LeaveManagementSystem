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
    height: 526px;
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
<?php
	include 'connect.php';
?>

<form>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="apfem.php">Application Form</a></li>
  <li><a href="lhfem.php">Leave History</a></li>
  <li><a href="logout.php?logout">Log Out</a></li>
</ul>

<div style="margin-left:25%;padding:1px 1px;">
   <img width="100%" height="525px" src="company-007.jpg" ></br>
 </div>
</form>
</body>
</html>
