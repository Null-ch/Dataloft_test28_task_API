<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center"><img src="https://img.hhcdn.ru/employer-logo/2306653.png" width="400" height="148"></p>

## Описание
Пример реализации тестового задания на позицию Backend-разработчика в компанию Dataloft.

## Задание
<details>
<summary> Содержание тестового задания </summary>
<img src="https://github.com/Null-ch/test28/assets/65172872/3850d453-b27d-4e35-b785-e53d775fdf9d">
</details>

## Установка
 - Клонировать репозиторий: `git clone https://github.com/Null-ch/test28.git`
 - Скопировать и создать из файла `.env.example` файл `.env`
 - Установить зависимости командой `composer install`
 - Выполнить миграции: `php artisan migrate`
 - Заполнить БД первоначальными записями (создание марок, моделей и самих машин): `php artisan db:seed`

## API
<h4><b>Марка автомобиля</b></h4>

<details>
<summary> Получение всех марок </summary>
    -Роут: `http://127.0.0.1:8000/api/brands`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/ea2637da-4602-4abe-9161-317b4c79b418">
</details>
<details>
<summary> Получение марки по ID </summary>
    -Роут: `http://127.0.0.1:8000/api/brands/{id}`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/01459f63-b6a0-4279-93ee-2f7ac1df82d0">
</details>
<h4><b>Модель автомобиля</b></h4>

<details>
<summary> Получение всех моделей </summary>
    -Роут: `http://127.0.0.1:8000/api/car-models`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/e95a0e7f-4140-4b13-b873-72132a48df55">
</details>
<details>
<summary> Получение модели по ID </summary>
    -Роут: `http://127.0.0.1:8000/api/car-models/{id}`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/2a6f5879-0744-4a72-a768-7ae8e1609233">
</details>
<h4><b>Автомобили</b></h4>

<details>
<summary> Создание автомобиля </summary>
    -Роут: `http://127.0.0.1:8000/api/cars`<br>
    -Тип запроса: `POST`<br>
    -Содержимое body:<br>
    * 'brand_id' - обязательный параметр<br>
    * 'car_model_id' - обязательный параметр<br>
    * 'year'<br>
    * 'mileage'<br>
    * 'color'<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/376466db-6465-4a63-b1de-be5972836d2f">
</details>

<details>
<summary> Получение всех автомобилей </summary>
    -Роут: `http://127.0.0.1:8000/api/cars`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/a9fca143-550b-4edd-aefc-f9b484c83a9d">
</details>
<details>
<summary> Получение автомобиля по ID </summary>
    -Роут: `http://127.0.0.1:8000/api/cars/{id}`<br>
    -Тип запроса: `GET`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/caa9b65c-0191-45c0-905c-5a41642516ce">
</details>
<details>
<summary> Обновление данных об автомобиле по ID </summary>
    -Роут: `http://127.0.0.1:8000/api/cars/{id}?brand_id={id}&car_model_i{id}d&year{year}&mileage{mileage}&color{color}`<br>
    -Тип запроса: `PUT`<br>
    -Содержимое Query Params:<br>
    * 'brand_id' - обязательный параметр<br>
    * 'car_model_id' - обязательный параметр<br>
    * 'year'<br>
    * 'mileage'<br>
    * 'color'<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/05fec797-d1a4-4d22-9eac-417fbaa2737f">
</details>
<details>
<summary> Удаление данных об автомобиле по ID </summary>
    -Роут: `http://127.0.0.1:8000/api/cars/{id}`<br>
    -Тип запроса: `DELETE`<br>
    <h5>Результат:</h5>
    <img src="https://github.com/Null-ch/test28/assets/65172872/33de913d-7b14-4f83-84ef-1580ffb51eca">
</details>
