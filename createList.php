<?php

    $months = ["january","february","march","april","may","june","july","august","september","october","november","december"];

    if(isset($_POST['Create'])) {
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Day</b></label>
        <input type="number" min="1" max="31" name="day" placeholder="Day" required>
        <br>
        <label class="createLabel"><b>Month</b></label>
        <select type="text" placeholder="Month" name="month" required>
            <?php
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Item</b></label>
        <input type="text" placeholder="Do Groceries" name="name" required>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>