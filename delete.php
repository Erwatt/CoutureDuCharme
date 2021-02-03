<?php

session_start();

include_once 'PHP/database.php';
$bdd = new PDO('mysql:host=localhost;dbname=coutureducharme', 'root', '');
$bdd->exec("SET NAMES utf8");

$all_messages = getAllMessages();

if(isset($_GET['delete']) && $_GET['delete']=="true")
    {
        deleteMessage($all_messages[$_GET['id']]['Name'], $all_messages[$_GET['id']]['Message']);
        $_GET['delete'] = 'false';
        
    }

?>

<!DOCTYPE html>

<html>

<head>
    <title>Message supprimé</title>
</head>

<body>
    <a href='admin.php'><img src='IMAGE/fleche_retour.png' class='fleche_retour'/></a>
    <h1>Le message a bien été supprimé</h1>
</body>

</html>