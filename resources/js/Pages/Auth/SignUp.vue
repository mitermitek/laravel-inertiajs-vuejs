<template>
    <Layout>
        <div class="max-w-xl mx-auto">
            <h1 class="text-2xl font-bold mb-5">Sign Up</h1>

            <p class="mb-5">Already have an account?
                <Link class="underline" href="/sign-in">Log in here</Link>
            </p>

            <form @submit.prevent="register">
                <div class="mb-3">
                    <label class="block font-medium mb-1" for="first_name">First name</label>
                    <input id="first_name" v-model="form.first_name"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="First name"
                           type="text">

                    <p v-if="form.errors.first_name" class="text-red-500 mt-2">{{ form.errors.first_name }}</p>
                </div>

                <div class="mb-3">
                    <label class="block font-medium mb-1" for="last_name">Last name</label>
                    <input id="last_name" v-model="form.last_name"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="Last name"
                           type="text">

                    <p v-if="form.errors.last_name" class="text-red-500 mt-2">{{ form.errors.last_name }}</p>
                </div>

                <div class="mb-3">
                    <label class="block font-medium mb-1" for="username">Username</label>
                    <input id="username" v-model="form.username"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="Username"
                           type="text">

                    <p v-if="form.errors.username" class="text-red-500 mt-2">{{ form.errors.username }}</p>
                </div>

                <div class="mb-3">
                    <label class="block font-medium mb-1" for="email">Email</label>
                    <input id="email" v-model="form.email"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="Email"
                           type="email">

                    <p v-if="form.errors.email" class="text-red-500 mt-2">{{ form.errors.email }}</p>
                </div>

                <div class="mb-3">
                    <label class="block font-medium mb-1" for="password">Password</label>
                    <input id="password" v-model="form.password"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="Password"
                           type="password">

                    <p v-if="form.errors.password" class="text-red-500 mt-2">{{ form.errors.password }}</p>
                </div>

                <div class="mb-3">
                    <label class="block font-medium mb-1" for="password_confirmation">Password confirmation</label>
                    <input id="password_confirmation" v-model="form.password_confirmation"
                           class="block w-full rounded bg-gray-50 border border-gray-300 px-2 py-1"
                           placeholder="Password confirmation"
                           type="password">

                    <p v-if="form.errors.password" class="text-red-500 mt-2">{{ form.errors.password }}</p>
                </div>

                <button class="block w-full rounded bg-gray-800 px-4 py-2 text-white font-semibold" type="submit">
                    Sign up
                </button>
            </form>
        </div>
    </Layout>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import {Link, useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "SignUp",
    components: {Layout, Link},
    props: {
        errors: Object
    },
    data() {
        const form = useForm({
            first_name: null,
            last_name: null,
            username: null,
            email: null,
            password: null,
            password_confirmation: null
        });

        return {form}
    },
    methods: {
        register() {
            this.form.post(`/sign-up`);
        }
    }
}
</script>

<style scoped>

</style>
