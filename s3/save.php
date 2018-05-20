<?php
    $uname   = $_POST['uname'];
    $content = $_POST['content'];
    $id      = $_POST['id'];
    
    include "rds.php";
    $key = 'MESSAGE_INFO_'.$id;
    $value = array(
            'id'        => $id,
            'name'      => $uname,
            'content'   => $content
        );
    addMessage($key, $value);