# База данных отдела кадров фитнес-центра

База данных отдела кадров фитнес-центра

## Требования

Для запуска проекта вам потребуется установить следующие программные средства:

- [PHP](https://www.php.net/) (рекомендуется версия 8.1 или выше)
- [Composer](https://getcomposer.org/) (для управления зависимостями)
- [MySQL](https://www.mysql.com/) (СУБД)

## Установка

1. Клонируйте репозиторий в новую директорию:

```bash
git clone https://github.com/AlexanderSoromotin/coursework-2
```
2. Перейдите в директорию проекта:
```bash
cd coursework-2
```
3. Установите зависимости PHP с помощью Composer:
```bash
composer install
```
4. Создайте файл .env на основе .env.example:
```bash
cp .env.example .env
```
6. Создайте новую базу данных `fitness-center` в вашей СУБД:

6. Настройте параметры базы данных внутри файла .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fitness-center
DB_USERNAME=root
DB_PASSWORD=
```
7. Cгенерируйте ключ приложения:
```bash
php artisan key:generate
```
8. Выполните миграции базы данных:

```bash
php artisan migrate:fresh --seed
```

## Запуск
После завершения установки, вы можете запустить ваш проект следующим образом:

```bash
php artisan serve
```
Приложение будет доступно по адресу http://localhost:8000.
