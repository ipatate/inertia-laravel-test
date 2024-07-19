<script setup>
import { Head } from "@inertiajs/vue3";
// import { reactive } from 'vue'
import { router,useForm } from '@inertiajs/vue3'

// const form = reactive({
//   first_name: null,
//   last_name: null,
// })

// function submit() {
//   router.post('/about', form)
// }

const form = useForm({
  first_name: null,
  last_name: null,
})
</script>

<template>

    <Head>
        <title>About</title>
        <meta name="description" content="About page">
    </Head>
    <form @submit.prevent="form.post('about')">
        <div>
            <label for="first_name">First name:</label>
            <input id="first_name" v-model="form.first_name" />
            <div v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
        </div>
        <div>
            <label for="last_name">Last name:</label>
            <input id="last_name" v-model="form.last_name" />
            <div v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
        </div>
        <button type="submit">Submit</button>
    </form>
</template>
