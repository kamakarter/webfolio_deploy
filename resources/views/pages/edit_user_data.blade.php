@extends('app')

@section('content')
    <div class="form-section_head"></div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <a onclick="" href="{{ route('show.account') }}" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </a>
            </div>
            <div class="form-canvas shadow-s">
                <p class="form-title form-title-2">
                    Добавьте информацию о себе
                </p>
                <form action="{{ route('edit.user.data', $user->id) }}" method="post" class="form-box">
                    @csrf
                    @method('PUT')

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="name" class="form-label">
                                Имя*
                            </label>

                            <input type="text" name="name" class="form-input @error('name') is-invalid @enderror"
                                placeholder="Введите имя" value="{{ old('name', $user->name) }}">

                            @error('name')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="surname" class="form-label">
                                Фамилия*
                            </label>

                            <input type="text" name="surname" required
                                class="form-input @error('surname') is-invalid @enderror" placeholder="Введите фамилию"
                                value="{{ old('surname', $user->surname) }}">

                            @error('surname')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="country" class="form-label">
                                Страна*
                            </label>

                            <input type="text" name="country" class="form-input @error('country') is-invalid @enderror"
                                placeholder="Например: Россия" value="{{ old('country', $user->country) }}">

                            @error('country')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="city" class="form-label">
                                Город, населенный пункт*
                            </label>

                            <input type="text" name="city" requred
                                class="form-input @error('city') is-invalid @enderror" placeholder="Например: Москва"
                                value="{{ old('city', $user->city) }}">

                            @error('city')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="about_me" class="form-label">
                            Описание в профиле*
                        </label>

                        <textarea name="about_me" class="form-textarea @error('about_me') is-invalid @enderror"
                            placeholder="Расскажите о себе, о вашем опыте и интересах">{{ old('about_me', $user->about_me) }}</textarea>

                        @error('about_me')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="stack" class="form-label">
                            Ваши скиллы*
                        </label>

                        <textarea name="stack" class="form-textarea @error('stack') is-invalid @enderror"
                            placeholder="Например: HTML, CSS, JavaScript">{{ old('stack', $user->stack) }}</textarea>

                        @error('stack')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- ------ -->

                    <p class="form-title form-title-2">
                        Добавьте ссылки и способы связи
                    </p>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="github_link" class="form-label">
                                Имя профиля на Github
                            </label>

                            <input type="text" name="github_link"
                                class="form-input @error('github_link') is-invalid @enderror"
                                placeholder="Например: username" value="{{ old('github_link', $user->github_link) }}">

                            @error('github_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="website_link" class="form-label">
                                Ссылка на веб-сайт
                            </label>

                            <input type="text" name="website_link"
                                class="form-input @error('website_link') is-invalid @enderror"
                                placeholder="Введите URL-адрес сайта"
                                value="{{ old('website_link', $user->website_link) }}">

                            @error('website_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="phone" class="form-label">
                                Номер телефона
                            </label>

                            <input type="text" name="phone" class="form-input @error('phone') is-invalid @enderror"
                                placeholder="+7 (____)-____-___-___" value="{{ old('phone', $user->phone) }}">

                            @error('phone')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="social_email" class="form-label">
                                Рабочая почта
                            </label>

                            <input type="email" name="social_email"
                                class="form-input @error('social_email') is-invalid @enderror"
                                placeholder="Введите адрес электронной почты"
                                value="{{ old('social_email', $user->social_email) }}">

                            @error('social_email')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="telegram_link" class="form-label">
                                Никнейм в Telegram
                            </label>

                            <input type="text" name="telegram_link"
                                class="form-input @error('telegram_link') is-invalid @enderror"
                                placeholder="Например: username"
                                value="{{ old('telegram_link', $user->telegram_link) }}">

                            @error('telegram_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="whatsapp_link" class="form-label">
                                Номер телефона для связи в WhatsApp
                            </label>

                            <input type="text" name="whatsapp_link"
                                class="form-input @error('whatsapp_link') is-invalid @enderror"
                                placeholder="+7 (____)-____-___-___"
                                value="{{ old('whatsapp_link', $user->whatsapp_link) }}">

                            @error('whatsapp_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="edit-user-data">
                            Сохранить изменения
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11"
                                fill="none">
                                <path
                                    d="M10.4679 9.90706L14.875 5.50001M14.875 5.50001L10.4679 1.09296M14.875 5.50001L1.125 5.50001"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <style>
        .form-div {
            margin-bottom: 32px;
        }

        .text-error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .is-invalid {
            border-color: #dc3545;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
    </style>

    <!-- Header Normalize -->
    <script src="{{ asset('js/header-normalize.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fullUserDescription = document.querySelector('.placeholder_for_user_data_about');
            const btnOpenFullDescription = document.querySelector('.btn_for_user_data_about');
            console.log('fullUserDescription:', fullUserDescription);
            console.log('btnOpenFullDescription:', btnOpenFullDescription);
            if (fullUserDescription && btnOpenFullDescription) {
                btnOpenFullDescription.addEventListener('click', function() {
                    fullUserDescription.classList.toggle('full-size');
                    if (fullUserDescription.classList.contains('full-size')) {
                        btnOpenFullDescription.innerHTML = 'Закрыть описание';
                    } else {
                        btnOpenFullDescription.innerHTML = 'Показать полное описание';
                    }
                });
            }
        });
    </script>
@endsection
