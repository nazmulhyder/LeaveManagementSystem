<?php
//include 'connect.php';
class em {
	private $db;
	public function _construct(){
		$this->db=new connect();
	}
	public function eSignup($data){
		$name  =$data['name'];
		$uname =$data['username'];
		$email =$data['email'];
		$pwd   =md5($data['password']);
		
		$sql="INSERT INTO su (name,username,email,password) VALUES($name,$uname,$email,$pwd)";

		if(mysqli_query($link,$sql)){
			$msg= "<div class='alert alert-success'>Signup Completed</div>";
			return $msg;
		}	
		else{
			$msg="<div class='alert alert-success'>Signup Failed</div>";
			return $msg;
		}
	}
}
?>