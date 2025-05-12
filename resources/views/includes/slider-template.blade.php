<!-- slider -->
    {{-- <section class="slider" id="slider">
        <div class="container">
            <h2 class="slider-title animate">
                Что говорят веб-разработчики, которые <u style="text-decoration: underline;">уже попробовали</u>
            </h2>

            <div class="slider-box"> --}}

                {{-- <div class="slides-wrapper animate">
        <!-- Slider main container -->
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

            </div>
            <div class="swiper-slide">

            </div>
            <div class="swiper-slide">

            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <a class="switch swicth-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                <rect x="44" y="44.9604" width="44" height="44" rx="22" transform="rotate(-180 44 44.9604)" fill="#3B9DF7"/>
                <path d="M19.5321 18.9588L15.125 23.3659M15.125 23.3659L19.5321 27.7729M15.125 23.3659L28.875 23.3659" stroke="white" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="swiper-button-next">
            <a class="switch swicth-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                <rect y="0.960449" width="44" height="44" rx="22" fill="#3B9DF7"/>
                <path d="M24.4679 27.7728L28.875 23.3658M28.875 23.3658L24.4679 18.9587M28.875 23.3658H15.125" stroke="white" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        </div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        </div>
    </div>
    </div>
    </div>
    </section> --}}

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
</script>