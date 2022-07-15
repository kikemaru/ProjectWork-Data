<?php $this->title('Личный кабинет - лог');
//Проверить авторизацию
$this->Navstart('project');
$this->Navbar('private', 'Главная');
$this->Navbar('log', 'Лог', true);
//echo '<li><a href="./?page=exit">Выйти</a></li>';
$this->Navend(); ?>
<center>
<div class="row" style="max-width: 900px;">
    <div class="col-xs-12 col-md-8">
        <table class="table table-bordered">
            <thead>
            <th>#</th>
            <th>Данные</th>
            <th>Ip</th>
            <th>#</th>
            </thead>
            <tbody>
            <tr>
                <td>12</td>
                <td>login: 123 | pass: 321</td>
                <td>392.312.3.24</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="well well-sm">
            <p align="left">Настройки лога:</p>
        <?php // $this->AddInput('text', 'log', 'Ширина:', 'form-control', 240); ?>
        </div>
    </div>
</div><br>

</center>