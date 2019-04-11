<?php
/**
 * @Author: anchen
 * @Date:   2019-04-09 20:48:19
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-04-11 00:08:11
 */
$filename = $_GET['name'];
$type = $_GET['type'];
$index = $_GET['index'];
$file = fopen("Chapter/"+$filename+"info.txt", "r");
if($type=="answer"){
    while(!feof($file)){
        $content = fgets($file);
        if(content=="#"+$index)
            break;
    }
    while (!feof($file)) {
        $content = fgets($file);
        if($content[0]!="#")
            echo $content+"<br/>";
    }
}
else{
    while(!feof($file)){
        $content = fgets($file);
        if(content[0]=="$")
            break;
    }
    $value = "";
    while (!feof($file)) {
        $content = fgets($file);
        if($content!="$")
            $value += $content + "<br/>";
    }
    echo "<div class='container card' style='padding-bottom: 25px;padding-top: 15px;font-size: 20px;'>
            <p class='card-body shadow' style='background-color: lightgoldenrodyellow;'>".$value."</p>
            <input type='text' style='padding: 5px;' class='shadow-sm rounded-lg' value='内容' />
            <input type='button' class='btn-primary btn-sm' value='提交'/>
            <p style='font-size: 20px;'></p>
        </div>";
}