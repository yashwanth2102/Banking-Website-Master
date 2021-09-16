<?php  //Connect server code   $
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "Guru99_db";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully";
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
?>

<?php  //Insert in DB code      
	$c_id = $_POST['c_id'];
	$acc_type = $_POST['acc_type'];
	$date_time = date("Y-m-d H:i:s");

	$sql = "INSERT INTO accounts (customer_id,account_type,datetime)
    VALUES ('$c_id', '$acc_type','$date_time')";
    $conn->exec($sql);
    echo "New Account was added successfully";
?>

<?php
	/*
		a table 'accounts' in 'Guru99_db' with attributes:
		'account_no', 'customer_id' , 'account_type', 'date_time'

		'account_no' is auto increment
	*/
?>