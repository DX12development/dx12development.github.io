<?php

if(isset($_POST['user_name']))
if(isset($_POST['user_message']))
{
$data=$_POST['user_name'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
$data=$_POST['user_message'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
