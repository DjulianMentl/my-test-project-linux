<?php

if (isset($_POST['login'])) {

        include(__DIR__ . '/include/logins.php');
        include(__DIR__ . '/include/passwords.php');
        
        $index = array_search($_POST['login'], $logins);
        if ($index !== false && $_POST['password'] == $passwords[$index]) {
                $authSuccses = true;
                $displayAuthForm = false;
        }

        $authSuccses ?? $authError = true;
    }

    include(__DIR__ . '/templates/header.php');

?>


				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>


            <?php
                include(__DIR__ . '/templates/main_template.php');
                if (isset($_GET['login']) && $_GET['login'] === "yes") { 
            ?>
				
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>
	
                <div class="index-auth">
                    <form action="/?login=yes" method="POST">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
                                    <label for="login_id">Ваш логин:</label>
                                    <input id="login_id" size="30" name="login" value="<?= $_POST['login'] ?? '' ?>">
                                </td>
							</tr>
							<tr>
								<td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?= $_POST['password'] ?? '' ?>">
                                </td>
							</tr>
							<tr>
								<td><input type="submit" name="send" value="Войти"></td>
							</tr>
						</table>
                    </form>
				</div>
            <?php }?>
            <?php
                if (isset($_POST['send'])) {
                    $authError ?? include (__DIR__ . '/include/success.php');
                    $authSuccses ?? include(__DIR__ . '/include/error.php');
                }
            ?>
 <?php include(__DIR__ . '/templates/footer.php'); ?>
