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
                <h3 class="tariffs-title">Оформите подписку уже сейчас</h3>
                <p class="tariffs-subtitle">Выберите подходящий для вас тариф и начните использовать наш сервис уже сегодня.
                </p>

                <div class="tariffs-box">
                    @forelse ($tariffs as $tariff)
                        <div class="tariffs-box_item">
                            {{-- <h4 class="tariffs-box_item-title"> {{ $tariff->name }} </h4> --}}
                            <p class="tariffs-box_item-price">
                                {{ $tariff->price }}₽<span
                                    class="tariffs-box_item-price_type">{{ '/ ' . $tariff->type_payment }}</span>
                            </p>
                            <p class="tariffs-box_item_subtitle">{{ $tariff->description }}</p>

                            @if ($subscription && $subscription->is_active)
                                <div class="active_span">Подписка активна до {{ $subscription->end_date }}</div>
                            @endif

                            <div class="tariff-box_pluses">
                                @foreach (explode(',', $tariff->pluses) as $plus)
                                    <div class="tariff-box_plus-item">
                                        {{ trim($plus) }}
                                    </div>
                                @endforeach
                            </div>
                            <br>
                            @auth
                                @if (!$subscription || !$subscription->is_active)
                                <a href="{{ route('show.payment.form', $tariff->id) }}" class="btn btn-s btn-1">
                                    Оформить подписку
                                </a>
    
                                @endif
                            @endauth    
                        </div>
                    @empty
                        <p class="tariffs-box_item_subtitle">
                            Приносим извинения, но нет доступных тарифов к покупке на данный момент.
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/header-normalize.js') }}" defer></script>
@endsection
