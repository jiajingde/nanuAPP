<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="http://localhost:8080/boke/Application/Admin/Public/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="admin" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value="admin" id="pwd" size="35" class="admin_input_style" />
                    </li>
                     <li>
                        <label for="pwd">验证码：</label>
                        <input type="text" name="verify" id="verify" size="15" class="admin_input_style" /><img 
                        width="100" height="40"  style="cursor:pointer;" onclick="this.src='/boke/index.php/Admin/Login/verify/'+Math.random();" src="/boke/index.php/Admin/Login/verify">
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>