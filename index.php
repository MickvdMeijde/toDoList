<?php
    foreach($months as $row)
    {
        echo "<h1>" . $row ."</h1>";
        foreach($birthdays as $item){
            if($row == $item['month']){
                echo "<h2>" . $item['day'] . "</h2>
                <p>
                    <a href='edit/" . $item['id'] . "'>
                    " . $item['name'] . " (" . $item['year'] . ")</a>
                    <a href='delete/" . $item['id'] . "'>x</a>
                </p>";
            }
        }
    }
    echo "<p><a href='createItem.php'>+ Item</a></p>";
    echo "<p><a href='createList.php'>+ List</a></p>";
?>