<div id="nav-bar" class="head bg-dark">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <div id="logo-container">
        <img id="logo" src="img/website-logo1.png" alt="logo">
    </div>
    
    

    <div class="nav-open__overlay"></div>
    <ul class="nav-bar">
        <li><a href="/">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="/about">About</a></li>
    </ul>
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</div>
    <script>
        window.addEventListener('scroll', function () {
                if (window.scrollY < 50) {
                    document.getElementById("nav-bar").classList.add("bg-dark");
                    document.getElementById("nav-bar").classList.remove("bg-transparent");
                } else {
                    document.getElementById("nav-bar").classList.add("bg-transparent");
                    document.getElementById("nav-bar").classList.remove("bg-dark");
                }   
            });
    </script>

{{-- <script src="{{ asset('js/nav.js') }}"></script>
<script>
    function openForm1(){
    document.getElementById('signUpPage').style.display="block";
    document.getElementById('container').style.display="block";
    container.classList.remove("right-panel-active");
}
</script> --}}

<!-- <script>  
    function openForm1(){
        document.getElementById('signUpPage').style.display="block";
        document.getElementById('container').style.display="block";
        container.classList.remove("right-panel-active");
    }
    </script>

    <script>
        window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.getElementById("nav-bar").classList.add("bg-dark");
                    document.getElementById("nav-bar").classList.remove("bg-transparent");
                } else {
                    document.getElementById("nav-bar").classList.add("bg-transparent");
                    document.getElementById("nav-bar").classList.remove("bg-dark");
                }   
            });
    </script>

    <script>
        const burger = document.querySelector('.hamburger');
        const nav = document.querySelector('.nav-bar');
        const overlay = document.querySelector('.nav-open__overlay');
        burger.addEventListener('click',function() {
            console.log('hi');
            nav.classList.add('nav-active');
            overlay.classList.add('nav-open__overlay-active');
        });
    </script>

    <script>
        document.addEventListener("click", (evt) => {
            const flyoutElement = document.querySelector(".nav-bar");
            let targetElement = evt.target; // clicked element
            do {
                if (targetElement == flyoutElement) {
                    // This is a click inside. Do nothing, just return.
                    return;
                }
                // Go up the DOM
                targetElement = targetElement.parentNode;
            } while (targetElement);

            // This is a click outside.
            const nav = document.querySelector('.nav-bar');
            const overlay = document.querySelector('.nav-open__overlay');

            if(nav.classList.contains('nav-active')){
                nav.classList.remove('nav-active');
                overlay.classList.remove('nav-open__overlay-active');
            }
        }); 
    </script>-->
