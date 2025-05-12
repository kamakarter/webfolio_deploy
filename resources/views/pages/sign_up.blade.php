@extends('app')

@section('content')
    <!-- registration -->
    <section class="reg" id="reg">
        <div class="container">
            <div class="reg-grid">
                <div class="reg-grid_section form_section">
                    <h3>Регистрация</h3>

                    <form action="{{ route('register') }}" method="post" class="reg-form" name="reg">
                        @csrf
                        <!-- поле ввода логина -->
                        <div class="form-div">
                            <label for="login" class="form-label">Логин*</label>
                            <input type="text" name="login" class="form-input" placeholder="Придумайте логин"
                                value="{{ old('login') }}">
                            @error('login')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода почты -->
                        <div class="form-div">
                            <label for="email" class="form-label">Почта*</label>
                            <input type="email" name="email" class="form-input"
                                placeholder="Введите адрес электронной почты" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода пароля -->
                        <div class="form-div">
                            <label for="password" class="form-label">Пароль*</label>
                            <input type="password" name="password" class="form-input"
                                placeholder="Придумайте пароль от 8 символов">
                            @error('password')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода подтверждения пароля -->
                        <div class="form-div">
                            <label for="password_confirmation" class="form-label">Подтверждение пароля*</label>
                            <input type="password" name="password_confirmation" class="form-input"
                                placeholder="Повторите пароль">
                        </div>

                        <div class="form-section_btns">
                            <button type="submit" class="btn btn-m form-btn" name="reg">Создать аккаунт</button>

                            <div class="reg-nav_links">
                                <p class="reg-ask_text">У вас есть аккаунт?</p>
                                <a href="{{ route('show.signin') }}" class="nav-link">Войти в аккаунт</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="reg-grid_section image_section">
                    <img src="{{ asset('storage/images/smartphone-with-checklist.png') }}" alt="smartphone-with-checklist">
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection
