const axios = require("axios");
axios.defaults.baseURL = process.env.MIX_BACKEND_URL + "/api";

module.exports = axios;
