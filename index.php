<?php

session_start();

include_once 'PHP/database.php';
$bdd = new PDO('mysql:host=localhost;dbname=coutureducharme', 'root', '');
$bdd->exec("SET NAMES utf8");

$page = (!empty($_GET['page'])) ? $_GET['page'] : 'home';

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="CSS/header.css"/>
        <link rel="stylesheet" href="CSS/footer.css"/>
        <link rel="stylesheet" href="CSS/common.css"/>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= ucfirst($page) ?></title>
        <?php
        if (file_exists("CSS/".$page.".css")) { ?>
            <link rel="stylesheet" href="CSS/<?= htmlspecialchars($page)  ?>.css"/>
        <?php
        }?>
    </head>
    <header>
        <?php require_once("PHP/header.php");?>
    </header>
    <body>
        <?php 
        require(__DIR__."../PHP/$page.php");
        ?>
        <div class="error_block">
            <?php
            //Affichage des erreurs ou message de validation s'ils existent
                if(isset($err_log)){
                    ?> <div class="err">
                        <?php echo($err_log)?>
                        </div>
                        <?php
                }
                else if(isset($err_reg)){
                    ?> <div class="err">
                        <?php echo($err_reg)?>
                        </div>
                        <?php
                }
                else if(isset($success_reg)){
                    ?> <div class="success">
                        <?php echo($success_reg)?>
                        </div>
                        <?php
                }
            ?>
        </div>
    </body>
    <hr>
    <footer>
        <?php require_once("PHP/footer.php")?>
    </footer>
</html>