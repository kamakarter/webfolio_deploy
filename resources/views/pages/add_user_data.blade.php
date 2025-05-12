@extends('app')

@section('content')
    {{-- шапка для форм --}}
    <div class="form-section_head">

    </div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <button onclick="window.history.back(); return false;" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </button>
            </div>

            <div class="form-canvas shadow-s">
                <form action="{{ route('user.add.data') }}" method="post" class="form-box" name="add-user-data">
                    @csrf
                    <p class="form-title">
                        Заполните поля для создания резюме
                    </p>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="name" class="form-label">
                                Имя*
                            </label>

                            <input type="text" name="name" class="form-input" placeholder="Введите имя" value=""
                                required>

                            <p class="text-error hidden">

                            </p>
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="surname" class="form-label">
                                Фамилия*
                            </label>

                            <input type="text" name="surname" class="form-input" placeholder="Введите фамилию"
                                value="" required>

                            <p class="text-error hidden">

                            </p>
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="country" class="form-label">
                                Страна*
                            </label>

                            <input type="text" name="country" class="form-input" placeholder="Например: Россия"
                                value="" required>

                            <p class="text-error hidden">

                            </p>
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="city" class="form-label">
                                Город, населенный пункт*
                            </label>

                            <input type="text" name="city" class="form-input" placeholder="Например: Москва"
                                value="" required>

                            <p class="text-error hidden">

                            </p>
                        </div>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="about_me" class="form-label">
                            Описание в профиле*
                        </label>

                        <textarea name="about_me" class="form-textarea" required placeholder="Расскажите о себе, о вашем опыте и интересах"></textarea>

                        <p class="text-error hidden">

                        </p>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="skills" class="form-label">
                            Ваши скиллы*
                        </label>

                        <textarea name="skills" class="form-textarea" placeholder="Например: HTML, CSS, JavaScript" required></textarea>

                        <p class="text-error hidden">

                        </p>
                    </div>

                    <!-- ------ -->

                    <p class="form-title form-title-2">
                        Добавьте ссылки и способы связи
                    </p>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="github" class="form-label">
                                Имя профиля на Github
                            </label>

                            <input type="text" name="github" class="form-input" placeholder="Например: username">

                            <p class="text-error hidden">

                            </p>
                        </div>


                        <div class="form-div">
                            <label for="website" class="form-label">
                                Ссылка на веб-сайт
                            </label>
                            <input type="text" name="website" class="form-input" placeholder="Введите URL-адрес сайта">
                            <p class="text-error hidden">

                            </p>
                        </div>
                    </div>


                    <div class="form-column-2">
                        <div class="form-div">
                            <label for="phone" class="form-label">
                                Номер телефона
                            </label>

                            <input type="text" name="phone" class="form-input" placeholder="+7 (____)-____-___-___">

                            <p class="text-error hidden">

                            </p>
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="social_email" class="form-label">
                                Рабочая почта
                            </label>

                            <input type="text" name="social_email" class="form-input"
                                placeholder="Введите адрес электронной почты">
                            <p class="text-error hidden">

                            </p>
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="telegram" class="form-label">
                                Никнейм в Telegram
                            </label>
                            <input type="text" name="telegram" class="form-input" placeholder="Например: username">
                            <p class="text-error hidden">

                            </p>
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="whatsapp" class="form-label">
                                Номер телефона для связи в WhatsApp
                            </label>
                            <input type="text" name="whatsapp" class="form-input"
                                placeholder="+7 (____)-____-___-___">
                            <p class="text-error hidden">

                            </p>
                        </div>
                    </div>

                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="add-user-data">
                            Сохранить и отправить
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


    <script src="{{ asset('js/header-normalize.js') }}" defer></script>
@endsection
