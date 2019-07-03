 <?php
/* connect to DataBase */
$servername = "localhost";
$username = "root";
$password = "mysql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    '<script type="text/javascript"> notifyConnect(); </script>';
    $stmtList = $conn->prepare("SELECT id, label FROM todolist");
    $stmtList->execute();
    $stmtItem = $conn->prepare("SELECT id, description, status, todolist_id FROM items");
    $stmtItem->execute();
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

/* put data in array */
$lists = $stmtList->fetchAll(PDO::FETCH_ASSOC);
$items = $stmtItem->fetchAll(PDO::FETCH_ASSOC);
?> 