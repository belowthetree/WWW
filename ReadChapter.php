<?php
/**
 * @Author: anchen
 * @Date:   2019-04-09 18:18:11
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-04-27 19:13:24
 */

$filename = $_GET['chapter'];
$file = fopen("Chapter/".$filename."/Info.txt", "r");
while(!feof($file))
{
    $content = fgets($file);
    echo $content;
}
fclose($file);
?>