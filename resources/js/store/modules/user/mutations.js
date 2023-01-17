export default {
    setUser(state, data) {
        localStorage.setItem(process.env.MIX_USER_KEY, JSON.stringify(data));
        state.user = data;
    },
};
