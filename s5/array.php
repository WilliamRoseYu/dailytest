<?php
    // echo 'array:';
    // $arr = range_my(4,20);
    // unset($arr[3]);
    // $arr = array_values($arr);
    // $json = json_encode($arr);
    // echo $json;
    // $arr  = array(array('name'=>'maying','age'=>25,'sex'=>1),array('name'=>'maying','age'=>25,'sex'=>1));
    // $arr  = array('name'=>'maying','age'=>25,'sex'=>1);
    // $json = json_encode($arr);
    // echo $json;

    // $res = is_array($arr);
    // var_dump($res
    //$arr[] = 21;
    // array_unshift($arr, 21);
    // array_push($arr, 22);
   
    // $a = array_shift($arr);
    // $b = array_pop($arr);

    // $c = 4;
    // $d = in_array($c, $arr);
    // $e = array_search($c, $arr);
    // var_dump($d);
    // var_dump($e);
    // var_dump($arr);
    // $arr  = array('name'=>'maying','age'=>25,'sex'=>1);
    // $keys = array_keys($arr);
    // var_dump($keys);
    // $keys = array_values($arr);
    // var_dump($keys);
    // 
    // 
    // 
    // $arr = array('1','3','5','6','1','3');
    // $arr = array_unique($arr);
    // var_dump($arr);

    // $res =  array_reverse($arr);
    // var_dump($res);

    // $r = array_flip($arr);
    // var_dump($r);
    // $a = array('a','b','c');
    // $b = array('e','f');
    // $e = array('g','h');
    // $c = array_merge($b,$e,$a);
    // var_dump($c);
    // 
    //$a = range(1,10);
    // $e = array('a','b');
    // $b = array_splice($a, 6, 0, $e);
    // var_dump($a);
    // var_dump($b);

    // $key = array_rand($a);
    // echo $a[$key];
    //var_dump($key);
    // shuffle($a);
    // echo $a[0];
    // var_dump($a);
    // 
    // $a = range(1,100);
    // $b = array_chunk($a, 30);
    // var_dump($b);
    // //var_dump($a);
    // serialize(value)
    // 
    // $a = 'maying,xiaoming,xiaohong,xiaoli';
    // $arr = explode(',', $a);
    // // var_dump($arr);
    // // $str = implode('|', $arr);
    // // echo $str;

    // next($arr);    
    // next($arr);    
    // prev($arr);
    // end($arr);
    // reset($arr);
    // $b = current($arr);
    // var_dump($b);
    // 
    
// array_keys()
// array_values()

    $arr  = array('name'=>'maying','age'=>25,'sex'=>1);
    var_dump($arr);
    print_r($arr);
    //$res = array_keys_my($arr);
    


    function range_my($a,$b){
        for ($i=$a;$i<=$b;$i++) {
            $res[]= $i;
        }
        return $res;
    }