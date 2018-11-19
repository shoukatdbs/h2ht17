<?php
	
	$conn = new mysqli('localhost','root','','hnidb');
	
	
	if($_POST['rescheduler']=="rescheduler"){
		echo "rescheduling module pending" ;
	}
	elseif($_POST['cancel']=="cancel"){
	
	$sql = "update m_appoint_table set status='cancelled' where mid=1 ";
	}

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>