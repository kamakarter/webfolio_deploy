@extends('app')

@section('content')
        
    <!-- authorization -->

    <section class="auth" id="auth">
        <div class="container">
            <div class="auth-container">
                <h3>Авторизация</h3>

                <form action="{{ route('login') }}" method="post" class="auth-form"  >
                    @csrf
                    <!-- поле ввода почты -->
                    <div class="form-div">
                        <label for="email" class="form-label">
                            Почта*
                        </label>

                        <input type="text"
                                name="email"
                                class="form-input"
                                placeholder="Введите адрес электронной почты"
                                value="{{ old('email') }}" >
                        
                            @error('email')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                    </div>

                    <!-- поле ввода пароля -->
                    <div class="form-div">
                        <label for="password" class="form-label">
                            Пароль*
                        </label>

                        <input  type="password"
                                name="password"
                                class="form-input"
                                placeholder="Придумайте пароль от 8 символов"
                                value="{{ old('password') }}">

                        @error('password')
                                <p class="text-error">{{ $message }}</p>
                           @enderror
                    </div>

                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="auth" >Войти в  аккаунт</button>

                        <div class="reg-nav_links">
                            <p class="reg-ask_text">У вас нет аккаунта?</p>
                            
                            <a href="{{ route('show.signup') }}" class="nav-link">Создать аккаунт</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Header Normalize -->
    <script src="{{ asset('js/header-normalize.js') }}"></script>

<script src="{{ asset('js/header-color-change.js') }}" defer></script>

@endsection