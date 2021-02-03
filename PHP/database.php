<?php

function addMessage($name, $mail, $phone, $message){
    $query = 'INSERT INTO contact(Name, Mail, Phone, Message) VALUES(?,?,?,?)';
    $infos= array($name, $mail, $phone, $message);
    return executeQuery($query, $infos);
}

function executeQuery($query, $infos){
    global $bdd;
    try{
        $answers = $bdd->prepare($query);
        if(is_array($infos)) $answers->execute($infos);

        else $answers->execute(array($infos));

        $datas = $answers->fetchall();
        $answers->closeCursor();

        return $datas;
    }
    catch(PDOException $e){
        var_dump($e);
    }
}

function getAllMessages(){
    $query = 'SELECT * FROM contact';
    return executeQuery($query, '');
}

function deleteMessage($name, $message){
    $query = 'DELETE FROM contact
    WHERE contact.Name=? AND contact.message=?';
    $infos = array($name,$message);
    return executeQuery($query, $infos);
}

?>