<?php
$arr=array("1","2","3","4");
$count=count($arr);
echo" number of elements ",$count,'<br>','<br>';

for($i=0;$i<$count;$i++)
{
    echo $arr[$i],' ','<br>';
    
}
$a=array("s1mca"=>60,"s3mca"=>30);
echo'<br>', $a["s1mca"],'<br>';

foreach($arr as $v)
    echo $v,'<br>';

foreach($a as $v=>$u)
    echo $v,' ',$u,'<br>';
?>

