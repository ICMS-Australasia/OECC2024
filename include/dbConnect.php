<?php
    $server = 'localhost';
    $username = 'icmsa';
    $password = 'icmsa123';
    $dbName = 'oecc-roi';

   try {
    $conn = new PDO("mysql:host=$server;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } 
    catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $org = $_REQUEST['organisation'];
    $country = $_REQUEST['country'];
    $email = $_REQUEST['email'];
 
    $sql = "INSERT INTO oecc-roi VALUES ('$firstName','$lastName','$org', '$country', '$email')";
    $pdo->prepare($sql)->execute('$firstName','$lastName','$org', '$country', '$email');
   


    if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);

?>