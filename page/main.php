<?php $this->title('Авторизация');
$this->CheckAuth();?>
<center style="margin-top: 40px;">
    <h3>Авторизация:</h3>
    <?php
    $this->CreateForm('post', 'auth');
    $this->AddInput('text', 'login', 'Логин:', 'form-control', 240);
    $this->AddInput('password', 'password', 'пароль:', 'form-control', 240);
    $this->AddButton('Войти', 'btn btn-success', 240);
    $this->EndForm();
    ?>
</center>