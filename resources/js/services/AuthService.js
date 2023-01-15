const axios = require("./../plugins/axios");
const login = async (email, password) => {
    return new Promise((resolve, reject) => {
        axios
            .post("/login", {
                email,
                password,
            })
            .then(({ data }) => {
                const token = data.token;
                localStorage.setItem(process.env.MIX_TOKEN_NAME, token);
                resolve(data);
            })
            .catch((e) => {
                reject(e);
            });
    });
};

export default { login };
