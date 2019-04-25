<?php

if (isset($_POST['yes'])) {
    deleteRow($id);
    header('location: ' . URL . 'home/index');
}
elseif (isset($_POST['no'])) {
    header('location: ' . URL . 'home/index');
}

?>

<h1>Are you sure that you woulf like to delete <?php print_r($current['name']); ?>?</h1>
<form method="post" action="">
    <input type="submit" name="yes" value="Yes">
    <input type="submit" name="no" value="No">
</form>