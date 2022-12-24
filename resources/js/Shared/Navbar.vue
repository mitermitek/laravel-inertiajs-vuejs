<template>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <Link class="flex items-center" href="/">
                <img alt="Laravel Logo" class="h-6 mr-3 sm:h-9" src="/images/laravel.svg"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap">Laravel</span>
            </Link>
            <button aria-controls="navbar-default" aria-expanded="false"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    data-collapse-toggle="navbar-default" type="button" @click="showMenu = !showMenu">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          fill-rule="evenodd"></path>
                </svg>
            </button>
            <div id="navbar-default" :class="showMenu ? '' : 'hidden'"
                 class="flex flex-col w-full mt-5 md:flex md:w-auto md:flex-row md:mt-0 md:items-center">
                <Link :href="`/`"
                      class="mr-0 mb-2 p-2 font-semibold rounded hover:text-red-500 bg-gray-50 md:bg-transparent md:mb-0 md:mr-5">
                    Home
                </Link>
                <Link :href="`/about`"
                      class="mr-0 mb-2 p-2 font-semibold rounded hover:text-red-500 bg-gray-50 md:bg-transparent md:mb-0 md:mr-5">
                    About
                </Link>
                <Link v-if="$page.props.auth.user" href="/sign-out">
                    <button type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-gray-300 font-medium rounded text-sm px-4 py-2 focus:outline-none">
                        Sign out
                    </button>
                </Link>
                <Link v-else href="/sign-in">
                    <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded text-sm px-4 py-2 focus:outline-none">
                        Sign in
                    </button>
                </Link>
            </div>
        </div>
    </nav>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Navbar",
    components: {Link},
    data() {
        return {
            showMenu: false
        };
    }
}
</script>

<style scoped>

</style>
