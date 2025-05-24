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
                
                
                @if ($subscription && $subscription->is_active)
                    <h3 class="tariffs-title">
                        Подписка активна до {{ \Carbon\Carbon::parse($subscription->end_date)->translatedFormat('j F H:i:s') }}
                    </h3>
                    <p class="tariffs-subtitle">
                        Ваш тарифный план: {{ $subscription->tariff->name }}
                    </p>
                @else
                    <h3 class="tariffs-title">Оформите подписку уже сейчас</h3>
                    <p class="tariffs-subtitle">
                        Выберите подходящий для вас тариф и начните использовать наш сервис уже сегодня.
                    </p>
                @endif
                

                <div class="tariffs-box">
                    @forelse ($tariffs as $tariff)
                        <div class="tariffs-box_item">
                            {{--tariff name --}}
                            <p class="tariffs-box_item-title">
                                {{ $tariff->name }}
                            </p>
                            {{-- tariff price --}}
                            <p class="tariffs-box_item-price">
                                {{ $tariff->price }}₽<span class="tariffs-box_item-price_type">
                                    {{ '/' . $tariff->type_payment }}
                                </span>
                            </p>
                            <p class="tariffs-box_item_subtitle">{{ $tariff->description }}</p>

                            @if ($subscription && $subscription->is_active && $subscription->tariff_id == $tariff->id)
                                <div class="active_span">Активна до {{ \Carbon\Carbon::parse($subscription->end_date)->translatedFormat('j F Y') }}</div>
                            @endif

                            <div class="tariff-box_pluses">
                                @foreach (explode(',', $tariff->pluses) as $plus)
                                    <div class="tariff-box_plus-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect width="24" height="24" rx="12" fill="#D1FADF"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0965 7.39004L9.9365 14.3L8.0365 12.27C7.6865 11.94 7.1365 11.92 6.7365 12.2C6.3465 12.49 6.2365 13 6.4765 13.41L8.7265 17.07C8.9465 17.41 9.3265 17.62 9.7565 17.62C10.1665 17.62 10.5565 17.41 10.7765 17.07C11.1365 16.6 18.0065 8.41004 18.0065 8.41004C18.9065 7.49004 17.8165 6.68004 17.0965 7.38004V7.39004Z" fill="#12B76A"/>
                                        </svg>
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
                                @else
                                    
                                @endif

                                @if ($subscription && $subscription->is_active && $subscription->tariff_id == $tariff->id)
                                    <a href="{{ route('show.account') }}" class="btn btn-s btn-1">
                                        Перейти в аккаунт
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
