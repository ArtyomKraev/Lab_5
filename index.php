<?php 

    require("db.php");

    $users = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" href = "src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <title>My accounts</title>

</head>

<body>
    <header>

         <h1 id = "logo">LOGO</h1>

    </header>

    <div>
    
        <?php

        foreach ($users as $user) 
        {
        ?>
            
            <div class = "island" id = "account">

                <div class= "info">
                    <span>user: </span> <span class="account_name"> <?php echo $user['name']?></span>
                    <span>id: </span> <span class="account_id"> <?php echo $user['tag']?></span>
                </div>

                <div class = "buttons">
                    <a id = "button" href="user.php?id=<?= $user['id']?>">switch</a>
                    <a id = "button" href="update.php?id=<?= $user['id']?>">change</a>
                    <a id = "button" href="delete.php?id=<?= $user['id']?>">delete</a>
                </div>

            </div>

        <?php
        }

        ?>
       
    </div>

    <div id = "create">
        <a id = "button" href="create.php">create a new account</a>
    </div>

</body>

</html>