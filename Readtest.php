<?php
/**
 * @Author: anchen
 * @Date:   2019-04-09 20:48:19
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-04-16 11:19:16
 */
$filename = $_GET['chapter'];
$num = $_GET['count'];
$file = fopen("Chapter/".$filename."/test".$num.".txt", "r") or die("fail open file");
$title = array("");
$cnt = 0;
$cnt2 = 0;
$choice = array(array(""));
$answer = array("");
while (!feof($file)) {
    $content = fgets($file);
    if($content[0]=="$"){
        $choice[$cnt2][$cnt] = "";
    while(true){
        $content = fgets($file);
        if($content[0]=="$"||feof($file)){
            $cnt++;
            break;
        }
        $choice[$cnt2][$cnt] = $choice[$cnt2][$cnt].$content."<br/>";
    }
    }
    else if($content[0]=="#"){
        $title[$cnt2] = "";
    while(true){
        $content = fgets($file);
        if($content[0]=="#"||feof($file)){
            break;
        }
        $title[$cnt2] = $title[$cnt2].$content."<br/>";
    }
    }
    else if($content[0]=="@"){
        $answer[$cnt2] = "";
    while(true){
        $content = fgets($file);
        if($content[0]=="@"||feof($file)){
            $cnt2++;
            $cnt = 0;
            break;
        }
        $answer[$cnt2] = $answer[$cnt2].$content."<br/>";
    }
}
}
fclose($file);
foreach ($title as $key1 => $value1) {
    if($value1=="")
        die("no test");
    $content = "";
    foreach ($choice[$key1] as $key2 => $value2) {
        $content = $content."<button class='btn col-2 btn-primary card-body'>".$choice[$key1][$key2]."</button>";
    }
    echo "
    <div class='container card' style='padding-bottom: 25px;padding-top: 15px;font-size: 20px;'>
    <p class='card-body shadow' style='background-color: lightgoldenrodyellow;'>".$value1."</p>
    <div class='card-columns d-flex justify-content-around' style='padding:15px;'>
        ".$content."
    </div>
    <button data-toggle='collapse' class='btn btn-lg btn-primary' data-target='#p".$key1.$num."' style='padding:15px; margin-left:300px;margin-right:300px;'>答案</button>
    <div id='p".$key1.$num."' class='collapse' style='font-size: 20px;' style='padding:15px;'>
        <p>".$answer[$key1]."</p>
    </div>
    </div>
    ";
}

?>
