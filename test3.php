<?
/*
дһ���ӷ��������ﴫ������
�жϸñ����ǲ��Ǻ���
*/
$c=40;
function _pr($value1,$value2){
 global $c; // ������c�����ȫ�ֱ���
 $a=$value1+$value2+$c;
 return $a;
}
$b=_pr(4,8);
echo $b;
echo "<br>";


if(function_exists(_pr)){
	echo "_pr�Ǻ���";
}else{
    echo "_pr���Ǻ���";
}
?>