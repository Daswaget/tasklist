<?php include("../includes/connection.php"); ?>
<?php include("../includes/header.php"); ?>
	<link rel="stylesheet" type="text/css" href="../styles/style.css" />
</head>
<body>
	<div class="container" style="background-color: #DCDCDC; width: 600px" ;>
		<div class='block'>Task list</div>
<div class='block2'>
    <div><h5 style='margin-top: 5px;'>Вход в аккаунт</h5></div>
    <form action="login_check.php" method="post">
        <button type="submit" class="button">Готово</button>
        <input type="text" name="login" maxlength="20" placeholder="Введите логин" style="width: 350px; margin-bottom: 10px;" /><br />
        <input type="password" name="password" maxlength="20" value="<?php $_POST["password"] ?>" placeholder="Введите пароль" style="width: 350px" />
    </form>
    <a href="../index.php">Назад</a>
</div>
</body>
</html>