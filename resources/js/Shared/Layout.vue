<template>
    <Navbar/>
    <div>
        <slot/>
    </div>
</template>

<script>
import Navbar from "./Navbar.vue";

export default {
    name: "Layout",
    components: {Navbar}
}
</script>

<style scoped>

</style>
