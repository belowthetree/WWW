<?php

/*echo "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>百度编辑器</title>
</head>
<body>
    <script type='text/javascript' charset='utf-8' src='ueditor/ueditor.config.js'></script>
    <script type='text/javascript' charset='utf-8' src='ueditor/ueditor.all.min.js'></script>
    <script type='text/javascript' charset='utf-8' src='ueditor/lang/zh-cn/zh-cn.js'></script>
    <script id='editor' type='text/plain' name='gdesc' style='width:100%;height:350px;'></script>
    <script type='text/javascript'>
    //实例化编辑器
    var ue = UE.getEditor('editor', {
    toolbars: [
        [
            'undo', //撤销
            'bold', //加粗
            'underline', //下划线
            'preview', //预览
            'horizontal', //分隔线
            'inserttitle', //插入标题
            'cleardoc', //清空文档
            'fontfamily', //字体
            'fontsize', //字号
            'paragraph', //段落格式
            'simpleupload', //单图上传
            'insertimage', //多图上传
            'attachment', //附件
            'music', //音乐
            'inserttable', //插入表格
            'emotion', //表情
            'insertvideo', //视频
            'justifyleft', //居左对齐
            'justifyright', //居右对齐
            'justifycenter', //居中对
            'justifyjustify', //两端对齐
            'forecolor', //字体颜色
            'fullscreen', //全屏
            'edittip ', //编辑提示
            'customstyle', //自定义标题
            'template', //模板
             ]
        ],
        initialFrameWidth:500,
        initialFrameHeight:'100%'
    
    });
    var div = document.getElementById('div');
    div.appendChild(ue);
</script>
    <div id='div' style='width:500px;height:600px;'>
    aaa
    </div>
</body>
</html>"*/
include"parsedown/Parsedown.php";
$Parsedown = new Parsedown();
echo $Parsedown->text("# Hello");
?>