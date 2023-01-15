import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Login",
        component: require("./../components/LoginComponent").default,
    },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

export default router;
