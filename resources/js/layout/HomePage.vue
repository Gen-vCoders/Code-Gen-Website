<template>
    <div>
        <NavBar></NavBar>
        <HeroSection></HeroSection>
        <ServicesSection></ServicesSection>
        <AboutSection></AboutSection>
        <ContactusSection></ContactusSection>
        <FooterMain></FooterMain>
    </div>
</template>
<script>
import NavBar from '../components/NavBar.vue';
import HeroSection from '../components/HerosSection.vue';
import ServicesSection from '../components/ServicesSection.vue';
import AboutSection from '../components/AboutSection.vue';
import ContactusSection from '../components/ContactusSection.vue';
import FooterMain from '../components/FooterMain.vue';
export default{
    components:{
    NavBar,
    HeroSection,
    ServicesSection,
    AboutSection,
    ContactusSection,
    FooterMain
}

}
</script>
