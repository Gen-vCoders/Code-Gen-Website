<template>
    <!-- ======= Contact us Section Start ======= -->
    <section id="contactus_section" class="sec">
        <div class="container">
            <div class="section-title text-center mb-30">
                <h2 class="title">Contact Us</h2>
            </div>
            <div class="row justify-content-center my-5 py-5">
                <div class="col-lg-5 mt-5 p-5 border-end d-flex algn-items-center justify-content-center flex-column">
                    <div class="form_heading mb-4">
                        <h3>Send us a message</h3>
                    </div>
                    <form action="#" class="contact_form w-100">
                        <div class="d-flex gap-3">
                            <div class="form-floating w-100">
                                <input type="text" name="name" class="form-control" id="name" placeholder="enter name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating w-100">
                                <input type="email" class="form-control" name="email" id="email" placeholder="enter email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone no">
                            <label for="phone">Phone no</label>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" name="message" rows="10" placeholder="enter message"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="my-3">
                            <div class="error-message bg-danger badge d-none"> plese enter name is required</div>
                            <div class="sent-message badge bg-success d-none text-start ">Your message has been sent. Thank
                                you!</div>
                        </div>
                        <div><button type="submit" class="btn red_btn rounded-pill">Send
                                Message</button></div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <img src="https://img.freepik.com/free-vector/mail-sent-concept-illustration_114360-96.jpg?size=626&amp;ext=jpg&amp;ga=GA1.2.1741584830.1690997931&amp;semt=ais"
                        class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact us Section End ======= -->
</template>
