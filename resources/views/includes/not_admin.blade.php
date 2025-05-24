@extends('app')

@section('content')
    <!-- registration -->
    <section class="error-section" id="error-section">
        <div class="container">
            <div class="error-grid">
                <div class="error-grid_section">
                    <h2>Упс! Вы не имеете доступа к этой странице</h2>

                    <p class="error-subtitle">
                        Вернитесь обратно или на главную страницу, чтобы продолжить пользоваться сервисом.
                    </p>
                    

                    <a href="{{ route('show.home') }}" class="btn btn-1 btn-m">
                        Вернуться на главную
                    </a>
                </div>

                <div class="error-grid_section image">
                    <img src="{{ asset('storage/backgrounds/page-not-found.jpg') }}" alt="image-not-found">
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection
