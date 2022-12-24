<template>
    <Layout>
        <div class="max-w-xl mx-auto">
            <h1 class="text-2xl font-bold mb-5">Sign In</h1>

            <p class="mb-5">No account ?
                <Link class="underline" href="/sign-up">Register here</Link>
            </p>

            <form @submit.prevent="authenticate">
                <p v-if="form.errors.credentials" class="text-red-500 mb-3">
                    {{ form.errors.credentials }}
                </p>

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

                <button class="block w-full rounded bg-gray-800 px-4 py-2 text-white font-semibold" type="submit">
                    Sign in
                </button>
            </form>
        </div>
    </Layout>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import {Link, useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "SignIn",
    components: {Layout, Link},
    props: {
        errors: Object
    },
    data() {
        const form = useForm({
            email: null,
            password: null
        });

        return {form}
    },
    methods: {
        authenticate() {
            this.form.post(`/sign-in`);
        }
    }
}
</script>

<style scoped>

</style>
