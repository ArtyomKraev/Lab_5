<?php

    require("db.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $id = $_GET['id'];
        $users = $db->query("SELECT * FROM users WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
        $users = $users[0];
    }

    else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $usertag = $_POST['usertag'];

        $db->query("UPDATE users SET name = '$username', tag = '$usertag' WHERE id=$id");

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

        <form action="update.php" method="POST">

            <div> <input type = "text" name = "username" required value="<?php echo $users['name'] ?>"/> </div>
            <div> <input type = "text" name = "usertag" required value="<?php echo $users['tag'] ?>"/> </div>
            <div> <input type="hidden" name="id" value="<?php echo $users['id'] ?>" /> </div>
            <div> <input id = "create_button" type = "submit" name="submit" value = "change" /> </div>
            
        </form>

    </div>

</body>

</html>