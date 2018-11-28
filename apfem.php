<!DOCTYPE html>
<html>
<head>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
<script>
$( document ).ready(function() {
    $("#from-sdatepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
    $("#from-sdatepicker").on("change", function () {
        var fromdate = $(this).val();
    });
});
$( document ).ready(function() {
    $("#from-edatepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
    $("#from-edatepicker").on("change", function () {
        var fromdate = $(this).val();
    });
});
function validateForm1() {
    var x = document.forms["myForm"]["first_name"].value;
    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["last_name"].value;
    if (x == "") {
        alert("Last Name must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["subject"].value;
    if (x == "") {
        alert("User Name must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["discription"].value;
    if (x == "") {
        alert("Position must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	function myFunction() {
    var x = document.getElementById("mySelect").options[0].text;
    document.getElementById("demo").innerHTML = x;
    }
    	function myFunction() {
    var x = document.getElementById("mySelect1").options[0].text;
    document.getElementById("demo11").innerHTML = x;
   }
}
</script>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 14px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
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

input[type=submit]:hover {
    background-color: darkred;
}

div {
    border-radius: 5px;
    background-color: aquamarine;
    padding: 20px;
}
</style>
<body>
<?php
include 'connect.php';
if(!empty($_POST)) {
    $first_name =$_POST['first_name'];
	$last_name =$_POST['last_name'];
	$position = $_POST['position'];
	$subject = $_POST['subject'];
	$discription = $_POST['discription'];
	$sdate = date('y-m-d',strtotime($_POST['sdate']));
	$edate = date('y-m-d',strtotime($_POST['edate']));
	
	$sql1="SELECT id from ppl";
	$result = mysqli_query($conn,$sql1);
    $row = $result->fetch_assoc();
    $p_id = intval( $row['id'] );
    $sql="INSERT INTO `appli`(p_id,`first_name`, `last_name` , `position`, `subject`, `discription`,sdate,edate) 
	VALUES ('$p_id','$first_name','$last_name','$position','$subject','$discription','$sdate','$edate')";
	$qry=mysqli_query($conn,$sql);
	
		if($qry){
	header('Location: hmfem.php');
		}
		else{
			echo 'Failed';	
		}
};
?>
<div>
  <form method="post">
    <label>First Name</label>
    <input type="text" name="first_name" placeholder="Enter your first name...">
	
	<label>Last Name</label>
    <input type="text" name="last_name" placeholder="Enter your last name...">
	
	<label><b>Position</b></label>
	<select id="mySelect" name="position">
    <option>Employee</option>
  </select>
<p id="demo"></p>
    
    <label><b>Subject</b></label>
    <input type="text" name="subject" placeholder="Enter Subject...">
	
	<label><b>Reason For Leave</b></label>
    <input type="text" name="discription" placeholder="Enter the discription here...">
	
	 <label><b>Starting Date</b></label>
	 <input type="text" id="from-sdatepicker" name="sdate" placeholder="Enter the date...">
	 
	 <label><b>Ending Date</b></label>
     <input type="text" id="from-edatepicker" name="edate" placeholder="Enter the date...">

    <input type="submit" value="Apply">
  </form>
</div>
</body>
</html>
