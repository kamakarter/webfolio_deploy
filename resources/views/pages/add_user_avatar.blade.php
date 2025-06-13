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
                <form action="{{ route('upload.user.avatar', Auth::user()->id) }}" class="form-upload-box max-w-50" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-div form-div-file">
                        <h3 class="form-title">
                            Изображения вашего профиля
                        </h3>

                        <label for="" class="form-label">
                            Добавьте обложку для проекта*
                        </label>
        
                        <div class="file-upload">
                            <label>
                                <input type="file" name="avatar" class="input-file">
                                <span>Выбрать файл</span>
                            </label>
                        </div>
                        <span id="fileName"></span>
                        @error('avatar')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn">
                            Загрузить изображение
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                                <path d="M10.4679 9.90706L14.875 5.50001M14.875 5.50001L10.4679 1.09296M14.875 5.50001L1.125 5.50001" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <p class="form-requirement">
                        Изображения с соотношением сторон 1:1
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/header-normalize.js') }}" defer></script>
<script src="{{ asset('js/input-file-normalize-for-error.js') }}" defer></script>
    
@endsection