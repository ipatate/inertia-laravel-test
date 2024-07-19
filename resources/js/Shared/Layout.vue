<template>
   <main>
    <header>
      <Link href="/">Home</Link>&nbsp;
      <Link href="/about">About</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
