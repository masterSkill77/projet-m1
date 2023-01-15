const axios = require("axios");
const AUTH_TOKEN = localStorage.getItem(process.env.MIX_TOKEN_NAME);
axios.defaults.baseURL = process.env.MIX_BACKEND_URL + "/api";
axios.defaults.headers.common["Authorization"] = "Bearer " + AUTH_TOKEN;

module.exports = axios;
