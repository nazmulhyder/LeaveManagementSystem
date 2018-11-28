<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
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
    
    if (!isset($_GET['id']) || $_GET['id'] == NULL) {
        echo "<script>window.location = 'aps.php'; </script>";
    }else {
        $id = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['id']);
    }
 ?>
<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $appStatus  = $_POST['status'];
        $appId      = $_POST['appId'];
        $appComment = $_POST['comment'];
        $sql = "UPDATE `appli` SET status = '$appStatus', comment  = '$appComment' WHERE id = '$appId'";
        $qry = mysqli_query($conn,$sql);
            if($qry){
                header('Location: hmfsp.php');
            }
            else{
                echo 'Failed to Updated..';  
            }
    };
?>
<?php           
    $getQuerry = "SELECT * FROM appli WHERE id = '$id'";
    $getResult = mysqli_query($conn, $getQuerry);

    if ($getResult) {
        while ($result= $getResult->fetch_assoc()) {
 ?>
<div>
<form method="post">
    <label><b>First Name</b></label>
    <input type="text" name="first_name" value="<?php echo $result['first_name']; ?>" readonly>
	
	<label><b>Last Name</b></label>
    <input type="text" name="last_name" value="<?php echo $result['last_name']; ?>" readonly>
	
    <label><b>Position</b></label>
    <input type="text" name="position" value="<?php echo $result['position']; ?>" readonly>

    <label><b>Subject</b></label>
    <input type="text" name="subject" value="<?php echo $result['subject']; ?>" readonly>
	
	<label><b>Reason For Leave</b></label>
    <input type="text" name="discription" value="<?php echo $result['discription']; ?>" readonly>
	
	<label><b>Status:</b></label><br>
    <input type="radio" name="status" value="Approved" checked> Approved</br> 
    <input type="radio" name="status" value="Denied"> Not Approved</br>

    <label><b>Comment</b></label>
    <input type="text" name="comment" placeholder="Say something...">         
    <input type="hidden" name="appId" value="<?php echo $result['id']; ?>">

    <input type="submit" value="Submit">
	<?php } } ?>
</form>
</div>
</body>
</html>

