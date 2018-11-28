<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="2">
  <tr>
    <th style="font-size:130%">Subjects</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM `appli` ";
	$myData=mysqli_query($conn,$sql);
	while($data = mysqli_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['subject'] . "</td>";		
		echo '<td> <a href="apfap.php?id='. $data['id'] . '">View</a></td>';
		echo "</tr>";
	}
?>
</table>
</br> </br>
<p><a href="hmfsp.php">Back</a></p>
</body>
</html>