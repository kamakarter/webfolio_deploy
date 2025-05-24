@extends('app')

@section('content')
    <div class="form-section_head"></div>

    <section class="form-section">
        <div class="container">
            <div class="form-section_backlink_box">
                <a href="{{ route('show.tariffs') }}" class="backlink">
                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p class="backlink_text">Вернуться назад</p>
                </a>
            </div>

            <div class="form-canvas shadow-s">
                <form action="{{ route('add.payment' , $tariff->id) }}" method="post" class="form-box" name="add-project" enctype="multipart/form-data">
                    @csrf
                    <p class="form-title">
                        Оформление подписки
                    </p>

                    <!-- поле ввода -->
                    <div class="form-div">
                        <label for="type_payment" class="form-label">
                            Номер карты*
                        </label>

                        <input type="text" name="card_number" class="form-input"
                            placeholder="Введите номер карты"
                            value="{{ old('card_number') }}">

                        @error('card_number')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-column-2">
                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="expiration_date" class="form-label">
                                Срок действия*
                            </label>

                            <input type="date" name="expiration_date" class="form-input"
                                placeholder="Укажите срок действия"
                                value="{{ old('expiration_date') }}">

                            @error('expiration_date')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- поле ввода -->
                        <div class="form-div">
                            <label for="cvc" class="form-label">
                                Код безопасности*
                            </label>

                            <input type="text" name="cvc" class="form-input"
                                placeholder="Укажите код безопасности"
                                value="{{ old('cvc') }}">

                            @error('cvc')
                                <p class="text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <!-- btns -->
                    <div class="form-section_btns">
                        <button type="submit" class="btn btn-m form-btn" name="add-project">
                            Оплатить подписку
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