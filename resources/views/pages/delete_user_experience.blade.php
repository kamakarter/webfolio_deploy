@extends('app')

@section('content')

<div class="form-section_head"></div>

<section class="form-section confirm-section">
    <div class="container">
    <div class="form-canvas shadow-s confirm-form">
        <form action="{{ route('delete.user.experience', $experience->id) }}" method="post" name="confirm">
            @csrf
            @method('DELETE')
            <p class="form-title">
                Вы точно уверены, что хотите удалить этот опыт работы?
            </p>
            <div class="confirm_btns">
                <button class="btn btn-m btn-red" type="submit" name="confirm">Удалить</button>
                <a href="{{ route('show.account') }}" class="btn btn-m btn-1">Вернуться назад</a>
            </div>
        </form>
        </div>
    </div>
</section>

    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection