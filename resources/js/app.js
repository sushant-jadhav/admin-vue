/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
// import Vue from "vue";
import VueRouter from "vue-router";
import Vuelidate from "vuelidate";

Vue.use(VueRouter);
Vue.use(Vuelidate);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );
// Vue.component("signatures", require("./components/Signatures.vue").default);
// Vue.component("dashboard", require("./components/admin/Dashboard.vue").default);
// Vue.component("sidebar", require("./components/admin/Sidebar.vue").default);
// Vue.component("User", require("./components/admin/User.vue").default);

import Dashboard from "./components/admin/Dashboard.vue";
import User from "./components/admin/User.vue";
import Sidebar from "./components/admin/Sidebar.vue";
import Admin from "./components/admin/Admin.vue";
import CreateStudent from "./components/admin/CreateStudent.vue";
import Student from "./components/admin/student/Student.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/admin",
            name: "dashboard",
            component: Dashboard
        },
        {
            path: "/admin/dashboard",
            name: "dashboard",
            component: Dashboard
        },
        {
            path: "/admin/user",
            name: "user",
            component: User
        },
        {
            path: "/admin/student",
            name: "Student",
            component: Student
        },
        {
            path: "/admin/add/student",
            name: "CreateStudent",
            component: CreateStudent
        }

        // {
        //     path: "/products/:id",
        //     name: "single-products",
        //     component: SingleProduct
        // },
    ]
});

//

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: ".app",
    components: { Admin },
    router
});
