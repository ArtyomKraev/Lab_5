<?php

    require('db.php');
    
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $usertag = $_POST['usertag'];

        $db->query("INSERT INTO users(name, tag) VALUES ('$username', '$usertag')");

        header('location:index.php');
    }

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

    <title>Create new account</title>

</head>

<body>
    
    <header>

        <a id = "back" href = "index.php"> <span>back</span> </a>

    </header>

    <div class = "island" id = "create_island">

        <form action="create.php" method="POST">

            <div> <input type = "text" name = "username" required placeholder = "your username"/> </div>
            <div> <input type = "text" name = "usertag" required placeholder = "your id"/> </div>
            <div> <input id = "create_button" type = "submit" name="submit" value = "create" /> </div>
            
        </form>

    </div>

</body>

</html>