<head>
    <title>Create An Item</title>
    <link type="text/css" rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/fa13d1e8a3.js"></script>
    <script src="js/notif.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<?php
    require 'db.php';
    $status = ["to-do","in progress","completed"];

    if(isset($_POST['Create'])) {
        $sql = "INSERT INTO items (description, status)  VALUES(:item,:status)";
         $query = $conn->prepare($sql);
         $query->bindParam(":item", $_POST["itemDescription"]);
         $query->bindParam(":status", $_POST["itemStatus"]);
         if ($query->execute() == TRUE) {

            '<script type="text/javascript"> notifyCreate(); </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1><b>Create</b></h1>

        <label class="createLabel"><b>Description</b></label>
        <input type="text" min="1" max="30" placeholder="Do Groceries" name="itemDescription" required>
        <br>
        <label class="createLabel"><b>Status</b></label>
        <select type="text" placeholder="Status" name="itemStatus" required>
            <?php
                foreach($status as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>
        <br>
        <button class="backButton" name="return" href="index.php"><i class="fas fa-angle-left"></i> RETURN</button>
        <button class="createButton" type="submit" name="Create" value="create">CREATE</button>
    </div>
</form>