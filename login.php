<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/login.js"></script>
    <title>Login page</title>
</head>
<body>
<div class="login">
    <h1>中医药管理系统</h1>
    <form>
        <input type="hidden" id="op" name="op" value="login">
        <input type="text" id="user" name="user" size="60" placeholder="Username" required="required"
               value="<?php if (!empty($user)) echo $user; ?>">
        <input type="password" id="pass" name="pass" size="60" placeholder="Password" required="required"/>
        <button type="button" id="login" name="submit" class="btn btn-primary btn-block btn-large">登录
        </button>
    </form>
</div>
<div style="position: absolute; bottom: 10px; right: 10px;">
    <p>
        <a href="http://www.openwall.com/phpass/">Powered by phpass</a>
        and
        <a href="http://www.openwall.com/passwdqc/">passwdqc</a>
    </p>
</div>
</body>
</html>