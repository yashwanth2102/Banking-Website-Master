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

<?php  //Delete from DB code      

	$customer_id = $_POST['c_id'];
	$sql = "DELETE FROM customer WHERE Customer_ID = $customer_id ";
    $conn->exec($sql);
    echo "The Customer was deleted successfully";
?>