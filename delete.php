<?php
    require("db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $db->query("DELETE FROM users WHERE id=$id");
    }

    header('location:index.php');
?>