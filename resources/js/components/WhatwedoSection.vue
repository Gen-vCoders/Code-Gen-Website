<template>
    <div class="container">
        <div class="row justify-content-between">
            <!-- what we do section start -->
            <div class="col-sm-4">
            <div class="whatwork_box">
                <h4>What we do?</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum.</p>
            </div>
        </div>
            <!-- what we do section end -->
            <!-- our mission section start -->
        <div class="col-sm-4">
            <div class="whatwork_box">
                <h4>Our Mission</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum.</p>
            </div>
        </div>
            <!-- our mission section end -->
            <!-- our goal section start -->
        <div class="col-sm-4">
            <div class="whatwork_box">
                <h4>Our Goal</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum.</p>
            </div>
        </div>
            <!-- our goal section end -->
    </div>
</div>
</template>
<style>
.whatwork_box {
    line-height: 28px;
    border: 1px solid #e9e9e9;
    padding: 35px;
    position: relative;
}
.whatwork_box:after {
    background: var(--primaryColor) none repeat scroll 0 0;
    content: "";
    position: absolute;
    width: 3px;
    height: 35px;
    left: -2px;
    top: 34px;
}
</style>