<?php
// phpinfo();
// die();

// $arr = array(
// 		'a'=>'a11',
// 		'b'=>'b22',
// 		'c'=>'c33',
// 		);
// 		foreach ($arr as $k => &$v) {
// 			//0,1,2	
// 		}
// 		foreach ($arr as $k => $v) {
			
// 		}

// var_dump($arr);
//  -->

$url = 'http://php.net/manual/en/langref.php';  //这儿填页面地址
$html=file_get_contents($url);
$str = '';
echo '[' . date('Y-m-d H:i:s') . '] fetching ' . $url . '<br>';
sleep(1);
echo '[' . date('Y-m-d H:i:s') . '] parsing start<br>';
sleep(1);
function run($a){
	global $str;
	preg_match_all('/<ul class=\'parent-menu-list\'>([\s\S]*?)<\/ul>/',$a,$m);
	//var_dump($m);
	preg_match_all('/<a href="(.*?)".*?>(.*?)<\/a>/is',$m[1][0],$res);
	foreach ($res[2] as $key => $value) {
		echo $value.' '."(http://php.net/manual/en/{$res[1][$key]})"."</br>";
		$str .= $value.' '."(http://php.net/manual/en/{$res[1][$key]})"."</br>";
	}
}
echo '[' . date('Y-m-d H:i:s') . '] the right side list is:<br>';
run($html);
sleep(1);
echo '[' . date('Y-m-d H:i:s') . '] parsing end<br>';
sleep(1);
echo '[' . date('Y-m-d H:i:s') . '] saving to file langref.txt<br>';
$str = str_replace('</br>',PHP_EOL, $str);
file_put_contents('langref.txt', $str);
sleep(1);
echo '[' . date('Y-m-d H:i:s') . '] saved<br>';

