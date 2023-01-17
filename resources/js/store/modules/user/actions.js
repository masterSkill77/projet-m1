const axios = require("axios");
export default {
    login({ state, rootState, commit, dispatch }, user) {
        return new Promise((resolve, reject) => {
            try {
                axios
                    .post(`${process.env.MIX_BACKEND_URL}/api/login`, user)
                    .then((response) => {
                        if (
                            !response.data.token ||
                            response.data.token.length <= 0
                        ) {
                            reject("Token not found");
                        }
                        console.log("Hello");
                        var token = response.data.token;

                        commit("setUser", response.data.user);

                        localStorage.setItem(process.env.MIX_TOKEN_NAME, token);

                        resolve();
                    })
                    .catch((error) => {
                        reject(error);
                    });
            } catch (error) {
                reject(error);
            }
        });
    },
};
