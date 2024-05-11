<template>
    <NavBar></NavBar>
    <!-- Service Header -->
    <section id="services_section" class="sec bg-light">
        <div class="container">
            <div class="section-title text-center mb-30">
                <h2 class="title">Web Development</h2>
            </div>
        </div>
    </section>
    <!-- our strategy -->
    <section class="our_strategy_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><img :src="WebDevLogo" class="img-fluid animated"
                        alt="about section image" loading="lazy"></div>
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 gap-4 about_content">
                    <h2>Our Web Development Strategy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat dignissim quam, in pretium velit
                        aliquet a. Proin in iaculis purus. Praesent augue purus, congue ut lectus ut, aliquet imperdiet
                        justo. Proin fermentum enim porta condimentum lacinia. Curabitur consectetur varius dapibus. Cras
                        sed pulvinar velit. Vivamus accumsan scelerisque arcu, at ultrices eros sagittis a. Maecenas vitae
                        quam magna. Aliquam sed massa augue. Vivamus consectetur a nisl non iaculis. Aliquam ut dictum odio.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="tech_work_with bg-light p-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col tech_head">
                    <h3>Technologoies We Work With</h3>
                </div>
                <div class="tech_logo">
                    <img :src="HtmlLogo" alt="html logo" class="img-fluid">
                </div>
                <div class="tech_logo">
                    <img :src="CssLogo" alt="css logo" class="img-fluid">
                </div>
                <div class="tech_logo">
                    <img :src="JsLogo" alt="javascript logo" class="img-fluid">
                </div>
                <div class="tech_logo">
                    <img :src="PhpLogo" alt="php logo" class="img-fluid">
                </div>
                <div class="tech_logo">
                    <img :src="LaravelLogo" alt="laravel logo" class="img-fluid">
                </div>
                <div class="tech_logo">
                    <img :src="VuejsLogo" alt="vue js logo" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Approch section start -->
    <OurAppr></OurAppr>
    <!-- Contact Form -->
    <div class="bg-light p-5 rounded mt-4 text-center">
        <h1>Get In Touch</h1>
        <p class="lead">Dont worry for contact we are available</p>
        <button class="btn btn-lg red_btn rounded-pill get-started_btn" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Contact us »</button>
    </div>

    <FooterMain></FooterMain>
</template>
<script>
import NavBar from '../components/NavBar.vue';
import FooterMain from '../components/FooterMain.vue';
import HtmlLogo from '../../../public/images/html.png';
import CssLogo from '../../../public/images/css.png';
import JsLogo from '../../../public/images/javascript.png';
import PhpLogo from '../../../public/images/php.png';
import LaravelLogo from '../../../public/images/laravel.png';
import VuejsLogo from '../../../public/images/vuejs.png';
import OurAppr from '../components/OurApproch.vue';
import WebDevLogo from '../../../public/images/webDev.png';
export default {
    data() {
        return {
            HtmlLogo,
            CssLogo,
            JsLogo,
            PhpLogo,
            LaravelLogo,
            VuejsLogo,
            WebDevLogo
        }
    },
    components: {
        NavBar,
        FooterMain,
        OurAppr
    }

}
</script>
<style>
.feature-icon {
    font-size: 2rem;
    color: #007bff;
}

.tech_head {
    max-width: 260px !important;
    width: 100% !important;
}

.tech_logo {
    width: 100px !important;
}</style>