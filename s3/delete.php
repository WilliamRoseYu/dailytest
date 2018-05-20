<?php
    $id = $_GET['id'];
    if (empty($id)) {
        echo 'no data';
        die();
    }
    include "rds.php";

    $key = 'MESSAGE_INFO_'.$id;
    delMessage($key);


    $listKey = "MESSAGE_LISTS";
    delMessageListItem($listKey,$id);