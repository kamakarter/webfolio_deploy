<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="Author" content="Вебфолио">
    <meta name="Copyright" content="Вебфолио">
    <meta name="description"
        content="Платформа для создаиня портфолио веб-разработчика за 5 минут. Попробуйте бесплатно прямо сейчас.">
    <meta name="keywords"
        content="Платформа создание портфолио веб-разработчик 5 минут бесплатный пробовать сейчас онлайн услуги проектирование шаблоны дизайн сайт навыки работа примеры проекты быстро легко интерактивно отзывы возможности адаптивный интерфейс интеграция создание сайта хостинг домен портфолио студия инновации технологии креативный подход">
    <title>Вебфолио</title>
    <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}" type="image/x-icon">


    <!-- Content Security Policy -->
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self' http://127.0.0.1:8000 https://cdn.jsdelivr.net 'unsafe-inline'; img-src * data:;">

    <!-- css links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adaptive.css') }}">

</head>

<body>
    @if(session('success'))
        <div class="container">
            <div class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect width="24" height="24" rx="12" fill="#D1FADF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0965 7.39004L9.9365 14.3L8.0365 12.27C7.6865 11.94 7.1365 11.92 6.7365 12.2C6.3465 12.49 6.2365 13 6.4765 13.41L8.7265 17.07C8.9465 17.41 9.3265 17.62 9.7565 17.62C10.1665 17.62 10.5565 17.41 10.7765 17.07C11.1365 16.6 18.0065 8.41004 18.0065 8.41004C18.9065 7.49004 17.8165 6.68004 17.0965 7.38004V7.39004Z" fill="#12B76A"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
    <div class="container">
        <div class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1102_5683)">
                  <path d="M10.0001 6.66663V9.99996M10.0001 13.3333H10.0084M18.3334 9.99996C18.3334 14.6023 14.6025 18.3333 10.0001 18.3333C5.39771 18.3333 1.66675 14.6023 1.66675 9.99996C1.66675 5.39759 5.39771 1.66663 10.0001 1.66663C14.6025 1.66663 18.3334 5.39759 18.3334 9.99996Z" stroke="#D92D20" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_1102_5683">
                    <rect width="20" height="20" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            {{ session('error') }}
        </div>
    </div>
    @endif


    
    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('includes.header')
    @endif

    @yield('content')

    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('includes.footer')
    @endif
</body>

</html>
