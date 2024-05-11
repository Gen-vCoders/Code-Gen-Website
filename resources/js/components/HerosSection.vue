<template>
    <!-- ======= Hero Section Start ======= -->
    <section id="hero" class="d-flex align-items-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 gap-4 hero_sec_cont">
                    <h1>Better Solutions For Your Business</h1>
                    <p>At Coding Genius, we specialize in seamless full-stack development, crafting tailored solutions with
                        user-centric design, scalability, and robust performance. Our commitment extends beyond development,
                        providing continuous support for secure, bug-free, and optimized solutions.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <button type="button" class="btn red_btn rounded-pill get-started_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Get Started</button>

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
/* home page end */
</style>