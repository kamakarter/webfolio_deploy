@extends('app')

@section('content')
    <div class="form-section_head"></div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <a href="{{ route('show.account') }}" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </a>
            </div>


            <div class="form-canvas shadow-s">
                <form action="{{ route('edit.user.experience', $experience->id) }}" method="post" class="form-box" name="edit-exp" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <p class="form-title">
                        Редактировать свой опыт работы
                    </p>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="company" class="form-label">
                                Организация*
                            </label>

                            <input type="text" name="company_name" class="form-input"
                                placeholder="Введите название компании или организации" value="{{ $experience->company_name }}">

                            @error('company_name')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="profession" class="form-label">
                                Ваша должность*
                            </label>

                            <input type="text" name="profession" class="form-input" placeholder="Введите вашу должность" value="{{ $experience->profession }}">

                            @error('profession')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="start_date" class="form-label">
                                Начало работы*
                            </label>

                            <input type="date" min="1980-01-01" name="start_date" class="form-input" value="{{ $experience->start_date }}">

                            @error('start_date')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="end_date" class="form-label">
                                Окончание работы*
                            </label>

                            <input type="date" min="1980-01-01" name="end_date" class="form-input"
                                placeholder="Например: Июнь 2015" value="{{ $experience->end_date }}">

                            @error('end_date')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="tasks" class="form-label">
                            Ваши обязанности в 3-4 пунктах через запятую
                        </label>

                        <textarea name="tasks" class="form-textarea"
                            placeholder="Например: Аналитика, Разработка дизайна сайта, Frontend на React">{{ $experience->tasks }}</textarea>

                        @error('tasks')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-div form-div-file">
                        <label for="company_logotype" class="form-label">
                            Добавьте логотип компании в формате 1:1 (квадратный формат) *
                        </label>

                        @if ($experience->company_logotype)
                            <img src="{{ asset('company_logotypes/' . $experience->company_logotype) }}" alt="Логотип компании" class="form-div-file_img">
                        @endif
        
                        <div class="file-upload">
                            <label>
                                <input type="file" name="company_logotype" class="input-file">
                                <span>Выбрать файл</span>
                            </label>
                        </div>
        
                        <span id="fileName"></span>
        
                        @error('company_logotype')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                
                    </div>

                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="edit-exp">
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
    
    <script src="{{ asset('js/input-file-normalize-for-error.js') }}" defer></script>
    <script src="{{ asset('js/handle-form-error.js') }}" defer></script>
@endsection
