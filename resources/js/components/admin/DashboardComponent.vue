<template>
    <div>I'm the main dashboard</div>
</template>

<script>
import user from "./../../services/UserService";
export default {
    mounted() {
        console.log(user());
        this.$toast.open({
            type: "success",
            message: "Your login has successed, welcome to the app",
            position: "top-right",
        });
    },
};
</script>

<style></style>
