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

<?php  //Delete from DB code      

	$acc_no = $_POST['acc_no'];
	$sql = "DELETE FROM accounts WHERE account_no = $acc_no ";
    $conn->exec($sql);
    echo "The Account was deleted successfully";
?>
