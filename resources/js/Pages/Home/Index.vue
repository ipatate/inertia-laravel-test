<template>
    <Layout>
        <Head>
          <title>Your page title</title>
          <meta name="description" content="Your page description">
        </Head>
        <h2>Hello, world!</h2>
        <p>Welcome to your first Inertia app.</p>
        <p>{{ name }} - {{ age }}</p>
    </Layout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import { defineProps } from "vue";
import Layout from "@/Shared/Layout.vue";

defineProps({ name: String, age: Number });
</script>
