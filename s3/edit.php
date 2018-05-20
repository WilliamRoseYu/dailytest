<?php
    $id = $_GET['id'];
    if (empty($id)) {
        echo 'no data';
        die();
    }

    include "rds.php";
    $infokey = 'MESSAGE_INFO_'.$id;

    $messageInfo = getMessageInfo($infokey);
    

    include "./view/edit.html";
    