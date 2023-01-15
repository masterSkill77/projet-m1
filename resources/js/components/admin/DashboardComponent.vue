<template>
    <div>I'm the main dashboard</div>
</template>

<script>
export default {
    mounted() {
        this.$toast.open({
            type: "success",
            message: "Your login has successed, welcome to the app",
            position: "top-right",
        });
    },
};
</script>

<style></style>
