<template>
     <section class="service-details sec skills">
        <div class="container">
            <div class="row gap-5 justify-content-center our_appr">
                <h2 class="text-center">Our Approach</h2>
                <div class="col-md-3">
                    <div class="card app_card1 position-relative border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Planning</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magnam alias vero impedit. Nam, velit?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card app_card2 position-relative border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Research</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magnam alias vero impedit. Nam, velit?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card app_card3 position-relative border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Design & Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magnam alias vero impedit. Nam, velit?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card app_card4 position-relative border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Testing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magnam alias vero impedit. Nam, velit?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card app_card5 position-relative border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Successful</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magnam alias vero impedit. Nam, velit?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped>
.our_appr .col-md-3 {
    position: relative;
}

.our_appr .col-md-3::after {
    content: '';
    position: absolute;
    width: 500px;
    height: 1px;
    background: var(--primaryColor);
    z-index: -2;
    top: 93px;
}

.our_appr .col-md-3:nth-child(6)::after {
    content: unset;
}

.our_appr .col-md-3:nth-child(4)::after {
    content: unset;
}
.app_card1::after {
    content: "01";
    position: absolute;
    font-size: 93px;
    font-weight: 700;
    right: 0;
    top: 21px;
    color: #e4d9d9;
}
.app_card2::after {
    content: "02";
    position: absolute;
    font-size: 93px;
    font-weight: 700;
    right: 13px;
    top: 21px;
    color: #e4d9d9;
}
.app_card3::after {
    content: "03";
    position: absolute;
    font-size: 93px;
    font-weight: 700;
    right: 13px;
    top: 21px;
    color: #e4d9d9;
}
.app_card4::after {
    content: "04";
    position: absolute;
    font-size: 93px;
    font-weight: 700;
    right: 13px;
    top: 21px;
    color: #e4d9d9;
}
.app_card5::after {
    content: "05";
    position: absolute;
    font-size: 93px;
    font-weight: 700;
    right: 13px;
    top: 21px;
    color: #e4d9d9;
}
.skills .card-body {
    z-index: 2;
}
</style>