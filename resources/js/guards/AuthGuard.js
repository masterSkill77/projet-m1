export default async (to, from, next) => {
    const isAuthenticated = localStorage.getItem(process.env.MIX_TOKEN_NAME);
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
