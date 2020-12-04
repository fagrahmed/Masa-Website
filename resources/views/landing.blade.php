<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>

    <header >
        @include('components.nav-bar')
    </header>
    
    <div id="page-one" >
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
    
    <div id="page-two">
        <div id="page-two__container1"> 
            <h3 data-aos="fade-in"><strong>What We Offer </strong>Helps You</h3>
            <div class="parts"> 
                <div id="part1">
                    <img class="icons" data-aos="slide-down" src="/img/Clock.svg"/>
                    <h4 data-aos="fade-in">HVAC</h4>
                    <p data-aos="fade-in">small info or categories!</p>
                </div>
                <div id="part2"> 
                    <img class="icons" data-aos="slide-down" src="/img/money.svg"/>
                    <h4 data-aos="fade-in">Fire Fighting</h4>
                    <p data-aos="fade-in">donaldson and other stuff</p>
                </div>

                <div id="part3"> 
                    <img class="icons" data-aos="slide-down" src="/img/Recommendations.svg"/>
                    <h4 data-aos="fade-in">Siztic</h4>
                    <p data-aos="fade-in">hopefully i wrote it correctly</p>
                </div>
            </div>

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

    <!-- AOS script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init(
        {
        duration: 1500,
        once: true,
        
        }
    );
    </script>

    <!-- Form script -->
    <script>  
    function openForm(){
        document.getElementById('signUpPage').style.display="block";
        document.getElementById('container').style.display="block";
        container.classList.add("right-panel-active");
    }
    </script>
</body>
</html>
