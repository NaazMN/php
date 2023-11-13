<?php

echo (max(2,5,8,9,7));
echo'<br>';
echo(min(2,5,8,9,7));
echo'<br>';
echo(rand(50,100));
echo'<br>';
$format='d-m-y';
echo'<br>',"date: ",date($format);
  
const b=49;
echo '<br>',b;
echo'<br>',constant("b");

date_default_timezone_set("asia/kolkata");
echo'<br>',date("h:i:s a");

?>

