@extends('app')

@section('content')
    <!-- registration -->
    <section class="error-section" id="error-section">
        <div class="container">
            <div class="error-grid">
                <div class="error-grid_section">
                    <h2>Ой! Вероятно вы не успели войти в аккаунт </h2>

                    <p class="error-subtitle">
                        Войдите в свой аккаунт или заригестрируйтесь, чтобы вы смогли перейти на данную страницу.
                    </p>
                
                    <div class="error-btns_box">
                        <a href="{{ route('show.signin') }}" class="btn btn-1 btn-m">
                            Войти в аккаунт
                        </a>
                        <a href="{{ route('show.signup') }}" class="btn btn-2 btn-m">
                            Зарегистрироваться
                        </a>
                    </div>
                </div>

                <div class="error-grid_section image">
                    <img src="{{ asset('storage/backgrounds/page-not-found.jpg') }}" alt="image-not-found">
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection
