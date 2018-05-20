<!-- 
mysql
表 message(id,name,content,createtime)
create table message(
    id int not null auto_increment primary key,
    name varchar(20) not null default '' comment '姓名',
    content varchar(500) not null default '' comment '内容',
    createtime int not null default 0
);

insert into message (name,content,createtime) value('maying', 'hahaha', 1520731204);

字段是字符串  内容必须用引号
字段是int    内容不用引号

form表单    post 
url         get

{}    界定字符串里的变量  "i am {$a}" 

. 字符串拼接 
单引号里的内容原样输出
双引号可以解析变量，换行符，制表符等
单引号里不能有单引号，双引号里不能有双引号
\ 转义字符串，使之失去php功能

步骤：
1、入口文件 form.php
    包含一个模板 form.html
        写一个表单form  包含两个输入框 name content 提交按钮
        表单提交到message.php
2、留言处理文件 message.php
    接受post过来的两个值 name content
    mysqli 连接数据库
    拼凑sql 字符串
    用msyqli 执行 拼凑好的sql
    返回状态
 -->
<?php
    include "rds.php";
    $uname   = $_POST['uname'];
    $content = $_POST['content'];
    $time    = time(); //获取时间戳

    $id = getId();

    $key = 'MESSAGE_INFO_'.$id;
    $value = array(
            'id'        =>$id,
            'name'      => $uname,
            'content'   => $content
        );
    addMessage($key, $value);

    $listKey = "MESSAGE_LISTS";
    addMessageLists($listKey, $time, $id);
    // $mysqli = new mysqli('127.0.0.1', 'root', '', 'chat');

    // $sql = "insert into message (name,content,createtime) value('$uname', '$content', $time);";

    // $res = $mysqli->query($sql);
    // var_dump($res);


    // ''
    // ""
    // " ni \" hao "
    // 'ni " hao  '
    // $a = 'maying';
    // echo "i am {$a}";
    // echo "i am {$_POST['name']}"
    // $a = 'i am';
    // $b = 'maying';
    // $c = $a.$b; 
    // $c = 'i am ' . 'maying';  //i am maying
    // $c = $a.'maying';















