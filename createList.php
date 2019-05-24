<?php
    require 'db.php';
    $months = ["january","february","march","april","may","june","july","august","september","october","november","december"];

    if(isset($_POST['Create'])) {
        $sql = "INSERT INTO todolist (label)  VALUES(:label)";
         $query = $conn->prepare($sql);
         $query->bindParam(":label", $_POST["listLabel"]);
         if ($query->execute() == TRUE) {

            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>List Name</b></label>
        <input type="text" min="1" max="20" name="listLabel" placeholder="list name" required>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>