<template>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div
                class="row h-100 align-items-center justify-content-center"
                style="min-height: 100vh"
            >
                <div class="">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div
                            class="d-flex align-items-center justify-content-between mb-3"
                        >
                            <a href="index.html" class="">
                                <h3 class="text-primary">
                                    <i class="fa fa-user-edit me-2"></i>ENI
                                </h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="email"
                                class="form-control"
                                v-model="email"
                                id="floatingInput"
                                placeholder="name@example.com"
                            />
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input
                                type="password"
                                class="form-control"
                                id="floatingPassword"
                                v-model="password"
                                placeholder="Password"
                            />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!--
                                                    <div
                            class="d-flex align-items-center justify-content-between mb-4"
                        >
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="exampleCheck1"
                                />
                                <label
                                    class="form-check-label"
                                    for="exampleCheck1"
                                    >Check me out</label
                                >
                            </div>
                            <a href="">Forgot Password</a>
                        </div>-->
                        <button
                            @click.prevent="loginUser"
                            class="btn btn-primary py-3 w-100 mb-4"
                        >
                            Sign In
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        ...mapActions("user", ["login"]),
        async loginUser() {
            this.login({ email: this.email, password: this.password })
                .then((data) => {
                    // this.$router.push("/admin");
                })
                .catch((e) => {
                    this.$toast.open({
                        type: "error",
                        message: e.response.data.error,
                        position: "top-right",
                    });
                });
        },
    },
};
</script>

<style></style>
