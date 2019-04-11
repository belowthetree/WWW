<?php
/**
 * @Author: anchen
 * @Date:   2019-04-09 18:18:11
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-04-11 10:49:08
 */

//$filename = $_GET['chapter'];
$filename = "test.txt";
$file = fopen($filename, "r");
$count = 0;
$text = array();
$txt = "";
$cnt = 0;
while(!feof($file))
{
    $content = fgets($file);
    echo $content;
}
fclose($file);
?>