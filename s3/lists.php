<!-- 
1、连接数据库
2、构造查询sql
3、执行sql
4、判断是否有结果
    有：1、获取数据
        2、遍历 并 显示
    无：输出提示
 -->
<?php
    header("Content-type:text/html;charset=utf-8");
    include "rds.php";
    $key = "MESSAGE_LISTS";
    $res = getMessageList($key, 0, 10);
    $data = array();
    foreach ($res as $key => $value) {
        $infokey = 'MESSAGE_INFO_'.$value;
        $info = getMessageInfo($infokey);
        $data[] = $info;
    }

     //$data = $query->fetch_all(MYSQLI_ASSOC);
    foreach ($data as $key => $value) {
        echo $value['name']."<br>";
        echo $value['content']."<br>";
        echo "<a href='edit.php?id={$value['id']}'>修改</a>";
        echo "<a href='delete.php?id={$value['id']}'>删除</a>";
        echo "<br>";
        echo "<hr>";
    }


