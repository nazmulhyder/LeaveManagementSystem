<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="2">
  <tr>
    <th style="font-size:130%">First Name</th>
	<th style="font-size:130%">Last name</th>
	<th style="font-size:130%">Positiom</th>
	<th style="font-size:130%">Supervisor</th>
	<th style="font-size:130%">Subject</th>
	<th style="font-size:130%">Discription</th>
	<th style="font-size:130%">Starting Time</th>
	<th style="font-size:130%">Ending Time</th>
	<th style="font-size:130%">Status</th>
  </tr>

<?php
	require 'connect.php';
	$sql="SELECT p_id,`first_name`, `last_name`, `position`, `supervisor`, `subject`, `discription`, `sdate`, `edate` ,`status` FROM `appli` NATURAL JOIN ppl";
	$myData=mysqli_query($conn,$sql);
	while($data = mysqli_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['first_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['last_name'] . "</td>";	
	    echo '<td style="text-align:center;">' . $data['position'] . "</td>";		
		echo '<td style="text-align:center;">' . $data['supervisor'] . "</td>";	
		echo '<td style="text-align:center;">' . $data['subject'] . "</td>";
		echo '<td style="text-align:center;">' . $data['discription'] . "</td>";
		echo '<td style="text-align:center;">' . $data['sdate'] . "</td>";	
		echo '<td style="text-align:center;">' . $data['edate'] . "</td>";
        echo '<td style="text-align:center;">' . $data['status'] . "</td>";		
		echo "</tr>";
	}
?>

</table>
</br> </br>
<p><a href="hmfem.php">Back</a></p>
</form>
</body>
</html>