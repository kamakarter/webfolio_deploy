@extends('app')

@section('content')
    {{-- Шапка для форм --}}
    <div class="form-section_head">
    </div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <button onclick="window.history.back(); return false;" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </button>
            </div>


            <div class="form-canvas shadow-s">
                <form action="" method="post" class="form-box" name="add-exp">
                    <p class="form-title">
                        Добавьте свой опыт работы
                    </p>

                    <div class="form-column-2">
                            <!-- поле ввода -->
                            <div class="form-div">
                                <label for="company" class="form-label">
                                    Организация*
                                </label>

                                <input type="text" 
                                        name="company" 
                                        class="form-input" 
                                        placeholder="Введите название компании или организации"
                                        value=""
                                >

                                <p class="text-error hidden">
                                
                                </p>
                            </div>

                                <!-- поле ввода -->
                            <div class="form-div">
                                <label for="profession" class="form-label">
                                    Ваша должность*
                                </label>
    
                                <input type="text" 
                                    name="profession" 
                                    class="form-input" 
                                    placeholder="Введите вашу должность"
                                    value=""
                                >
    
                                <p class="text-error hidden">
                                
                                </p>
                            </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="start" class="form-label">
                                Начало работы*
                            </label>

                            <input type="date"
                                min="1980-01-01"
                                name="start" 
                                class="form-input" 
                                value=""
                            >

                            <p class="text-error hidden">
                            
                            </p>
                        </div>

                            <!-- поле ввода -->
                        <div class="form-div">
                            <label for="end" class="form-label">
                                Окончание работы*
                            </label>

                            <input type="date"
                                min="1980-01-01"
                                name="end" 
                                class="form-input" 
                                placeholder="Например: Июнь 2015"
                                value=""
                            >

                            <p class="text-error hidden">
                                
                            </p>
                        </div>
                    </div>
                    
                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="tasks" class="form-label">
                            Ваши обязанности в 3-4 пунктах через запятую
                        </label>

                        <textarea name="tasks" 
                            class="form-textarea" 
                            placeholder="Например: Аналитика, Разработка дизайна сайта, Frontend на React"
                        >

                        </textarea>

                        <p class="text-error hidden">
                            
                        </p>
                    </div>

                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="add-exp" >
                            Сохранить и отправить
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                                <path d="M10.4679 9.90706L14.875 5.50001M14.875 5.50001L10.4679 1.09296M14.875 5.50001L1.125 5.50001" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/header-normalize.js') }}" defer></script>
@endsection