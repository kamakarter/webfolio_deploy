@extends('app')

@section('content')
    @php
        $hideHeaderFooter = true;
    @endphp

    <section class="admin" id="admin">
        <div class="container admin_grid ">
            <div class="admin-menu fade-in-left shadow-s">
                <a href="{{ route('show.home') }}" class="admin-logo">
                    <svg width="133" height="22" viewBox="0 0 133 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M125.74 21.0004C124.331 21.0004 123.111 20.691 122.079 20.0722C121.048 19.4535 120.249 18.5855 119.682 17.4683C119.123 16.3511 118.844 15.0535 118.844 13.5754C118.844 12.0886 119.123 10.7867 119.682 9.66949C120.249 8.54371 121.048 7.67145 122.079 7.0527C123.111 6.43395 124.331 6.12457 125.74 6.12457C127.15 6.12457 128.37 6.43395 129.401 7.0527C130.432 7.67145 131.232 8.54371 131.799 9.66949C132.366 10.7867 132.65 12.0886 132.65 13.5754C132.65 15.0535 132.366 16.3511 131.799 17.4683C131.232 18.5855 130.432 19.4535 129.401 20.0722C128.37 20.691 127.15 21.0004 125.74 21.0004ZM125.74 18.2675C126.522 18.2675 127.167 18.0613 127.674 17.6488C128.181 17.2277 128.559 16.6605 128.808 15.9472C129.066 15.2339 129.195 14.4433 129.195 13.5754C129.195 12.6902 129.066 11.891 128.808 11.1777C128.559 10.4644 128.181 9.90153 127.674 9.48903C127.167 9.06793 126.522 8.85739 125.74 8.85739C124.975 8.85739 124.335 9.06793 123.82 9.48903C123.304 9.90153 122.917 10.4644 122.659 11.1777C122.41 11.891 122.286 12.6902 122.286 13.5754C122.286 14.4433 122.41 15.2339 122.659 15.9472C122.917 16.6605 123.304 17.2277 123.82 17.6488C124.335 18.0613 124.975 18.2675 125.74 18.2675Z"
                            fill="#1D2939" />
                        <path
                            d="M113.927 20.7167V6.30498H117.317V20.7167H113.927ZM115.629 4.28115C115.087 4.28115 114.623 4.10068 114.236 3.73975C113.85 3.37881 113.656 2.94482 113.656 2.43779C113.656 1.92217 113.85 1.48389 114.236 1.12295C114.623 0.762012 115.087 0.581543 115.629 0.581543C116.161 0.581543 116.621 0.762012 117.008 1.12295C117.395 1.48389 117.588 1.91787 117.588 2.4249C117.588 2.94053 117.395 3.37881 117.008 3.73975C116.621 4.10068 116.161 4.28115 115.629 4.28115Z"
                            fill="#1D2939" />
                        <path d="M111.781 1.50964V20.7167H108.391V1.50964H111.781Z" fill="#1D2939" />
                        <path
                            d="M99.9785 21.0004C98.5691 21.0004 97.3488 20.691 96.3176 20.0722C95.2863 19.4535 94.4871 18.5855 93.9199 17.4683C93.3613 16.3511 93.082 15.0535 93.082 13.5754C93.082 12.0886 93.3613 10.7867 93.9199 9.66949C94.4871 8.54371 95.2863 7.67145 96.3176 7.0527C97.3488 6.43395 98.5691 6.12457 99.9785 6.12457C101.388 6.12457 102.608 6.43395 103.639 7.0527C104.671 7.67145 105.47 8.54371 106.037 9.66949C106.604 10.7867 106.888 12.0886 106.888 13.5754C106.888 15.0535 106.604 16.3511 106.037 17.4683C105.47 18.5855 104.671 19.4535 103.639 20.0722C102.608 20.691 101.388 21.0004 99.9785 21.0004ZM99.9785 18.2675C100.761 18.2675 101.405 18.0613 101.912 17.6488C102.419 17.2277 102.797 16.6605 103.046 15.9472C103.304 15.2339 103.433 14.4433 103.433 13.5754C103.433 12.6902 103.304 11.891 103.046 11.1777C102.797 10.4644 102.419 9.90153 101.912 9.48903C101.405 9.06793 100.761 8.85739 99.9785 8.85739C99.2137 8.85739 98.5734 9.06793 98.0578 9.48903C97.5422 9.90153 97.1555 10.4644 96.8976 11.1777C96.6484 11.891 96.5238 12.6902 96.5238 13.5754C96.5238 14.4433 96.6484 15.2339 96.8976 15.9472C97.1555 16.6605 97.5422 17.2277 98.0578 17.6488C98.5734 18.0613 99.2137 18.2675 99.9785 18.2675Z"
                            fill="#1D2939" />
                        <path
                            d="M80.7773 20.7167V1.50964H93.1008V4.42292H84.2578V10.185H92.2371V13.0596H84.2578V20.7167H80.7773Z"
                            fill="#1D2939" />
                        <path
                            d="M73.1754 20.9745C72.359 20.9745 71.6758 20.837 71.1258 20.562C70.5844 20.2784 70.1461 19.9432 69.8109 19.5565C69.4844 19.1612 69.2351 18.7874 69.0633 18.435H68.857V20.7167H65.5312V1.50964H68.9215V8.68972H69.0633C69.2351 8.34597 69.4801 7.97644 69.798 7.58113C70.116 7.17722 70.5457 6.83347 71.0871 6.54988C71.6371 6.26628 72.3375 6.12449 73.1883 6.12449C74.2969 6.12449 75.298 6.40808 76.1918 6.97527C77.0855 7.54246 77.7945 8.37605 78.3187 9.47605C78.8515 10.576 79.1179 11.9296 79.1179 13.5366C79.1179 15.1178 78.8601 16.4628 78.3445 17.5714C77.8289 18.68 77.1199 19.5264 76.2176 20.1108C75.3238 20.6866 74.3097 20.9745 73.1754 20.9745ZM72.2473 18.1901C72.9949 18.1901 73.6179 17.9882 74.1164 17.5843C74.6234 17.1803 75.0058 16.626 75.2636 15.9214C75.5215 15.2167 75.6504 14.4175 75.6504 13.5237C75.6504 12.63 75.5215 11.835 75.2636 11.1389C75.0058 10.4428 74.6277 9.89714 74.1293 9.50183C73.6308 9.10652 73.0035 8.90886 72.2473 8.90886C71.5168 8.90886 70.898 9.09793 70.391 9.47605C69.8926 9.85417 69.5101 10.3913 69.2437 11.0874C68.9859 11.7749 68.857 12.587 68.857 13.5237C68.857 14.4518 68.9859 15.2682 69.2437 15.9729C69.5101 16.669 69.8969 17.2147 70.4039 17.61C70.9109 17.9968 71.5254 18.1901 72.2473 18.1901Z"
                            fill="#1D2939" />
                        <path
                            d="M57.6637 21.0004C56.2199 21.0004 54.9738 20.6996 53.9254 20.098C52.8769 19.4879 52.0691 18.6285 51.502 17.5199C50.9434 16.4113 50.6641 15.105 50.6641 13.6011C50.6641 12.1144 50.9434 10.8125 51.502 9.69528C52.0605 8.56949 52.8469 7.69293 53.8609 7.06559C54.875 6.43824 56.0695 6.12457 57.4445 6.12457C58.3297 6.12457 59.1676 6.26637 59.9582 6.54996C60.7574 6.83356 61.4621 7.27184 62.0722 7.86481C62.691 8.45778 63.1765 9.21403 63.5289 10.1336C63.8812 11.0445 64.0574 12.1316 64.0574 13.3949V14.4519H52.2496V12.1703H62.3687L60.7832 12.8406C60.7832 12.0242 60.6586 11.3152 60.4094 10.7136C60.1601 10.1035 59.7906 9.62653 59.3008 9.28278C58.8109 8.93903 58.2008 8.76715 57.4703 8.76715C56.7398 8.76715 56.1168 8.93903 55.6012 9.28278C55.0855 9.62653 54.6945 10.0906 54.4281 10.675C54.1617 11.2507 54.0285 11.8953 54.0285 12.6086V14.1941C54.0285 15.0707 54.1789 15.8226 54.4797 16.45C54.7891 17.0687 55.2187 17.5414 55.7687 17.8679C56.3273 18.1945 56.9762 18.3578 57.7152 18.3578C58.1965 18.3578 58.6347 18.289 59.0301 18.1515C59.434 18.014 59.7777 17.8078 60.0613 17.5328C60.3535 17.2492 60.5769 16.9011 60.7316 16.4886L63.9027 16.8625C63.6965 17.6961 63.314 18.4265 62.7554 19.0539C62.2054 19.6726 61.4965 20.1539 60.6285 20.4976C59.7691 20.8328 58.7808 21.0004 57.6637 21.0004Z"
                            fill="#1D2939" />
                        <path
                            d="M31.5 20.7167L26.0859 1.50964H29.8242L33.2918 15.6249H33.4594L37.159 1.50964H40.575L44.2488 15.6378H44.4421L47.8839 1.50964H51.648L46.221 20.7167H42.7793L38.9379 7.25886H38.7832L34.9547 20.7167H31.5Z"
                            fill="#1D2939" />
                        <path
                            d="M11 5.5C11 4.4122 10.6774 3.34884 10.0731 2.44437C9.46871 1.5399 8.60973 0.834947 7.60474 0.418665C6.59975 0.00238307 5.49389 -0.106535 4.42699 0.105683C3.3601 0.317902 2.3801 0.841726 1.61091 1.61091C0.841724 2.3801 0.317901 3.36011 0.105683 4.427C-0.106535 5.4939 0.00238307 6.59977 0.418664 7.60476C0.834945 8.60975 1.53989 9.46874 2.44436 10.0731C3.34883 10.6774 4.41219 11 5.49999 11L-nan -nanL5.49999 11C5.49999 7.96243 7.96242 5.5 11 5.5L-nan -nanL11 5.5Z"
                            fill="#F43F5E" />
                        <path
                            d="M11 16.5C11 17.5878 10.6774 18.6512 10.0731 19.5556C9.46871 20.4601 8.60973 21.1651 7.60474 21.5813C6.59975 21.9976 5.49389 22.1065 4.42699 21.8943C3.3601 21.6821 2.3801 21.1583 1.61091 20.3891C0.841724 19.6199 0.317901 18.6399 0.105683 17.573C-0.106535 16.5061 0.00238307 15.4002 0.418664 14.3952C0.834945 13.3902 1.53989 12.5313 2.44436 11.9269C3.34883 11.3226 4.41219 11 5.49999 11V16.5H11Z"
                            fill="#34D399" />
                        <path
                            d="M11 5.5C11 4.4122 11.3226 3.34884 11.9269 2.44437C12.5313 1.5399 13.3903 0.834947 14.3953 0.418665C15.4002 0.00238307 16.5061 -0.106535 17.573 0.105683C18.6399 0.317902 19.6199 0.841726 20.3891 1.61091C21.1583 2.3801 21.6821 3.36011 21.8943 4.427C22.1065 5.4939 21.9976 6.59977 21.5813 7.60476C21.1651 8.60975 20.4601 9.46874 19.5556 10.0731C18.6512 10.6774 17.5878 11 16.5 11L-nan -nanL16.5 11C16.5 7.96243 14.0376 5.5 11 5.5L-nan -nanL11 5.5Z"
                            fill="#55ACEE" />
                        <path
                            d="M11 16.5C11 17.5878 11.3226 18.6512 11.9269 19.5556C12.5313 20.4601 13.3903 21.1651 14.3953 21.5813C15.4002 21.9976 16.5061 22.1065 17.573 21.8943C18.6399 21.6821 19.6199 21.1583 20.3891 20.3891C21.1583 19.6199 21.6821 18.6399 21.8943 17.573C22.1065 16.5061 21.9976 15.4002 21.5813 14.3952C21.1651 13.3902 20.4601 12.5313 19.5556 11.9269C18.6512 11.3226 17.5878 11 16.5 11L-nan -nanL16.5 11C16.5 14.0376 14.0376 16.5 11 16.5L-nan -nanL11 16.5Z"
                            fill="#F59E0B" />
                        <path
                            d="M5.5 11C5.5 7.96243 7.96243 5.5 11 5.5C14.0375 5.5 16.5 7.96243 16.5 11C16.5 14.0376 14.0375 16.5 11 16.5H5.5V11Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.23333 15.7667H11C13.6325 15.7667 15.7666 13.6326 15.7666 11C15.7666 8.36744 13.6325 6.23333 11 6.23333C8.36744 6.23333 6.23333 8.36744 6.23333 11V15.7667ZM11 5.5C7.96243 5.5 5.5 7.96243 5.5 11V16.5H11C14.0375 16.5 16.5 14.0376 16.5 11C16.5 7.96243 14.0375 5.5 11 5.5Z"
                            fill="#2A3346" />
                        <path
                            d="M9.21212 13.5667L8.06641 9.53333H8.99159L9.65589 12.335H9.69085L10.4197 9.53333H11.2131L11.9419 12.3431H11.9769L12.6412 9.53333H13.5664L12.418 13.5667H11.5923L10.8339 10.9301H10.8016L10.0405 13.5667H9.21212Z"
                            fill="#2A3346" />
                    </svg>
                </a>

                <div class="admin-navigation_box">
                    <a href="#dashboard" class="admin-navigation_link active" data-tab="dashboard">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.22222 3H1V9.22222H7.22222V3Z" stroke="#D8DDE1" stroke-width="1.75"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 3H10.7778V9.22222H17V3Z" stroke="#D8DDE1" stroke-width="1.75"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 12.7778H10.7778V19H17V12.7778Z" stroke="#D8DDE1" stroke-width="1.75"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.22222 12.7778H1V19H7.22222V12.7778Z" stroke="#D8DDE1" stroke-width="1.75"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Главная</p>
                    </a>

                    <a href="#users" class="admin-navigation_link" data-tab="users">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2222 18V16.2222C15.2222 15.2792 14.8476 14.3749 14.1808 13.7081C13.514 13.0413 12.6097 12.6667 11.6667 12.6667H4.55556C3.61256 12.6667 2.70819 13.0413 2.0414 13.7081C1.3746 14.3749 1 15.2792 1 16.2222V18M20.5556 18V16.2222C20.555 15.4344 20.2928 14.6691 19.8101 14.0465C19.3274 13.4239 18.6517 12.9792 17.8889 12.7822M14.3333 2.11556C15.0981 2.31138 15.776 2.75618 16.2601 3.37983C16.7442 4.00348 17.007 4.77052 17.007 5.56C17.007 6.34948 16.7442 7.11652 16.2601 7.74017C15.776 8.36382 15.0981 8.80862 14.3333 9.00444M11.6667 5.55556C11.6667 7.51923 10.0748 9.11111 8.11111 9.11111C6.14743 9.11111 4.55556 7.51923 4.55556 5.55556C4.55556 3.59188 6.14743 2 8.11111 2C10.0748 2 11.6667 3.59188 11.6667 5.55556Z"
                                    stroke="#D8DDE1" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        <p>Пользователи</p>
                    </a>

                    <a href="#tariffs" class="admin-navigation_link admin-navigation_link_dop" data-tab="tariffs">
                        <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#344054" stroke="#344054">
                            <path d="M640-120q-33 0-56.5-23.5T560-200v-160q0-33 23.5-56.5T640-440h160q33 0 56.5 23.5T880-360v160q0 33-23.5 56.5T800-120H640Zm0-80h160v-160H640v160ZM80-240v-80h360v80H80Zm560-280q-33 0-56.5-23.5T560-600v-160q0-33 23.5-56.5T640-840h160q33 0 56.5 23.5T880-760v160q0 33-23.5 56.5T800-520H640Zm0-80h160v-160H640v160ZM80-640v-80h360v80H80Zm640 360Zm0-400Z"/>
                        </svg>
                        <p>Тарифы</p>
                    </a>

                    <a href="#subscriptions" class="admin-navigation_link admin-navigation_link_dop" data-tab="subscriptions">
                        <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#344054" stroke="#344054">
                            <path d="M640-120q-33 0-56.5-23.5T560-200v-160q0-33 23.5-56.5T640-440h160q33 0 56.5 23.5T880-360v160q0 33-23.5 56.5T800-120H640Zm0-80h160v-160H640v160ZM80-240v-80h360v80H80Zm560-280q-33 0-56.5-23.5T560-600v-160q0-33 23.5-56.5T640-840h160q33 0 56.5 23.5T880-760v160q0 33-23.5 56.5T800-520H640Zm0-80h160v-160H640v160ZM80-640v-80h360v80H80Zm640 360Zm0-400Z"/>
                        </svg>  
                        <p>Подписки</p>
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="admin-navigation_link" name="out2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M6.33333 13H4.11111C3.81643 13 3.53381 12.8829 3.32544 12.6746C3.11706 12.4662 3 12.1836 3 11.8889V4.11111C3 3.81643 3.11706 3.53381 3.32544 3.32544C3.53381 3.11706 3.81643 3 4.11111 3H6.33333M10.2222 10.7778L13 8M13 8L10.2222 5.22222M13 8H6.33333"
                                    stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Выйти</p>
                        </button>
                    </form>
                </div>
            </div>

            <div class="admin-section fade-in-right shadow-s">
                <!-- Dashboard Tab -->
                <div class="tab-content active" id="dashboard">
                    <div class="admin-title_box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_290_5485)">
                                <path d="M2 17L12 22L22 17M2 12L12 17L22 12M12 2L2 7L12 12L22 7L12 2Z" stroke="#D8DDE1"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_290_5485">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="admin-title_textbox">
                            <a href="#dashboard" class="admin-title">Панель администратора</a>
                            /
                            <a href="#dashboard" class="admin-title_dop">Главная</a>
                        </div>
                    </div>

                    <div class="admin-section_content_box dashboard-first-section">
                        <div class="dashboard-content">
                            <h2 class="admin-title-on-dashboard">Добро пожаловать в панель администратора</h2>
                            <p class="admin-subtitle">Здесь вы можете управлять пользователями и настройками системы.</p>
                        </div>
                    </div>

                    <div class="dashboard-analytics-grid-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_290_5485)">
                                <path d="M2 17L12 22L22 17M2 12L12 17L22 12M12 2L2 7L12 12L22 7L12 2Z" stroke="#D8DDE1"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_290_5485">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="" class="admin-title">Статистика сервиса</a>    
                    </div>

                    <div class="dashboard-analytics-grid">
                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $users->count() }}</h3>
                            <p>Всего пользователей <br>зарегистрировано в системе</p>
                        </div>
                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $newUsersThisMonth }}</h3>
                            <p>Новых пользователей <br> в этом месяце</p>
                        </div>
                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $usersWithCompleteProfile }}</h3>
                            <p>Пользователи, хоть немного заполнившие резюме</p>
                        </div>

                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $usersWithCompleteFiftyProfile }}</h3>
                            <p>Пользователей, заполнивших резюме на 50% </p>    
                        </div>

                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $subscribedUsers }}</h3>
                            <p>Пользователей с активной подпиской </p>    
                        </div>

                        <div class="dashboard-analytics-grid-item">
                            <h3>{{ $expiredSubscriptions }}</h3>
                            <p>Пользователей с истекшей подпиской </p>    
                        </div>

                        <div class="dashboard-analytics-grid-item">
                            <div class="active_span">Тарифный план</div>
                            <h5><b>{{ $popularTariff->name }}</b></h5>
                            <p>Самый популярный тариф подписки среди пользователей</p>    
                        </div>
                    </div>
                </div>

                <!-- Users Tab -->
                <div class="tab-content" id="users">
                    <div class="admin-title_box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_290_5485)">
                                <path d="M2 17L12 22L22 17M2 12L12 17L22 12M12 2L2 7L12 12L22 7L12 2Z" stroke="#D8DDE1"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_290_5485">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="admin-title_textbox">
                            <a href="#users" class="admin-title">Панель администратора</a>
                            /
                            <a href="#users" class="admin-title_dop">Пользователи</a>
                        </div>
                    </div>

                    <div class="admin-section_content_box">
                        <div class="admin-users">
                            <!-- шапка сетки -->
                            <div class="admin-users_box users-grid">
                                <div class="grid-element grid-title">Имя</div>
                                <div class="grid-element grid-title">Email</div>
                                <div class="grid-element grid-title">Ссылка на портфолио</div>
                                <div class="grid-element grid-title"></div>
                            </div>

                            <!-- пользователи -->
                            @forelse ($users as $user)
                                <div class="admin-users_box users-grid">
                                    <div class="grid-element in-user-grid">
                                        <div class="in-user-grid_box">
                                            <div class="in-user-grid_avatar_box">
                                                @if ($user->user_avatar)
                                                    <img src="{{ $user->user_avatar }}" alt="avatar"
                                                        class="in-user-grid_avatar">
                                                @else
                                                    <img src="{{ asset('icons/default_avatar.svg') }}" alt="user-avatar"
                                                        class="user-avatar">
                                                @endif
                                            </div>

                                            <div class="in-user-grid_data_box">
                                                <p class="in-user-grid_dataname">
                                                    {{ $user->name }} {{ $user->surname }}
                                                </p>
                                                <p class="in-user-grid_datalogin">
                                                    {{ $user->login }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ $user->email }}
                                        </p>
                                    </div>
                                    <div class="grid-element in-user-grid">
                                        <a href="{{ route('show.user.account', $user->login) }}" target="_blank"
                                            class="in-user-grid_link">{{ '@' . $user->login }}</a>
                                    </div>
                                    <div class="grid-element in-user-grid">
                                        <div class="in-user-grid_action_box">

                                            @if ($user->role == 'user' || $user->role == 'admin')
                                                <a href="{{ route('block.user', $user->id) }}" class="in-user-action"
                                                    title="Разблокировать пользователя">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                        viewBox="0 0 17 18" fill="none">
                                                        <path
                                                            d="M4.80076 8.20222V5.00302C4.79976 4.01131 5.16729 3.0546 5.832 2.31863C6.4967 1.58266 7.41116 1.11992 8.39785 1.02026C9.38455 0.920589 10.3731 1.1911 11.1715 1.77928C11.97 2.36746 12.5214 3.23134 12.7188 4.20322M3.20116 8.20222H14.3983C15.2818 8.20222 15.9979 8.91838 15.9979 9.80181V15.4004C15.9979 16.2838 15.2818 17 14.3983 17H3.20116C2.31773 17 1.60156 16.2838 1.60156 15.4004V9.80181C1.60156 8.91838 2.31773 8.20222 3.20116 8.20222Z"
                                                            stroke="#475467" stroke-width="1.5996" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            @else
                                                <a href="{{ route('unblock.user', $user->id) }}" class="in-user-action"
                                                    title="Заблокировать пользователя">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                        viewBox="0 0 17 18" fill="none">
                                                        <path
                                                            d="M4.80156 8.2V5C4.80156 3.93913 5.22299 2.92172 5.97314 2.17157C6.72328 1.42143 7.7407 1 8.80156 1C9.86243 1 10.8798 1.42143 11.63 2.17157C12.3801 2.92172 12.8016 3.93913 12.8016 5V8.2M3.20156 8.2H14.4016C15.2852 8.2 16.0016 8.91634 16.0016 9.8V15.4C16.0016 16.2837 15.2852 17 14.4016 17H3.20156C2.31791 17 1.60156 16.2837 1.60156 15.4V9.8C1.60156 8.91634 2.31791 8.2 3.20156 8.2Z"
                                                            stroke="#475467" stroke-width="1.6" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="grid-title">В системе нет пользователей.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Tariffs Tab -->
                <div class="tab-content" id="tariffs">
                    <div class="admin-title_box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_290_5485)">
                                <path d="M2 17L12 22L22 17M2 12L12 17L22 12M12 2L2 7L12 12L22 7L12 2Z" stroke="#D8DDE1"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_290_5485">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="admin-title_textbox">
                            <a href="" class="admin-title">Панель администратора</a>
                            /
                            <a href="" class="admin-title_dop">Управление тарифами</a>
                        </div>

                        <a href="{{ route('show.add.tariff') }}" class="base-btn-action">
                            <div class="base-btn-action-plus-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                    viewBox="0 0 10 10" fill="none">
                                    <path
                                        d="M7.80204 4.44428H5.55552V2.19775C5.55552 1.90435 5.30725 1.6665 4.99996 1.6665C4.69267 1.6665 4.4444 1.90435 4.4444 2.19775V4.44428H2.19788C1.90447 4.44428 1.66663 4.69255 1.66663 4.99984C1.66663 5.30713 1.90447 5.55539 2.19788 5.55539H4.4444V7.80192C4.4444 8.09532 4.69267 8.33317 4.99996 8.33317C5.30725 8.33317 5.55552 8.09532 5.55552 7.80192V5.55539H7.80204C8.09545 5.55539 8.33329 5.30713 8.33329 4.99984C8.33329 4.69255 8.09545 4.44428 7.80204 4.44428Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="base-btn-action-content">
                                Добавить тариф
                            </div>
                        </a>
                    </div>

                    <div class="admin-section_content_box">
                        <div class="admin-users">
                            <!-- шапка сетки -->
                            <div class="admin-users_box users-grid">
                                <div class="grid-element grid-title">Тариф</div>
                                <div class="grid-element grid-title">Стоимость</div>
                                <div class="grid-element grid-title">Срок действия</div>
                                <div class="grid-element grid-title"> </div>
                            </div>

                            <!-- пользователи -->
                            @forelse ($tariffs as $tariff)
                                <div class="admin-users_box users-grid">
                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ $tariff->name }}
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ $tariff->price . ' рублей' }}
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ $tariff->duration . ' дней' }}
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid">
                                        <div class="in-user-grid_action_box">
                                            <div class="user-exp_actions">
                                                <!-- удаление опыта -->
                                                <a href="{{ route('show.delete.tariff', $tariff->id) }}"
                                                    class="user-exp_action circle delete-experience" title="Удалить">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20"
                                                        viewBox="0 0 16 20" fill="none">
                                                        <path
                                                            d="M10.9091 19.4545H5.09091C4.12649 19.4545 3.20156 19.0714 2.51961 18.3894C1.83766 17.7075 1.45455 16.7826 1.45455 15.8181V7.09086C1.45455 6.89798 1.53117 6.713 1.66756 6.57661C1.80395 6.44021 1.98893 6.36359 2.18182 6.36359C2.3747 6.36359 2.55969 6.44021 2.69608 6.57661C2.83247 6.713 2.90909 6.89798 2.90909 7.09086V15.8181C2.90909 16.3968 3.13896 16.9517 3.54813 17.3609C3.9573 17.7701 4.51226 18 5.09091 18H10.9091C11.4877 18 12.0427 17.7701 12.4519 17.3609C12.861 16.9517 13.0909 16.3968 13.0909 15.8181V7.09086C13.0909 6.89798 13.1675 6.713 13.3039 6.57661C13.4403 6.44021 13.6253 6.36359 13.8182 6.36359C14.0111 6.36359 14.1961 6.44021 14.3324 6.57661C14.4688 6.713 14.5455 6.89798 14.5455 7.09086V15.8181C14.5455 16.7826 14.1623 17.7075 13.4804 18.3894C12.7984 19.0714 11.8735 19.4545 10.9091 19.4545Z"
                                                            fill="white" />
                                                        <path
                                                            d="M15.2727 4.90905H0.727273C0.534388 4.90905 0.349403 4.83242 0.213013 4.69603C0.0766233 4.55964 0 4.37466 0 4.18177C0 3.98889 0.0766233 3.8039 0.213013 3.66751C0.349403 3.53112 0.534388 3.4545 0.727273 3.4545H15.2727C15.4656 3.4545 15.6506 3.53112 15.787 3.66751C15.9234 3.8039 16 3.98889 16 4.18177C16 4.37466 15.9234 4.55964 15.787 4.69603C15.6506 4.83242 15.4656 4.90905 15.2727 4.90905Z"
                                                            fill="white" />
                                                        <path
                                                            d="M10.9091 4.90905H5.09091C4.89802 4.90905 4.71304 4.83242 4.57665 4.69603C4.44026 4.55964 4.36364 4.37466 4.36364 4.18177V2.72723C4.36364 2.14857 4.59351 1.59362 5.00268 1.18445C5.41185 0.77528 5.9668 0.54541 6.54545 0.54541H9.45455C10.0332 0.54541 10.5882 0.77528 10.9973 1.18445C11.4065 1.59362 11.6364 2.14857 11.6364 2.72723V4.18177C11.6364 4.37466 11.5597 4.55964 11.4234 4.69603C11.287 4.83242 11.102 4.90905 10.9091 4.90905ZM5.81818 3.4545H10.1818V2.72723C10.1818 2.53434 10.1052 2.34936 9.96881 2.21297C9.83242 2.07658 9.64743 1.99996 9.45455 1.99996H6.54545C6.35257 1.99996 6.16759 2.07658 6.0312 2.21297C5.89481 2.34936 5.81818 2.53434 5.81818 2.72723V3.4545Z"
                                                            fill="white" />
                                                        <path
                                                            d="M6.54545 15.0909C6.35257 15.0909 6.16759 15.0142 6.0312 14.8779C5.89481 14.7415 5.81818 14.5565 5.81818 14.3636V9.27268C5.81818 9.0798 5.89481 8.89481 6.0312 8.75842C6.16759 8.62203 6.35257 8.54541 6.54545 8.54541C6.73834 8.54541 6.92332 8.62203 7.05971 8.75842C7.1961 8.89481 7.27273 9.0798 7.27273 9.27268V14.3636C7.27273 14.5565 7.1961 14.7415 7.05971 14.8779C6.92332 15.0142 6.73834 15.0909 6.54545 15.0909Z"
                                                            fill="white" />
                                                        <path
                                                            d="M9.45455 15.0909C9.26166 15.0909 9.07668 15.0142 8.94029 14.8779C8.8039 14.7415 8.72727 14.5565 8.72727 14.3636V9.27268C8.72727 9.0798 8.8039 8.89481 8.94029 8.75842C9.07668 8.62203 9.26166 8.54541 9.45455 8.54541C9.64743 8.54541 9.83242 8.62203 9.96881 8.75842C10.1052 8.89481 10.1818 9.0798 10.1818 9.27268V14.3636C10.1818 14.5565 10.1052 14.7415 9.96881 14.8779C9.83242 15.0142 9.64743 15.0909 9.45455 15.0909Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                                <!-- редактирование опыта -->
                                                <a href="{{ route('show.edit.tariff', $tariff->id) }}"
                                                    class="user-exp_action circle edit-experience" title="Изменить">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path
                                                            d="M0 11.0829V14H2.91707L11.5244 5.39269L8.60731 2.47562L0 11.0829ZM13.7725 3.1446C14.0758 2.84123 14.0758 2.34727 13.7725 2.0439L11.9561 0.227532C11.6527 -0.0758439 11.1588 -0.0758439 10.8554 0.227532L9.43187 1.65106L12.3489 4.56813L13.7725 3.1446Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty

                                <div class="admin_default_window">
                                    <p>В системе нет тарифов.</p>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>

                <!-- Subscriptions Tab -->
                <div class="tab-content" id="subscriptions">
                    <div class="admin-title_box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_290_5485)">
                                <path d="M2 17L12 22L22 17M2 12L12 17L22 12M12 2L2 7L12 12L22 7L12 2Z" stroke="#D8DDE1"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_290_5485">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="admin-title_textbox">
                            <a href="#users" class="admin-title">Панель администратора</a>
                            /
                            <a href="#users" class="admin-title_dop">Подписки пользователей</a>
                        </div>
                    </div>

                    <div class="admin-section_content_box">
                        <div class="admin-users">
                            <!-- шапка сетки -->
                            <div class="admin-users_box users-grid">
                                {{-- <div class="grid-element">ID</div> --}}
                                <div class="grid-element grid-title">Логин</div>
                                <div class="grid-element grid-title">Тариф</div>
                                <div class="grid-element grid-title">Срок действия</div>
                                <div class="grid-element grid-title">Статус</div>
                            </div>

                            <!-- пользователи -->
                            @forelse ($subscriptions as $subscription)
                                <div class="admin-users_box users-grid">
                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            @if($subscription->user && !empty($subscription->user->name) && !empty($subscription->user->surname))
                                                {{ $subscription->user->name . ' ' . $subscription->user->surname }}
                                            @else
                                                {{ $subscription->user->login }}
                                            @endif
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ $subscription->tariff->name }}
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid">
                                        <p class="in-user-grid_dataemail">
                                            {{ \Carbon\Carbon::parse($subscription->start_date)->format('d.m.Y') }} - {{ \Carbon\Carbon::parse($subscription->end_date)->format('d.m.Y') }}
                                        </p>
                                    </div>

                                    <div class="grid-element in-user-grid is_active_box">
                                        @if($subscription->is_active)
                                            <span class="in-user-grid_dataemail is_active_text yes">Активна</span>
                                        @else
                                            <span class="in-user-grid_dataemail is_active_text no">Не активна</span>
                                        @endif
                                    </div>
                                </div>
                            @empty

                                <div class="admin_default_window">
                                    <p>Нет активных подписок.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/admin-tabs.js') }}" defer></script>

    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block !important;
        }

        .admin-navigation_link {
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .admin-navigation_link.active {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .admin-navigation_link.active::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background-color: #1D2939;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
