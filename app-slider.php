<div id="banner">
    <svg class="left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
        <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm2 15-6-5 6-5v10z"></path>
    </svg>
    <svg class="right" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
        <path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zM10 7l6 5-6 5V7z"></path>
    </svg>
    <img src="./assets/images/banner/slide1.jpg" alt="" srcset="">
    <img src="./assets/images/banner/slide2.jpg" alt="" srcset="">
    <img src="./assets/images/banner/slide3.jpg" alt="" srcset="">
    <img src="./assets/images/banner/slide4.png" alt="" srcset="">
    <!-- <img src="./assets/images/banner/slide1.jpg" alt="" srcset="">
    <img src="./assets/images/banner/slide1.jpg" alt="" srcset="">
    <img src="./assets/images/banner/slide1.jpg" alt="" srcset=""> -->
</div>

<script>
    let slides = document.querySelectorAll("#banner img");
    let left_btn = document.querySelector("#banner .left");
    let right_btn = document.querySelector("#banner .right");
    let currentSlide = 0;

    function showSlide(n) {
        slides[currentSlide].classList.remove("active");
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add("active");
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function previousSlide() {
        showSlide(currentSlide - 1);
    }

    setInterval(nextSlide, 3000);

    showSlide(currentSlide);

    left_btn.addEventListener("click", previousSlide);
    right_btn.addEventListener("click", nextSlide);
</script>

<style>
    #banner {
        width: 100%;
        height: 520px;
        position: relative;
        overflow: hidden;
        z-index: 2;
    }

    #banner img {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease;
    }

    #banner img.active {
        opacity: 1;
        display: block;
    }

    svg.right,
    svg.left {
        position: absolute;
        height: 60px;
        z-index: 2;
        top: 50%;
        width: 60px;
        z-index: 1000;
        transform: translateY(-50%);
        opacity: .8;
        cursor: pointer;
    }

    svg.right {
        right: 12px;
    }

    svg.left {
        left: 12px;
    }
</style>
