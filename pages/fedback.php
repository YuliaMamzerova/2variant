<!-- Begin page content -->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Регистрация</title>
        <link href="/css/signin.css" rel="stylesheet">
</head>
<body>
<div class="col-md-12" >
    <div class="container" >

        <form class="form-signin" action="" method="post" name="registerform">
            <h2>Зарегистрируйтесь</h2>
            <p><label>Ваше имя:<br>
                    <input name="u_name" size="20" type="text" value=""></label></p>
            <p><label>Желаемый ник:<br>
                    <input name="u_nicename" size="30" type="text"></label></p>
            <p><label>Ваш email:<br>
                    <input name="u_email" size="30" type="email"></label></p>
            <p><label>Пароль:<br>
                    <input name="u_pass" size="30" type="password"></label></p>
            <p><input name="register" type="submit" value="Регистрация"></p>
            <p><a href="./pages/log.php">Уже зарегистрированы?</a></p>
        </form>
    </div>
</div>
</body>
</html>
