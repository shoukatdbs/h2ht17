<<<<<<< HEAD
<?php
	
	$conn = new mysqli('localhost','root','','hnidb');
	
	
	$date=$_POST["user_date"];
	$time=$_POST["user_date"];
	
	$sql = "INSERT INTO appoint_table  values(1,'".$_POST['user_location']."','".$date."','".$time."','".$_POST['user_subject']."','".$_POST['user_reason']."','pending')";


if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
=======
<?php
	
	$conn = new mysqli('localhost','root','','hnidb');
	
	
	$date=$_POST["user_date"];
	$time=$_POST["user_date"];
	
	$sql = "INSERT INTO appoint_table  values(1,'".$_POST['user_location']."','".$date."','".$time."','".$_POST['user_subject']."','".$_POST['user_reason']."','pending')";


if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
>>>>>>> deb597ad2b76766fb4b5715b066b27368d4bc6ee
?>