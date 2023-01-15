const me = () => {
    return JSON.parse(localStorage.getItem(process.env.MIX_USER_KEY));
};

export default me;
