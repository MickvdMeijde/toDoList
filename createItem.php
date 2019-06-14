<?php
    require 'db.php';
    $status = ["to-do","in progress","completed"];

    if(isset($_POST['Create'])) {
        $sql = "INSERT INTO items (description, status)  VALUES(:item,:status)";
         $query = $conn->prepare($sql);
         $query->bindParam(":item", $_POST["itemDescription"]);
         $query->bindParam(":status", $_POST["itemStatus"]);
         if ($query->execute() == TRUE) {

            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<head>
    <title>Create An Item</title>
</head>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

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
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>