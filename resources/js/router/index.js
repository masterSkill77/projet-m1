import Vue from "vue";
import VueRouter from "vue-router";
import AuthGuard from "../guards/AuthGuard";
Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: require("./../components/admin/DashboardComponent").default,
    },
    {
        path: "/admin",
        name: "Dashboard",
        component: require("./../components/admin/DashboardComponent").default,
    },
    {
        path: "/login",
        name: "Login",
        component: require("./../components/LoginComponent").default,
    },
    {
        path: "/partenaire",
        name: "Partenaire",
        component:
            require("./../components/admin/partenaire/PartenaireComponent")
                .default,
    },
];

const router = new VueRouter({
    mode: "history",
    routes,
    linkActiveClass: "",
});

router.beforeEach(AuthGuard);
export default router;
