<template>
    <div>
        <NavBar></NavBar>
        <!-- About Section -->
        <section id="contactus_section" class="sec">
            <div class="container">
                <div class="section-title text-center mb-30">
                    <h2 class="title">About Us</h2>
                </div>
            </div>
        </section>

        <!-- our company Section -->
        <div class="container mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-3 shadow-sm rounded-4 logo_box bg-white position-relative">
                    <div class="companylogo d-flex align-items-center justify-content-center h-100">
                        <img :src="logo" class="img-fluid animated" alt="company logo">
                    </div>
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 gap-4 about_content">
                    <h4>Our Company</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat dignissim quam, in pretium velit
                        aliquet a. Proin in iaculis purus. Praesent augue purus, congue ut lectus ut, aliquet imperdiet
                        justo. Proin fermentum enim porta condimentum lacinia. Curabitur consectetur varius dapibus. Cras
                        sed pulvinar velit. Vivamus accumsan scelerisque arcu, at ultrices eros sagittis a. Maecenas vitae
                        quam magna. Aliquam sed massa augue. Vivamus consectetur a nisl non iaculis. Aliquam ut dictum odio.
                    </p>
                </div>
            </div>
        </div>
        <div class="about_more_section mt-5 p-5">
            <WhatwedoSection></WhatwedoSection>
        </div>
        <div class="bg-light p-5 rounded mt-4 text-center">
            <h1>Get In Touch</h1>
            <p class="lead">Dont worry for contact we are available</p>
            <button class="btn btn-lg red_btn rounded-pill get-started_btn" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Contact us »</button>
        </div>
        <FooterMain></FooterMain>
    </div>
</template>
<script>
import NavBar from '../components/NavBar.vue';
import Logo from '../../../public/images/codegenius_logo.png'
import WhatwedoSection from '../components/WhatwedoSection.vue'
import FooterMain from '../components/FooterMain.vue';
export default {
    components: {
        NavBar,
        WhatwedoSection,
        FooterMain
    },
    data() {
        return {
            logo: Logo,
        }
    }

}
</script>
<style>
.logo_box::before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    width: 300px;
    height: 180px;
    background-color: var(--primaryColor);
    z-index: -5;
    border-radius: 19px;
}

.logo_box::after {
    content: "";
    position: absolute;
    bottom: -5px;
    right: -5px;
    width: 300px;
    height: 180px;
    background-color: var(--secondaryColor);
    z-index: -5;
    border-radius: 19px;
}
</style>
