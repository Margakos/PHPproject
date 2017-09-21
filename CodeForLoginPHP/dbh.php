 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbhost = "localhost";
$dbname = "smartphones";

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname;", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 