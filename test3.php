<?
/*
写一个加法函数往里传参运算
判断该变量是不是函数
*/
$c=40;
function _pr($value1,$value2){
 global $c; // 将变量c定义成全局变量
 $a=$value1+$value2+$c;
 return $a;
}
$b=_pr(4,8);
echo $b;
echo "<br>";


if(function_exists(_pr)){
	echo "_pr是函数";
}else{
    echo "_pr不是函数";
}
?>