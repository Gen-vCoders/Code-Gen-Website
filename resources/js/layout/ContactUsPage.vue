<template>
    <div>
        <NavBar></NavBar>
        <!-- ======= Contact us Section Start ======= -->
        <section id="contactus_section" class="sec">
            <div class="container">
                <div class="section-title text-center mb-30">
                    <!-- <span class="title-tag">KNOW MORE</span> -->
                    <h2 class="title">Contact Us</h2>
                </div>
                <div class="row justify-content-center my-5 py-5">
                    <div class="col-lg-5 p-5 border rounded-start-5 bg-light shadow-sm">
                        <div class="form_heading mb-4">
                            <h3>GET IN TOUCH</h3>
                        </div>
                        <form action="#" class="contact_form w-100">
                            <div class="d-flex gap-3">
                                <div class="form-floating w-100"><input type="text" name="name" class="form-control"
                                        id="name" placeholder="enter name"><label for="name">Name</label></div>
                                <div class="form-floating w-100"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="enter email"><label for="email">Email</label></div>
                            </div>
                            <div class="form-floating mt-3"><input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="enter phone no"><label for="phone">Phone no</label></div>
                            <div class="form-floating mt-3"><textarea class="form-control" name="message" rows="10"
                                    placeholder="enter message"></textarea><label for="message">Message</label></div>
                            <div class="my-3">
                                <div class="error-message bg-danger badge d-none"> plese enter name is required</div>
                                <div class="sent-message badge bg-success d-none text-start">Your message has been sent.
                                    Thank you!</div>
                            </div>
                            <div><button type="submit" class="btn border_btn w-100 rounded-pill">Send Message</button></div>
                        </form>
                    </div>
                    <div class="col-lg-4 border rounded-end-5 shadow-sm py-5">
                        <div class="social_icons d-flex align-items-center justify-content-between position-relative">
                            <div class="social_heading">
                                Stay Connected :
                            </div>
                            <div class="d-flex gap-3 p-3 position-absolute social_icons_cont rounded-start-5">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="contact_us_content mt-5 pt-3">
                            <h5>
                                CONTACT US FOR SERVICES
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tempora natus aliquam
                                molestiae eligendi eius maiores possimus odit obcaecati rerum ullam reprehenderit
                                perferendis nihil voluptates, quasi id, accusantium quae qui.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FooterMain></FooterMain>
    </div>
</template>
<script>
import NavBar from '../components/NavBar.vue';
import FooterMain from '../components/FooterMain.vue';
export default {
    components: {
        NavBar,
        FooterMain
    }

}
</script>
<style>
.social_icons_cont {
    right: -13px;
    background-color: var(--secondaryColor);
}
</style>