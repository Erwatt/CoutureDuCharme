<?php

session_start();

include_once 'PHP/database.php';
$bdd = new PDO('mysql:host=localhost;dbname=coutureducharme', 'root', '');
$bdd->exec("SET NAMES utf8");

$all_messages = getAllMessages();

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Admin</title>
    </head>

    <body>

    <?php
    for ($i=0;$i<count($all_messages);$i++){ ?>

    <div class="message">
        <p>
            Message de <?= $all_messages[$i]['Name'] ?>
        </p>
        
        <p>
            Adresse mail : <?= $all_messages[$i]['Mail'] ?>
        </p>

        <p>
            Numéro de tél : <?= $all_messages[$i]['Phone'] ?>
        </p>

        <p>
            <?= $all_messages[$i]['Message'] ?>
        </p>

        <p>
            <a href="delete.php?id=<?=$i?>&delete=true">
                Supprimer le message
            </a>
        </p>
    </div>

    <?php 
    } ?>

    <div class="account">
        <form action="modifAccount.php" method="post">
            <input type="text" name="user" placeholder="UserName"></input>
            <input type="text" name="Newuser" placeholder="New UserName" required></input>
            <input type="text" name="mdp" placeholder="New password" required></input>
             
            <button type="submit">Modifier</button> 
        </form>
    </div>

    </body>
</html>

