<?php
$fio = %_post['fio'];
$number = $_post['number'];
$fio = htmlspecialchars($fio);
$number = htmlspecialchars($number);
$fio = urldecode($fio);
$number = urldecode($number);
$fio = trim($fio);
$number = trim($number);
//echo $fio;
//echo "<br>";
//echo $number;
if (mail("alekskras99@vk.com", "Заявка с сайта", 
"ФИО:".$fio.". Номер:"/$number ,"From: alekskras99@vk.com \r\n")); 
{echo "Сообщение отправлено";} else {"при отправке сообщения возникли ошибки";}?>

