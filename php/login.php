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
	$username = $_POST['UserID'];
	$password = $_POST['login_pass'];

	$sql = "SELECT ID, Username, Password, Type FROM login_details 
			WHERE Username='$username' AND Password='$password'";

	$st = $conn->prepare($sql);		
    $st->execute();
    $row_count = $st->rowCount();
    //echo "New Customer was added successfully";

    if ($row_count > 0) {
    	//echo "user found";
    	while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    		$type = $row["Type"];
    		$name = $row["Username"];
    		if($type=="manager"){
    			header("Location: ../manager.html");
    		}
    		else{
    			header("Location: ../customer.html");
    		}
    	}
    }
    else{
    	echo "Sorry. The entered credentials does not exist :(";
    }
?>

<?php