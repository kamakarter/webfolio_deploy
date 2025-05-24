@extends('app')

@section('content')
     <!-- banner -->
     <section class="banner" id="banner">
        <div class="container">
            <img src="{{ asset('storage/images/info-item-image.png') }}" alt="image-home-page" class="banner-image-for-bg one zoom">
            <img src="{{ asset('storage/images/info-item-image-1.png') }}" alt="image-home-page" class="banner-image-for-bg two zoom">
            <img src="{{ asset('storage/images/info-item-image-2.png') }}" alt="image-home-page" class="banner-image-for-bg three zoom">

            <div class="banner-box_for_content">
                <div class="banner-users_box">
                    <h4 class="banner-users_box_title fade-in-down">ПРОСТО. БЫСТРО. УДОБНО.</h4>
                    @if ($users_avatars->count() > 0)
                    <div class="banner-users_box_images fade-in-down">
                        <div class="avatar_box">
                            <marquee 
                                behavior="scroll" 
                                direction="left" 
                                scrollamount="5" 
                                scrolldelay="0"
                                loop="-1"
                                onmouseover="this.stop()" 
                                onmouseout="this.start()"
                            >
                            @foreach ($users_avatars as $user_avatar)
                                <img
                                    class="banner-avatar" 
                                    src="{{ asset($user_avatar->user_avatar) }}"
                                    alt="banner-avatar"
                                >
                            @endforeach
                        </marquee>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="banner-main_box">
                    <h1 class="banner-title fade-in-down">
                        Вебфолио — cоздай портфолио в пару кликов!
                    </h1>

                    <p class="banner-subtitle fade-in-down">
                        Лучшее решение для быстрого создания потрясающего портфолио без лишних усилий. Попробуй бесплатно.
                    </p>

                    <div class="banner-btns_box fade-in-down">
                        @auth
                            <a href="{{ route('show.signup') }}" class="btn-white btn btn-m banner-btn-create">Перейти в портфолио</a>
                        @else
                            <a href="{{ route('show.signup') }}" class="btn-white btn btn-m banner-btn-create">Создать портфолио</a>
                        @endauth
                        <a class="btn btn-m banner-btn-more">Создайте аккаунт<br>  меньше чем за минуту</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- steps -->
    <section class="steps" id="steps">
        <div class="container">
            <div class="steps-title_box">
                <h5 class="pre-title animate">выполни всего 3 шага</h5>
                <h2 class="steps-title animate">Создайте веб-портфолио,<br> которое впечатлит всех</h2>

                <div class="steps_box animate">
                    <div class="step step-1">
                        <svg class="step-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect width="48" height="48" rx="24" fill="#F43F5E"/>
                            <path d="M24.0005 13.5001C21.4234 13.5001 19.3335 15.5889 19.3335 18.1671C19.3335 20.7452 21.4234 22.8341 24.0005 22.8341C26.5776 22.8341 28.6675 20.7442 28.6675 18.1671C28.6675 15.5899 26.5786 13.5001 24.0005 13.5001ZM24.0005 25.0204C20.4961 25.0204 13.5 26.7795 13.5 30.2701C13.5 31.881 14.8059 33.1869 16.4167 33.1869H31.5833C33.1941 33.1869 34.5 31.881 34.5 30.2701C34.5 26.7795 27.5059 25.0204 24.0005 25.0204Z" fill="white"/>
                        </svg>

                        <p class="step-name">Создай аккаунт</p>
                        <p class="step-text">
                            Зарегиструйся на платформе, заполни все данные о себе: информацию о тебе, твои hard & soft skills.
                        </p>
                    </div>
                    <div class="step step-2">
                        <svg class="step-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect width="48" height="48" rx="24" fill="#F59E0B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9391 33.3659L31.1899 20.1096C31.747 19.3948 31.9451 18.5683 31.7594 17.7268C31.5985 16.9618 31.128 16.2344 30.4223 15.6826L28.7015 14.3155C27.2035 13.1241 25.3465 13.2495 24.2818 14.6165L23.1304 16.1102C22.9819 16.2971 23.019 16.573 23.2047 16.7235C23.2047 16.7235 26.114 19.0562 26.1759 19.1063C26.374 19.2945 26.5226 19.5453 26.5597 19.8463C26.6216 20.4357 26.2131 20.9875 25.6065 21.0628C25.3217 21.1004 25.0493 21.0126 24.8513 20.8496L21.7934 18.4166C21.6448 18.3049 21.422 18.3288 21.2982 18.4793L14.031 27.8853C13.5605 28.4747 13.3996 29.2397 13.5605 29.9797L14.4891 34.0055C14.5386 34.2187 14.7243 34.3692 14.9471 34.3692L19.0326 34.319C19.7754 34.3065 20.4687 33.9678 20.9391 33.3659ZM26.6591 32.112H33.3208C33.9708 32.112 34.4994 32.6475 34.4994 33.3059C34.4994 33.9656 33.9708 34.4998 33.3208 34.4998H26.6591C26.0091 34.4998 25.4805 33.9656 25.4805 33.3059C25.4805 32.6475 26.0091 32.112 26.6591 32.112Z" fill="white"/>
                        </svg>
                        <p class="step-name">Заполни портфолио</p>
                        <p class="step-text">
                            Как только ты заполнил все о себе, то самое время: добавить несколько работ в портфолио и написать о своих услугах
                        </p>
                    </div>
                    <div class="step step-3">
                        <svg class="step-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <g clip-path="url(#clip0_81_26265)">
                                <rect width="48" height="48" rx="24" fill="#34D399"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.8835 16.9406H29.1099C32.0852 16.9406 34.5 19.4274 34.5 22.4779V28.579C34.5 31.6295 32.0852 34.1053 29.1099 34.1053H18.8901C15.9148 34.1053 13.5 31.6295 13.5 28.579V22.4779C13.5 19.4274 15.9148 16.9406 18.8901 16.9406H19.1165C19.1381 15.6142 19.6448 14.3763 20.5611 13.4479C21.4882 12.5085 22.674 12.0332 24.0108 12C26.6843 12 28.8511 14.2106 28.8835 16.9406ZM21.6919 14.6308C21.0882 15.2497 20.754 16.0676 20.7324 16.9408H27.2653C27.2329 15.1281 25.7884 13.6581 24.0096 13.6581C23.1795 13.6581 22.3171 14.0008 21.6919 14.6308ZM28.0955 21.1962C28.5482 21.1962 28.904 20.8204 28.904 20.3672V19.0851C28.904 18.6319 28.5482 18.2562 28.0955 18.2562C27.6535 18.2562 27.2869 18.6319 27.2869 19.0851V20.3672C27.2869 20.8204 27.6535 21.1962 28.0955 21.1962ZM20.6151 20.3668C20.6151 20.8199 20.2593 21.1957 19.8066 21.1957C19.3646 21.1957 18.998 20.8199 18.998 20.3668V19.0847C18.998 18.6315 19.3646 18.2557 19.8066 18.2557C20.2593 18.2557 20.6151 18.6315 20.6151 19.0847V20.3668Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_81_26265">
                                <rect width="48" height="48" rx="24" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg>
                        <p class="step-name">Отправляй ссылку на профиль</p>
                        <p class="step-text">
                            В результате ты получаешь идеальное решение для портфолио, которое отражает твои таланты и достижения
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- info -->
    <section class="info" id="info">
        <div class="container">
            <div class="info-first_box">
                <img src="{{ asset('storage/images/star-info.svg') }}" alt="star" class="animate">
                <div class="info-first_inner_box">
                    <h3 class="info-title animate">В вебфолио есть практически все, что нужно разработчикам для идеального портфолио</h3>

                    <div class="info-logo_box animate">
                        <img src="{{ asset('storage/images/logo-icon.svg') }}" alt="logotype">

                        <div class="info-logo_inner_box">
                            <p class="info-logo_name">Команда Веьфолио</p>
                            <p class="info-logo_subname">Создадим портфолио вместе</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-diveder_box animate">
                <div class="info-divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="97" height="151" viewBox="0 0 97 151" fill="none">
                        <path d="M0.70973 1.80192C0.70973 1.80192 100.676 21.7804 95.3924 89.4368C91.1216 144.124 27.0277 116.602 11.7317 150.101" stroke="#C7C7CC" stroke-width="2" stroke-dasharray="8 8"/>
                    </svg>
                </div>
            </div>

            <div class="info-two_box animate">
                <div class="info-item">
                    <div class="left_section">
                        <div class="number_element one">№1</div>
                        <h2 class="info-item-title">Расскажите о себе</h2>
                        <p class="info-item-text">
                            Заполните все данные о себе, как с вами можно связаться, а так же что интерсного о вас узнать.
                        </p>

                        <div class="info-item-components_box">
                            <p class="info-item-components_title">Компоненты данного блока:</p>
                            <div class="skills_box">
                                <a class="user-skill">Имя</a>
                                <div class="user-skill">Фамилия</div>
                                <div class="user-skill">Описание профиля</div>
                                <div class="user-skill">Навыки</div>
                                <div class="user-skill">Контакты</div>
                                <div class="user-skill">Ссылки на соцсети</div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="right_section one">
                        <img src="{{ asset('storage/images/info-item-image.png') }}" alt="image" class="right-section-image">
                    </div>
                </div>

                <div class="info-item">
                    <div class="left_section">
                        <div class="number_element two">№2</div>
                        <h2 class="info-item-title">Опыт работы</h2>
                        <p class="info-item-text">
                            Укажите ваш опыт работы в разных местах, чтобы все профи знали на что вы способны!
                        </p>

                        <div class="info-item-components_box">
                            <p class="info-item-components_title">Компоненты данного блока:</p>
                            
                            <div class="skills_box">
                                <a class="user-skill">Место работы</a>
                                <div class="user-skill">Начало работы</div>
                                <div class="user-skill">Конец работы</div>
                                <div class="user-skill">Задачи на работе</div>
                                <div class="user-skill">Должность </div>
                                
                                
                            </div>
                        </div>

                    </div>
                    <div class="right_section two">
                        <img src="{{ asset('storage/images/info-item-image-1.png') }}" alt="image" class="right-section-image">
                    </div>
                </div>

                <div class="info-item">
                    <div class="left_section">
                        <div class="number_element three">№3</div>
                        <h2 class="info-item-title">Ваши проекты</h2>
                        <p class="info-item-text">
                            Расскажите клиентам и работодателям о всех проектах, которые вы когда-то реализовывали
                        </p>

                        <div class="info-item-components_box">
                            <p class="info-item-components_title">Компоненты данного блока:</p>
                            
                            <div class="skills_box">
                            <a class="user-skill">Обложка проекта</a>
                                <div class="user-skill">Описание проекта</div>
                                <div class="user-skill">Цель и задачи</div>
                                <div class="user-skill">Реализуемые решения</div>
                                <div class="user-skill">Используемые стек</div>
                                <div class="user-skill">Ссылка на GitHub</div>
                                <div class="user-skill">Ссылка на Deploy</div>
                            </div>
                        </div>

                    </div>
                    <div class="right_section three">
                        <img src="{{ asset('storage/images/info-item-image-2.png') }}" alt="image" class="right-section-image">
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="{{ asset('js/header-color-change.js') }}" defer></script>

@endsection
