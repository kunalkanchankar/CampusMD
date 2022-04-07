<?php 
echo"hbjhbjbjb";
	$con = new mysqli('localhost:3306','root','kunal18');
	if($con->connect_error){
		die('connection fail : '.$con->connect_error);
	}else{
		$stmt = $con->prepare("select * from ");
		$stmt->execute();
		$stmt_result = $stmt->get_result();

	}
	echo "connection";
mysqli_close($con);


 ?>