@extends('app')

@section('content')
    <!-- help and Q&A page -->
    <section class="help" id="help">
        <div class="container">
            <button onclick="window.history.back(); return false;" class="backlink">
                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.40705 1.09294L1 5.49999M1 5.49999L5.40705 9.90704M1 5.49999L14.75 5.49999" stroke="#667085"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <p class="backlink_text">Вернуться назад</p>
            </button>

            <h3 class="help-title">
                Страница помощи и поддержки<br>платформы WebFolio
            </h3>

            <div class="accordeon-wrap">
                <div class="accordeon-column">
                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Что такое портфолио веб-разработчика?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">
                                Портфолио веб-разработчика — это коллекция проектов и работ, демонстрирующая навыки и опыт
                                специалиста в области веб-разработки.
                            </p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Как выбрать проекты для портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Выбирайте проекты, которые показывают ваш лучший опыт, разнообразие
                                навыков и соответствуют интересам потенциальных клиентов или работодателей.</p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Какие навыки должны быть указаны в резюме веб-разработчика?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Укажите все ключевые навыки, такие как знание языков
                                программирования (HTML, CSS, JavaScript, PHP и др.), фреймворков и технологий (React,
                                Node.js, etc.), а также опыт работы с системами управления версиями и базами данных.</p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Важно ли учитывать отзывы клиентов в портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Да, отзывы клиентов и рекомендации могут значительно повысить
                                доверие к вашему опыту и способностям, так как они подтверждают вашу профессиональную
                                репутацию.</p>
                        </div>
                    </div>
                </div>
                <div class="accordeon-column">
                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Как можно улучшить онлайн-портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Убедитесь, что она содержит краткое биографическое описание,
                                преимущества, ссылки на проекты и контактные данные, а также использует привлекательный
                                дизайн.</p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Нужны ли личные проекты в портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="17" viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Да, личные проекты могут продемонстрировать ваши навыки и
                                инициативность, особенно если у вас мало опыта работы с клиентами.</p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Как часто следует обновлять портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="17" viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Рекомендуется обновлять портфолио регулярно, добавляя новые
                                проекты и актуальные навыки, чтобы оно оставалось свежим и релевантным.</p>
                        </div>
                    </div>

                    <div class="accordeon">
                        <div class="accodeon-question_box">
                            <p class="accordeon-question">
                                Как можно продвигать свое портфолио?
                            </p>

                            <div class="accordeon-icon_box">
                                <svg class="accordeon-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="17" viewBox="0 0 16 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 0.5C8.40166 0.5 8.72727 0.825611 8.72727 1.22727V7.77273H15.2727C15.6744 7.77273 16 8.09834 16 8.5C16 8.90166 15.6744 9.22727 15.2727 9.22727H8.72727V15.7727C8.72727 16.1744 8.40166 16.5 8 16.5C7.59834 16.5 7.27273 16.1744 7.27273 15.7727V9.22727H0.727273C0.325611 9.22727 0 8.90166 0 8.5C0 8.09834 0.325611 7.77273 0.727273 7.77273H7.27273V1.22727C7.27273 0.825611 7.59834 0.5 8 0.5Z"
                                        fill="#040F0F" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordeon-content_box">
                            <p class="accordeon-content">Используйте социальные сети, профессиональные платформы (например,
                                LinkedIn), блоги и сообщества разработчиков, чтобы делиться своим портфолио и привлекать
                                внимание работодателей.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordions = document.querySelectorAll('.accordeon');

            accordions.forEach((accordion) => {
                const questionBox = accordion.querySelector('.accodeon-question_box');
                const contentBox = accordion.querySelector('.accordeon-content_box');
                const accordeonIcon = accordion.querySelector('.accordeon-icon');

                questionBox.addEventListener('click', function() {
                    const isVisible = contentBox.classList.toggle('visible');

                    if (isVisible) {
                        const scrollHeight = contentBox.scrollHeight;
                        contentBox.style.maxHeight = scrollHeight + 'px';
                        accordeonIcon.classList.add('rotate');
                    } else {
                        contentBox.style.maxHeight = '0';
                        accordeonIcon.classList.remove('rotate');
                    }
                });
            });
        });
    </script>



    <!-- Header Normalize -->
    <script src="{{ asset('js/header-normalize.js') }}"></script>
@endsection
