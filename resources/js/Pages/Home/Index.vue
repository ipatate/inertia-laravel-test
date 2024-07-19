<template>

    <Head>
        <title>Your page title</title>
        <meta name="description" content="Your page description">
    </Head>
    <h2>People</h2>
    <ul>
        <li v-for="person in people" :key="person.id">
            {{ person.first_name }} {{ person.last_name }}
        </li>
    </ul>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

defineProps({
    people: Array,
});
</script>
