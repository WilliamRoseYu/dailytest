<?php 
// phpinfo();
// die();
// $arr[1] = 1;
// for($i = 2;$i < 100;$i++)
// {
//     $arr[$i] = $arr[$i-1] + $arr[$i-2];
// }
// echo join(",",$arr);//将数组合并为一个字符串输出
// 
function f($n, $arr)
{
    
    if( isset($arr[$n]) ) {  
        return $arr[$n];
    }
    return f($n-1, $arr) + f($n-2, $arr);
}
$arr = [
    0 => 1,
    1 => 1,
];
for($i = 0; $i < 20	; ++$i)
{
    $arr[$i] = f($i, $arr);
    echo f($i, $arr).' ';
}
