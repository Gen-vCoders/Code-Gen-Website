<template>
    <footer class="sec">
        <div class="container">
            <div class="row before_bg justify-content-center align-items-center footer flex-wrap gap-3">
                <div class="col-6 d-flex flex-column align-items-center gap-3">
                    <router-link class="navbar-brand main_logo text-center" to="/">
              <img :src="logo" alt="Logo" class="d-inline-block align-text-top">
            </router-link>
                    <a href="#" class="text-decoration-none text-white display-4">geniuscodeing@gmail.com</a>
                    <!-- <p>Near Sunder Cinema Road Saproon, Solan, 173211 (H.P)</p> -->
                </div>
                <div class="col-9 d-flex justify-content-center gap-4 align-itemx-center">
                    <p class="m-0 border-end pe-4">This template is made by Codeing Genius</p>
                    <div class="social_icons d-flex align-items-center gap-3">
                        Stay Connected :
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <GetPopup>  </GetPopup>
</template>
<script>
import Logo from '../../../public/images/whitelog_codegen.png'
import GetPopup from '../components/GetStartedPopup.vue'
export default {
  data() {
    return {
      logo: Logo,
    }
  },
  components: {
    GetPopup
  }
}
</script>
<style>
footer{
    background-color: var(--secondaryColor);
}
.social_icons{
    color: var(--paraColor);
}
.social_icons a {
    color: var(--paraColor);
}
.social_icons a:hover i{
    color: var(--primaryColor);
}
</style>