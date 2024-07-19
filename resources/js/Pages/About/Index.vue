<template>
        <Head>
          <title>About</title>
          <meta name="description" content="About page">
        </Head>
        <h2>About</h2>
        <p>{{ name }}</p>
        <p>{{ age }}</p>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import { defineProps } from "vue";

defineProps({ name: String, age: Number });
</script>
