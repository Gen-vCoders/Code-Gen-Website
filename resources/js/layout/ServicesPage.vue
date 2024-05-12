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
                <div class="col-lg-6"><img :src="WebDevLogo" class="img-fluid animated" alt="about section image"
                        loading="lazy"></div>
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 gap-4 about_content">
                    <h2>Our Web Development Strategy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat dignissim quam, in pretium
                        velit
                        aliquet a. Proin in iaculis purus. Praesent augue purus, congue ut lectus ut, aliquet imperdiet
                        justo. Proin fermentum enim porta condimentum lacinia. Curabitur consectetur varius dapibus.
                        Cras
                        sed pulvinar velit. Vivamus accumsan scelerisque arcu, at ultrices eros sagittis a. Maecenas
                        vitae
                        quam magna. Aliquam sed massa augue. Vivamus consectetur a nisl non iaculis. Aliquam ut dictum
                        odio.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="skills bg-light p-5">
        <div class="container">
            <div class="row justify-content-around align-items-center skills-flex-container">
                <div class="col-4 tech_head">
                    <h3>Technologoies We Work With</h3>
                </div>
                
                <div class="box">
                    <div class="image">
                        <img :src="HtmlLogo" alt="html logo" class="img-fluid">
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img :src="CssLogo" alt="css logo" class="img-fluid">
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img :src="JsLogo" alt="javascript logo" class="img-fluid">
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img :src="PhpLogo" alt="php logo" class="img-fluid">
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img :src="LaravelLogo" alt="laravel logo" class="img-fluid">
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img :src="VuejsLogo" alt="vue js logo" class="img-fluid">
                    </div>
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
/* @import '../../src/scss/variables.scss'; */

.feature-icon {
    font-size: 2rem;
    color: #007bff;
}

.tech_head {
    max-width: 400px !important;
    width: 100% !important;
}

.tech_logo {
    width: 100px !important;
}

.img {
    width: 100%;
    object-fit: cover;
    height: 100%;
}

.container {
    max-width: 1300px;
    margin: 0px auto 0px auto;
    padding: 0px 40px;
    /* border: 1px solid yellow; */

    @media (min-width: 1200px) and (max-width: 1441px) {
        max-width: 1250px;
        padding: 0px 36px;
    }

    @media (max-width: 767px) {
        padding: 0px 30px;
    }

    @media (max-width: 479px) {
        padding: 0px 30px 0px 20px;
    }
}


.skills {
    padding: 50px 0px;

    .skills-flex-container {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        width: 100%;

        @media(max-width:700px) {
            gap: 30px;
        }

        .box {
            flex: 1 1 15%;
            background: $dark-color;
            box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 24px;
            padding: 25px;
            text-align: center;
            border: 10px solid $medium-light-color;
            transition: all 0.3s ease-in;
            /* border-radius: 60% 33% 26% 67% / 51% 62% 28% 41%;      */

            .image {
                transition: all 0.3s ease-in-out 0.1s;

                img {
                    max-width: 75px;
                    object-fit: contain;
                }
            }

            .title {
                margin-top: 15px;
                text-align: center;
                font-weight: bold;
                color: white;
                transition: all 0.3s ease-in-out;
            }

            &:hover {
                box-shadow: rgba(0, 0, 0, 0.5) 20px 20px 30px;
                transform: scale(1.1);

                .image {
                    transform: scale(1.5) translateY(-20px);

                    img {
                        animation: bouncing 0.5s .3s;
                    }
                }

                .title {
                    letter-spacing: 2px;
                }
            }

            @media(max-width:1100px) {
                flex: 1 0 25%;
            }

            @media(max-width:630px) {
                flex: 1 0 35%;
                padding: 15px;

                .image {

                    img {
                        max-width: 50px;
                    }
                }
            }
        }
    }
}

@keyframes bouncing {

    from,
    to {
        transform: scale(1, 1);
    }

    25% {
        transform: scale(0.9, 1.1);
    }

    50% {
        transform: scale(1.1, 0.9);
    }

    75% {
        transform: scale(0.95, 1.05);
    }
}
</style>