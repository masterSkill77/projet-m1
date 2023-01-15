<template>
    <div class="container"></div>
</template>

<script>
export default {
    async mounted() {
        axios.get("/");
    },
};
</script>
