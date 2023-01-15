import Vue from "vue";
import VueRouter from "vue-router";
import AuthGuard from "../guards/AuthGuard";
Vue.use(VueRouter);

const routes = [
    {
        path: "/admin",
        name: "Home",
        component: require("./../components/admin/DashboardComponent").default,
    },
    {
        path: "/login",
        name: "Login",
        component: require("./../components/LoginComponent").default,
    },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

router.beforeEach(AuthGuard);
export default router;
