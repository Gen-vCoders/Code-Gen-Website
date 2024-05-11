<template>
  <header class="navbar_container container-fluid shadow-sm position-sticky top-0 bg-white">
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <router-link class="navbar-brand main_logo" to="/">
              <img :src="logo" alt="Logo" class="d-inline-block align-text-top">
            </router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav gap-4 align-items-center">
                <li class="nav-item">
                  <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/about-us">About Us</router-link>
                </li>
                <li class="nav-item position-relative">
                  <a class="nav-link">Our Services</a>
                  <ul class="navbar-nav shadow-sm position-absolute">
                    <li class="nav-item"><router-link to="/web-development" class="nav-link">Web Development</router-link></li>
                    <li class="nav-item"><a href="#" class="nav-link">Web Designing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Digital Marketing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Api Integration</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/contact-us">Contact Us</router-link>
                </li>
                <li class="nav-item">
                  <!-- <button class="btn border_btn rounded-pill">Get Started</button> -->
                  <button type="button" class="btn border_btn rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Get Started</button>

                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
</template>
<script>
import Logo from '../../../public/images/codegenius_logo.png'
export default {
  data() {
    return {
      logo: Logo,
    }
  }
}
</script>
<style>
header{
  z-index: 3;
}
.main_logo{
  width:260px;
  height:60px;
}
.main_logo img{
  max-width: 100%;
  max-height:100%;
}
nav ul li ul {
    width: 181px;
    background-color: var(--white);
    padding-left: 14px!important;
    display: none!important;
}

nav ul li:hover > ul {
    display: block!important;
}
</style>