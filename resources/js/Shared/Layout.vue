<template>
    <Navbar/>
    <div class="px-2 sm:px-4 py-2.5">
        <div class="container mx-auto">
            <slot/>
        </div>
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
