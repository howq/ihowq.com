<?php
/**
 * Created by PhpStorm.
 * User: buzhi
 * Date: 2016/3/12
 * Time: 23:25
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理</title>

    <link href="libs/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="libs/js/jquery.min.js"></script>
    <script src="libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="libs/jquery-easyui-1.4.4/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="libs/jquery-easyui-1.4.4/themes/icon.css">
    <script src="libs/jquery-easyui-1.4.4/jquery.easyui.min.js"></script>

    <!--引入ckeditor-->
    <script src="libs/ckeditor/ckeditor.js"></script>
    <script src="libs/ckfinder/ckfinder.js"></script>

    <style type="text/css">
        /*#main{*/
        /*margin-top: 20px;*/
        /*/!*border: solid red;*!/*/
        /*background-color: #EBEBEB;*/
        /*}*/
        #nav-header{
            margin:20px 8px;
        }
        #left-menu{
            margin-right: 5vw;
        }
    </style>

</head>
<body>

<div id="header" class="col-md-12"><b>后台管理系统</b></div>
<div id="nav-header" class="col-md-12">
    <ol class="breadcrumb">
        <li><a href="index.php">首页</a></li>
        <li><a href="index.php?r=manage/index">管理目录</a></li>
    </ol>
</div>

<div class="container col-md-12">
    <div id="left-menu" class="col-md-1">
        <div class="list-group" style="width: 150px;">
            <a href="?r=manage/editnews" class="list-group-item active">
                <h4 class="list-group-item-heading">
                    文章管理
                </h4>
            </a>
            <a href="?r=manage/editcategory" class="list-group-item" onclick="">
                <h4 class="list-group-item-heading">
                    目录管理
                </h4>
            </a>
            <a href="?r=manage/edittag" class="list-group-item">
                <h4 class="list-group-item-heading">标签管理</h4>
            </a>
        </div>
    </div>
    <div id="right-main" class="col-md-10">
        <?= $content ?>
    </div>
</div>
</body>
</html>
