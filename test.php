<?php
/**
 * @Author: anchen
 * @Date:   2019-04-09 22:31:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-04-09 22:35:28
 */
$value = "你好吗";
echo "<head>
        <meta charset='utf-8'>
        <title></title>
        <link rel='stylesheet' href='bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css' />
        <link rel='stylesheet' type='text/css' href='bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap-grid.css' />
        <script src='bootstrap-4.3.1-dist/proper.js'></script>
        <script src='bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/jquery-3.3.1/jquery-3.3.1.min.js'></script>
        <script src='bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js'></script>
    </head>
    <body>";
echo "<div class='container card' style='padding-bottom: 25px;padding-top: 15px;font-size: 20px;'>
            <p class='card-body shadow' style='background-color: lightgoldenrodyellow;'>".$value."</p>
            <input type='text' style='padding: 5px;' class='shadow-sm rounded-lg' value='内容' />
            <input type='button' class='btn-primary btn-sm' value='提交'/>
            <p style='font-size: 20px;'>内发i而非我访问偶极矩</p>
        </div></body>";
        ?>