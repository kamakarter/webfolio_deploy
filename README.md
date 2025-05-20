<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# WebFolio - Платформа для создания портфолио веб-разработчика

WebFolio - это современная платформа, позволяющая веб-разработчикам создавать профессиональное портфолио за 5 минут. Проект разработан с использованием Laravel 10 и современных веб-технологий.

## Основные возможности

-   🔐 **Аутентификация пользователей**

    -   Регистрация и вход
    -   Управление профилем
    -   Безопасное хранение данных

-   👤 **Профиль разработчика**

    -   Загрузка аватара и фонового изображения
    -   Информация о себе
    -   Контактные данные
    -   Социальные сети (GitHub, Telegram, WhatsApp)
    -   Список технологий и навыков

-   💼 **Опыт работы**

    -   Добавление опыта работы
    -   Управление проектами
    -   Отображение достижений

-   🎨 **Современный дизайн**
    -   Адаптивный интерфейс
    -   Анимации и переходы
    -   Удобная навигация

## Технический стек

-   **Backend:** Laravel 10
-   **Frontend:** HTML, CSS, JavaScript
-   **База данных:** MySQL
-   **Дополнительные пакеты:**
    -   Laravel Sanctum для API аутентификации
    -   Spatie Laravel CSP для безопасности

## Требования

-   PHP >= 8.1
-   Composer
-   MySQL
-   Node.js и NPM (для сборки фронтенда)

## Установка

1. Клонируйте репозиторий:

```bash
git clone [url-репозитория]
cd webfolio_laravel
```

2. Установите зависимости:

```bash
composer install
npm install
```

3. Создайте файл .env:

```bash
cp .env.example .env
```

4. Сгенерируйте ключ приложения:

```bash
php artisan key:generate
```

5. Настройте базу данных в .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webfolio
DB_USERNAME=root
DB_PASSWORD=
```

6. Запустите миграции:

```bash
php artisan migrate
```

7. Создайте символическую ссылку для хранения файлов:

```bash
php artisan storage:link
```

8. Запустите сервер разработки:

```bash
php artisan serve
```

## Структура проекта

-   `app/` - Основной код приложения
-   `resources/` - Шаблоны и ресурсы
-   `public/` - Публичные файлы
-   `storage/` - Загруженные файлы
-   `database/` - Миграции и сиды

## Безопасность

-   Content Security Policy (CSP) для защиты от XSS
-   Защита от CSRF-атак
-   Безопасное хранение паролей
-   Валидация всех входных данных

## Лицензия

MIT License

## Команда разработки

Webfolio Team - Create a portfolio together

## О проекте

Платформа для создания портфолио веб-разработчика «WebFolio»

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
