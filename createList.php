<head>
    <title>Create A List</title>
    <link type="text/css" rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/fa13d1e8a3.js"></script>
    <script src="js/notif.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<?php
    require 'db.php';

    if(isset($_POST['Create'])) {
        $sql = "INSERT INTO todolist (label)  VALUES(:label)";
         $query = $conn->prepare($sql);
         $query->bindParam(":label", $_POST["listLabel"]);
         if ($query->execute() == TRUE) {

            '<script type="text/javascript"> notifyCreate(); </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

    <div class="create">
        <h1><b>Create</b></h1>
        <form method="POST" action="">
            <label class="createLabel"><b>List Name</b></label>
            <input type="text" min="1" max="20" name="listLabel" placeholder="list name" required>
            <br>
            <button class="createButton" type="submit" name="Create" value="create">CREATE</button>
        </form>
    </div>
    <button class="backButton" name="return"><a href="index.php"><i class="fas fa-angle-left"></i> RETURN</a></button>
    <button onclick=notifyConnect()>notify</button>