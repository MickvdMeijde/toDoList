<?php
    $months = ["january","february","march","april","may","june","july","august","september","october","november","december"];

    if(isset($_POST['Update'])) {
        editConfirm($id);
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Update</b></h1>

        <label class="createLabel"><b>Day of birth</b></label>
        <input type="number" min="1" max="31" name="day" placeholder="8" value="<?php echo $user['day']; ?>" required>
        <br>
        <label class="createLabel"><b>Month of birth</b></label>
        <select type="text" placeholder="Month" name="month" value="<?php echo $user['month']; ?>" required>
            <option value="<?php echo $user['month'] ?>" selected><?php echo $user['month'] ?></option>
            <?php
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Item</b></label>
        <input type="text" placeholder="shopping" name="item" value="<?php echo $user['item']; ?>" required>
        <br>
        <label class="createLabel"><b>Time</b></label>
        <input type="number" min="1" max="24" placeholder="00" name="time" value="<?php echo $user['time']; ?>" required>
        <br>
        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>