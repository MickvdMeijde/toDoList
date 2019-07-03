<?php  
    require('db.php');
?>

<head>
    <title>Your to-do lists</title>
    <link type="text/css" rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/fa13d1e8a3.js"></script>
    <script src="js/notif.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<?php
    print_r($items);
    foreach($lists as $list){
        echo('<div>'.$list['label'].'</div>');
        foreach($items as $item){
            if ($item['todolist_id'] == $list['id']){
                echo('<p>'.$item['description'].'</p>');
            }
        } 
        echo "<button><a href=\"createItem.php?list_id=$list[id]\">+ Item</a></button>";
    }

    echo "<button><a href='createList.php'>+ List</a></button>";
?>