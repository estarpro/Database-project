$(function(){
    $("#user").focus();
});

$(document).ready(function() {
    $('#login').click(function () {
        var username = $('#user').val();
        var password = $("#pass").val();
        var op = $("#op").val();
        $.ajax({
            type: "POST",
            url: "user-man.php",
            dataType: "JSON",
            data: {
                "user_name": username,
                "password": password,
                "op": op,
            },
            success: function (data) {
                switch (data) {
                    case 1:  /*'Authentication succeeded':*/
                        // $.cookie("user", username);
                        // $.cookie("limit", 0);
                        alert("登录成功！");
                        window.location.href = "create_user.php";
                        break;
                    case 2:  /*'Authentication failed':*/
                        // $.cookie("user", username);
                        // $.cookie("limit", 1);
                        // window.location.href = "index.php";
                        alert("账户不存在或账户与密码不对应！");
                        break;
                    case 3:   /*'Password changed':*/
                        alert("密码修改成功！");
                        break;
                    case 0:    /*'User created':*/
                        alert("用户创建成功！");
                        break;
                    case 4:     /*'User deleted':*/
                        alert("用户删除成功！");
                        break;
                }
            }
        })
    });
});