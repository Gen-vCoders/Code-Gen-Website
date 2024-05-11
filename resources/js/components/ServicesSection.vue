<template>
    <!-- ======= Services Section Start ======= -->
    <section id="services_section" class="sec">
        <div class="container">
            <div class="section-title text-center mb-30">
                <span class="title-tag">SERVICES</span>
                <h2 class="title">What We Do</h2>
            </div>
            <div class="row mt-5 py-5">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="card shadow-sm border-light">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center gap-4">
                                <div class="icon">
                                    <img :src="SerIcon1" alt="Web Development">
                                </div>
                                <h5 class="title">Web Development</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                                <button class="rounded-circle service_btn"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="card shadow-sm border-light">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center gap-4">
                                <div class="icon">
                                    <img :src="SerIcon2" alt="Web Designing">
                                </div>
                                <h5 class="title">Web Designing</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                                <button class="rounded-circle service_btn"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="card shadow-sm border-light">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center gap-4">
                                <div class="icon">
                                    <img :src="SerIcon3" alt="Digital Marketing">
                                </div>
                                <h5 class="title">Digital Marketing</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                                <button class="rounded-circle service_btn"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="card shadow-sm border-light">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center gap-4">
                                <div class="icon">
                                    <img :src="SerIcon4" alt="Api Integration">
                                </div>
                                <h5 class="title">Api Integration</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                                <button class="rounded-circle service_btn"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Services Section End ======= -->
</template>
<script>
import SerIcon1 from "../../../public/images/service_icon/webdev.png"
import SerIcon2 from "../../../public/images/service_icon/webdesign.png"
import SerIcon3 from "../../../public/images/service_icon/digitalmarket.png"
import SerIcon4 from "../../../public/images/service_icon/api.png"
    export default {
        data() {
            return {
                SerIcon1,
                SerIcon2,
                SerIcon3,
                SerIcon4
            }
        }
    }
</script>
<style>
/* services section start */
.service-item .card {
    position: relative;
    background: linear-gradient(var(--primaryColor) 0 0) no-repeat calc(200% - var(--p, 0%)) 100% / 200% var(--p, 0.08em);
    transition: 1s var(--t, 0s), background-position 1s calc(1s - var(--t, 0s));
}
.service-item:hover .card {
    --p: 100%;
    --t: 1s;
    color: #fff!important;
}

.service-item .card::before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("../../public/images/service_icon/servicedot.png");
  background-position: center;
  background-repeat: no-repeat;
  z-index: 0;
  opacity: 0;
  visibility: hidden;
}
.service-item:hover .card::before {
  opacity: 1;
  visibility: visible;
}
.icon {
  background: var(--primaryColor);
  width: fit-content;
  padding: 18px;
  border-radius: 100px;
}
.service_btn{
    color: var(--white) !important;
    background-color: var(--primaryColor) !important;
    padding: 6px 12px!important;
    border: none;
}
.service-item:hover .service_btn{
    background-color: var(--secondaryColor) !important;
}
.service-item .card .card-body .title {
    font-weight: 700;
    margin: 0;
    letter-spacing: 2px;
}
.service-item .card .card-body{
    z-index: 1;
}

/* services section end */

</style>