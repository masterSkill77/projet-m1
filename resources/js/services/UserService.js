const me = () => {
    return JSON.parse(localStorage.getItem(process.env.MIX_USER_KEY));
};

const isAuthenticated = me();

export default { me, isAuthenticated };
