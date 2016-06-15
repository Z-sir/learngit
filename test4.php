<?
/*
演示用&引用函数的返回值
*/
$a=today;
$b=monday;
function _pr($a,&$b){          //用&引用了返回值
	$b=$a." is ".$b;
echo "函数中变量a与变量b的值为:<br>";
echo "变量a：  $a <br>";
echo "变量b：  $b <br>";
}

_pr($a,$b);
echo "主程序中变量a与变量b的值为:<br>";
echo "变量a：  $a <br>";
echo "变量b：  $b <br>";          //$b=today is monday  引用了函数的返回值
?>