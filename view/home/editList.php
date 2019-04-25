<?php
    $months = ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"];

    if(isset($_POST['Update'])) {
        editConfirm($id);
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Update</b></h1>

        <label class="createLabel"><b>Day</b></label>
        <input type="number" min="1" max="31" name="day" placeholder="8" value="<?php echo $user['day']; ?>" required>
        <br>
        <label class="createLabel"><b>Month</b></label>
        <select type="text" placeholder="Maand" name="month" value="<?php echo $user['month']; ?>" required>
            <option value="<?php echo $user['month'] ?>" selected><?php echo $user['month'] ?></option>
            <?php
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Name</b></label>
        <input type="text" placeholder="John Doe" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>