<?
/*
��ʾ��&���ú����ķ���ֵ
*/
$a=today;
$b=monday;
function _pr($a,&$b){          //��&�����˷���ֵ
	$b=$a." is ".$b;
echo "�����б���a�����b��ֵΪ:<br>";
echo "����a��  $a <br>";
echo "����b��  $b <br>";
}

_pr($a,$b);
echo "�������б���a�����b��ֵΪ:<br>";
echo "����a��  $a <br>";
echo "����b��  $b <br>";          //$b=today is monday  �����˺����ķ���ֵ
?>