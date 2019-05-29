<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认连接</title>
</head>
<body>
<h1>感谢您在weibo网站中注册</h1>
<a href="{{route('confirm_email',$user->activation_token)}}">
    {{route('confirm_email',$user->activation_token)}}
</a>
<p>如果不是本人操作，请忽略此操作</p>
</body>
</html>