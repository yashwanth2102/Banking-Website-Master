<?php  //Connect server code   $
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "guru99 bank";

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
	$c_name = $_POST['c_name'];
	$c_gen = $_POST['c_gen'];
	$c_DOB = $_POST['c_DOB'];
	$c_address = $_POST['c_address'];
	$c_city = $_POST['c_city'];
	$c_state = $_POST['c_state'];
	$c_pin = $_POST['c_pin'];
	$c_mno = $_POST['c_mno'];
	$c_email = $_POST['c_email'];
	$date_time = date("Y-m-d H:i:s");

	$sql = "INSERT INTO customer (Name,Gender,DOB,Address,City,State,Pincode,MobileNo,Email)
    VALUES ('$c_name', '$c_gen','$c_DOB','$c_address','$c_city','$c_state','$c_pin','$c_mno','$c_email')";
    $conn->exec($sql);
    echo "New Customer was added successfully";
?>

<?php
	/*
		a table 'customer' in 'Guru99_db' with attributes:
		'c_id' , 'c_name', 'c_gen','c_DOB','c_address','c_city','c_state','c_pin','c_mno','c_email','date_time'

		'c_id' is auto increment
	*/
?>