<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$conpwd = $_POST['conpwd'];
	
	$con = new mysqli('localhost','root','123456','test');
	if($con){
		$sql="insert into 'data'(Username,Email,Password,Confirm_Password)values('$username','$email','$pwd','$conpwd')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "Data inserted successfully";
		}
	}else{
		die(mysqli_error($con));
	}

}else{
	die(mysqli_error($con));
}

}
?>