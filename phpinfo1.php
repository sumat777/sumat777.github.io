<?php
/*
--
phpinfo1.php
Analog: journalrep0_rep0pr.php
Copyright 2011 - 2099 cds website
--
*/
//
error_reporting(-1);
set_time_limit(600);
ini_set("memory_limit","1024M");
//
define("EOL", "<br />\r\n");
$callStartTime = microtime(true);
$response = "";
// $content1 = $data[0];
//
/*
$response = "Тест 1";
$response = $content1;
echo $response;
return;
*/

//
// формирование имени файла отчета...
// Пример: rep_20160126_135610.txt
//
$date = date_create('now');
$fn_dir = "utils/rep/";
$fn = "rep_" . date_format($date, 'Ymd_His') . '.txt';
$fn_server = $_SERVER['DOCUMENT_ROOT'] . $fn_dir . $fn;
$fn_url = "/" . $fn_dir . $fn;


/*
Файл состоит из 3-х частей: 
1. Хидер
2. Контент - см выше переменная $content1
3. Bottom.
*/
$Descr1 = 'Результат выполнения phpinfo';
$header1 = '';
$header1 .= '<!DOCTYPE html>' . "\r\n";
$header1 .= '<html dir="ltr" lang="ru-RU">' . "\r\n";
$header1 .= '<head>' . "\r\n";
$header1 .= '<meta charset="UTF-8" />' . "\r\n";
$header1 .= '<title>' . $Descr1 . '</title>' . "\r\n";
$header1 .= '</head>'. "\r\n";
$header1 .= '<body>'. "\r\n";
$header1 .= '<body>'. "\r\n";
//
$bottom1 = '';
$bottom1 .= '</table>' . "\r\n";
$bottom1 .= '</body>' . "\r\n";
$bottom1 .= '</html>' . "\r\n";
//
echo $header1;
echo '<div id="content1">' . "\r\n";
phpinfo();
echo '</div>' . "\r\n";
//
// Full File Content
// $ffc = $header1 . $content1 . $bottom1;
$ffc = 'Процесс вывода информации по phpinfo() завершен...';
//
// file_put_contents($fn_server, $ffc);
//
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
//
// $response .= date('H:i:s') . " Ваш файл с отчетом: " . "<a class='link1' href='$fn_url' target='_blank'>$fn_url</a>" . EOL;
$response .= date('H:i:s') . " Затрачено времени для создания: " . sprintf('%.4f',$callTime) . " секунд" . EOL;
$response .=  date('H:i:s') . " Текущее использование памяти: " . (memory_get_usage(true) / 1024 / 1024) . " MB" . EOL;
$response .=  date('H:i:s') . " Максимальное использование памяти: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB" . EOL;
//
echo $response;
//
echo $bottom1;
//
return;
//




//
/*

This is enda...
of this file.

ЙЦУКЕН - means QWERTY

*/
?>