@extends('app')

@section('content')
    <div class="form-section_head"></div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <a href="{{ route('show.admin') }}" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </a>
            </div>

            <div class="form-canvas shadow-s">
                <form action="{{ route('edit.tariff', $tariff->id) }}" method="post" class="form-box" name="add-project" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <p class="form-title">
                        Редактиование тарифа подписки {{ $tariff->name }}
                    </p>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="name" class="form-label">
                            Название проекта*
                        </label>

                        <input type="text" name="name" class="form-input"
                            placeholder="Введите название тарифа"
                            value="{{ old('name', $tariff->name) }}">

                        @error('name')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="type_payment" class="form-label">
                            Частота оплаты*
                        </label>

                        <input type="text" name="type_payment" class="form-input"
                            placeholder="Введите частоту оплаты: неделя, месяц, или год."
                            value="{{ old('type_payment', $tariff->type_payment) }}">

                        @error('type_payment')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="duration" class="form-label">
                            Срок действия*
                        </label>

                        <input type="number" name="duration" class="form-input"
                            placeholder="Введите срок действия"
                            value="{{ old('duration', $tariff->duration) }}">

                        @error('duration')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="price" class="form-label">
                                Стоимость*
                            </label>

                            <input type="number" name="price" class="form-input"
                                placeholder="Укажите цену"
                                value="{{ old('price', $tariff->price) }}">

                            @error('price')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="description" class="form-label">
                                Описание тарифа*
                            </label>

                            <input type="text" name="description" class="form-input"
                                placeholder="Укажите описание тарифа"
                                value="{{ old('description', $tariff->description) }}">

                            @error('description')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="description" class="form-label">
                            Преимущества тарифа*
                        </label>

                        <textarea name="pluses" 
                            class="form-textarea" 
                            placeholder="Напишите преимущества тарифа"
                        >{{ old('pluses', $tariff->pluses) }}</textarea>

                        @error('pluses')
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