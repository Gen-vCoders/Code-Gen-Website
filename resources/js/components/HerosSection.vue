<template>
    <!-- ======= Hero Section Start ======= -->
    <section id="hero" class="d-flex align-items-center bg-light">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 gap-4 hero_sec_cont">
                    <h1>Better Solutions For Your Business</h1>
                    <p>At Coding Genius, we specialize in seamless full-stack development, crafting tailored solutions
                        with
                        user-centric design, scalability, and robust performance. Our commitment extends beyond
                        development,
                        providing continuous support for secure, bug-free, and optimized solutions.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <div class="linkWrap">
                            <a class="style-9" href="">
                                <span>Get Started</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img :src="HeroImg" class="img-fluid animated" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Hero Section End ======= -->
</template>
<script>
import HeroImg from "../../../public/images/hero-img.png"
export default {
    data() {
        return {
            HeroImg
        }
    }
}
</script>
<style>
/* hero section */
#hero .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

.hero_sec_cont h1 {
    font-weight: 900;
    font-size: 64px;
}

.style-9 {
    position: relative;
    white-space: nowrap;
    color: #000;
    font-family: aktiv-grotesk-extended, sans-serif;
    font-size: 24px;
    text-decoration: none;
    cursor: pointer;

    &:hover {
        &:before {
            transform: translate3d(0, 2px, 0) scale3d(1.08, 3, 1);
            clip-path: polygon(0% 0%, 0% 100%, 50% 100%, 50% 0, 50% 0, 50% 100%, 50% 100%, 0 100%, 100% 100%, 100% 0%);
        }

        span {
            transform: translate3d(0, -2px, 0);
        }
    }

    &:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 1px;
        background: currentColor;
        top: 100%;
        left: 0;
        pointer-events: none;
        transform-origin: 50% 100%;
        transition: clip-path 0.3s, transform 0.3s cubic-bezier(0.2, 1, 0.8, 1);
        clip-path: polygon(0% 0%, 0% 100%, 0 100%, 0 0, 100% 0, 100% 100%, 0 100%, 0 100%, 100% 100%, 100% 0%);
    }

    span {
        display: inline-block;
        transition: transform 0.3s cubic-bezier(0.2, 1, 0.8, 1);
    }
}

/* home page end */
</style>