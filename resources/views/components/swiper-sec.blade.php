<div class="swiper-sec">
    <link rel="stylesheet" href="{{ asset('css/swiper-sec.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"> Slide 1
                <img src="img/1.jpg" alt="pic 1">
            </div>
            <div class="swiper-slide">Slide 2
                <img src="img/2.jpg" alt="pic 2">
            </div>
            <div class="swiper-slide" >Slide 3
                <img src="img/3.jpg" alt="pic 3">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</div>
    <!-- Page 1 script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
                var mySwiper = new Swiper('.swiper-container', {
                
                // Optional parameters
                //direction: 'horizontal',
                //loop: true,

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
                autoplay: {
                    delay: 3000,
                },
                /*var counter = 1;
                 setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if(counter>4){
                        counter = 1;
                    }
                }, 5000); */
                });
    </script> 