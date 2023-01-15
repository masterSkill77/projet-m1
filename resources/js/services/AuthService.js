export default async (to, from, next) => {
    const isAuthenticated = localStorage.getItem("user_token");
    if (
        // make sure the user is authenticated
        !isAuthenticated &&
        // ❗️ Avoid an infinite redirect
        to.name !== "Login"
    ) {
        // redirect the user to the login page
        next({ name: "Login" });
    }
    next();
};
