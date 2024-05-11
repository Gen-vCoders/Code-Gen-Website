<template>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Get Started</h5>
        <button type="button" class="btn-close border_btn d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="modal-body pb-5">
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
                            <div><button type="submit" class="btn red_btn w-100 rounded-pill">Send Message</button></div>
                        </form>
      </div>
    </div>
  </div>
</div>
</template>