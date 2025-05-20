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
                <form action="{{ route('add.user.project') }}" method="post" class="form-box" name="add-project" enctype="multipart/form-data">
                    @csrf
                    <p class="form-title">
                        Добавьте новый проект
                    </p>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="name" class="form-label">
                            Название проекта*
                        </label>

                        <input type="text" name="title" class="form-input"
                            placeholder="Введите название проекта"
                            value="{{ old('title') }}">

                        @error('title')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="deploy_link" class="form-label">
                                Ссылка на сайт или Deploy*
                            </label>

                            <input type="text" name="deploy_link" class="form-input"
                                placeholder="Укажите URL-адрес на сайт"
                                value="{{ old('deploy_link') }}">

                            @error('deploy_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="github_link" class="form-label">
                                Ссылка на репозиторий в GitHub*
                            </label>

                            <input type="text" name="github_link" class="form-input"
                                placeholder="Укажите URL-адрес на репозиторий"
                                value="{{ old('github_link') }}">

                            @error('github_link')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="description" class="form-label">
                            Описание проекта
                        </label>

                        <textarea name="description" 
                            class="form-textarea" 
                            placeholder="Придумайте краткое описание для вашего проекта"
                        >{{ old('description') }}</textarea>

                        @error('description')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div form-div-file">
                        <label for="cover" class="form-label">
                            Добавьте обложку для проекта*
                        </label>

                        <div class="file-upload">
                            <label>
                                <input type="file" name="cover" class="input-file">
                                <span>Выбрать файл</span>
                            </label>
                        </div>

                        <span id="fileName"></span>

                        @error('cover')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="add-project">
                            Добавить проект
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

    <script src="{{ asset('js/header-normalize.js') }}"></script>
    <script src="{{ asset('js/input-file-normalize-for-error.js') }}"></script>
@endsection