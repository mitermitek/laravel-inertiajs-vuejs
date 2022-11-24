<template>
    <nav>
        <Link :href="`/`">Welcome</Link>
        <Link :href="`/about`">About</Link>
    </nav>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Navbar",
    components: {Link}
}
</script>

<style scoped>

</style>
