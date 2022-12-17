<?php

$data = $_REQUEST['user_message'];
if(isset($_POST['user_message']))
{
$data=$_POST['user_message'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
