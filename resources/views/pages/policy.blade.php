@extends('app')

@section('content')
        <!-- policy -->
    <section class="policy" id="policy">
        <div class="container">
            <div class="policy_grid">
                <div class="policy_column policy-column_right">
                    <div class="form-section_backlink_box">
                        <button onclick="window.history.back(); return false;" class="backlink">
                            <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
        
                            <p class="backlink_text">Вернуться назад</p>
                        </button>
                    </div>

                    <h3>
                        Политика обработки персональных данных
                    </h3>

                    <p class="policy_subtitle">
                        Данная политика обработки персональных данных (далее — Политика) разработана для обеспечения прозрачности и понимания процессов, связанных с обработкой персональных данных пользователей сайта. 
                        Мы стремимся защитить ваши права и свободы, соблюдая требования законодательства о защите персональных данных.
                    </p>
                </div>
                <div class="policy_column policy-column_left">
                    <div class="policy-box-item">
                        <p class="policy-item_name">1. Общие положения</p>
                        <p class="policy-item_text">
                            Настоящая политика обработки персональных данных (далее — Политика) определяет порядок обработки и защиты персональных данных пользователей, предоставленных ими при использовании сайта <a href="https://webfolio.ru/" class="policy-item_link">webfolio.ru</a> (далее — Сайт).
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">2. Цели обработки персональных данных</p>
                        <p class="policy-item_text">
                            Персональные данные пользователей обрабатываются для следующих целей:
                            <br><br>
                                <ul>
                                    <li>Предоставление услуг, запрашиваемых пользователями.</li>
                                    <li>Улучшение качества предоставляемых услуг и функционала Сайта.</li>
                                    <li>Оповещение пользователей о новых услугах, акциях и других новостях.</li>
                                    <li>Проведение статистических и аналитических исследований.</li>
                                </ul>
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">3. Сбор персональных данных</p>
                        <p class="policy-item_text">
                            Мы можем собирать следующие типы персональных данных:
                            <br><br>
                                <ul>
                                    <li>Имя, фамилия</li>
                                    <li>Город и страну проживания</li>
                                    <li>Адрес электронной почты.</li>
                                    <li>Контактные данные</li>
                                    <li>Информацию о деятельности</li>
                                    <li>Другие данные, которые пользователь предоставляет добровольно.</li>
                                </ul>
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">4. Правовые основания для обработки данных</p>
                        <p class="policy-item_text">
                            Обработка персональных данных осуществляется на основании согласия пользователя, предоставленного при регистрации или использовании услуг Сайта.
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">5. Передача персональных данных</p>
                        <p class="policy-item_text">
                            Персональные данные пользователей могут передаваться третьим лицам только в следующих случаях:
                            <br><br>
                                <ul>
                                    <li>При наличии согласия пользователя.</li>
                                    <li>В соответствии с требованиями законодательства.</li>
                                </ul>
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">6. Хранение и защита персональных данных</p>
                        <p class="policy-item_text">
                            Мы принимаем необходимые организационные и технические меры для защиты персональных данных от несанкционированного доступа, утраты или уничтожения. Данные хранятся в течение срока, необходимого для достижения целей их обработки, после чего они будут уничтожены.
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">7. Права пользователей</p>
                        <p class="policy-item_text">
                            Пользователи имеют право:
                            <br><br>
                                <ul>
                                    <li>Запрашивать доступ к своим персональным данным.</li>
                                    <li>Исправлять неточные данные.</li>
                                    <li>Требовать удаления своих персональных данных.</li>
                                </ul>
                        </p>
                    </div>
                    <hr class="divider" />


                    <div class="policy-box-item">
                        <p class="policy-item_name">8. Изменения в политике</p>
                        <p class="policy-item_text">
                            Мы оставляем за собой право вносить изменения в данную Политику. Все изменения будут опубликованы на Сайте. Рекомендуем периодически проверять эту страницу для получения актуальной информации.
                        </p>
                    </div>
                    <hr class="divider" />

                    <div class="policy-box-item">
                        <p class="policy-item_name">9. Контакты</p>
                        <p class="policy-item_text">
                            Если у вас есть вопросы или запросы, связанные с обработкой персональных данных, вы можете обратиться к нам по следующему адресу: <a href="mailto:webfolio@help.ru" class="policy-item_link">webfolio@help.ru</a>
                        </p>
                    </div>

                    <div class="policy-footer">
                        <p class="policy-update_text">
                            Дата последнего обновления: 12.11.2024
                        </p>

                        <a download="" href="/assets/docs/policy/policy.doc" class="policy-item_link">Скачать документ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Header Normalize -->
    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection