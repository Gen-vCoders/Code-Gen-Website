import { createRouter, createWebHistory } from "vue-router";
// import login from "../components/login.vue";
import Home from "../layout/HomePage.vue";
import Services from "../layout/ServicesPage.vue";
import ContactUs from "../layout/ContactUsPage.vue";
import AboutUs from "../layout/AboutUsPage.vue";

const routes = [
    // { path: "/", component: login },
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/web-development",
        name: "Servies",
        component: Services,
    },
    {
        path: "/contact-us",
        name: "ContactUs",
        component: ContactUs,
    },
    {
        path: "/about-us",
        name: "AboutUs",
        component: AboutUs,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
