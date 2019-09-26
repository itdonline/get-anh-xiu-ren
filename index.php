<?php
require 'class.php'; //Class dung de tach URL
$get = new get();  //Goi Class

if(isset($_GET['url']) && !empty($_GET['url']))
{
$get->getit(); //Goi function
}
else
{
	die("WTF??");
}
