<?php $this->title('Авторизация'); ?>
<center style="margin-top: 40px;">
    <h3>Авторизация:</h3>
    <form method="POST" action="./">
        <input type="hidden" name="action" value="auth">
        <p><input type="text" name="login" class="form-control" id="inputSuccess1" style="max-width: 240px;" placeholder="Логин:"></p>
        <input type="password" name="password" class="form-control" id="inputSuccess1" style="max-width: 240px;" placeholder="Пароль:"><br>
        <p><input type="submit" value="Войти"class="btn btn-success" style="width: 240px;"></p>
    </form>
</center>