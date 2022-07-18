# <p align="center">ProjectWork-Data</p>
Приложение для получения и обработки данных

## Использование и методы:

Вы можете изменять шаблоны приложения используя следующие методы класса Router

1. Создание navbar:

```php
//Где project - название navbar
$this->Navstart('project');

/*
 * 1 параметр - название страницы для ссылки (соответствует названию файла в каталоге "page"
 * 2 параметр - заголовок ссылки
 * 3 параметр - (bool); Где true - активная страница
 * по умолчанию false (параметр не обязательный
*/
$this->Navbar('page', 'Главная', true);
$this->Navbar('page2', 'Второстепенная');

//Завершение navbar
$this->Navend();
```

2. Создание формы

```php
//Где post - метод передачи данных; test - наименование формы для ее инициализации
$this->CreateForm('post', 'test');

/*
 * Создание input в форме
 * 1 параметр - тип поля
 * 2 параметр - наименование поля
 * 3 параметр - placeholder поля
 * 4 параметр - css класс (bootstrap) для создаваемого поля
 * 5 параметр - размер поля в px
*/
$this->AddInput('text', 'login', 'Логин:', 'form-control', 240);

/*
 * Создание кнопки
 * 1 параметр - значение value у кнопки (Текст на кнопке)
 * 2 параметр - css класс (bootstrap) для создаваемой кнопки
 * 3 параметр - ширина кнопки в px
*/
$this->AddButton('Войти', 'btn btn-success', 240);

// Завершение создания формы
$this->EndForm();
```

3. Подключение контроллера:

```php
//Где main - название контроллера
$this->Controller('main');
```

4. Объявление заголовка страницы:

```php
//Где name - заголовок страницы
$this->title('name');
```

## Система контроллера:

Реализация:

Подключение контроллера в файлах страницы:

```php
//Где main - название контроллера
$this->Controller('main');
```

Наименование контроллера - [name]Controller.php

![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

