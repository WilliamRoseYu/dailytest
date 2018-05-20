<?php
$redis = new \Redis();
$redis ->connect("47.93.220.17",6379);
$arr = $redis->keys('*');
var_dump($arr);
