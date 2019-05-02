<?php
/**
 * @Author: anchen
 * @Date:   2019-05-01 22:18:28
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-05-02 00:15:19
 */

$text = $_POST['text'];
include"parsedown/Parsedown.php";
$Pase = new Parsedown();
echo $Pase->text($text);
?>