import Vuex from "vuex";
import vue from "vue";
import modules from "./modules/index";
vue.use(Vuex);
const store = new Vuex.Store({
    modules,
});
export default store;
