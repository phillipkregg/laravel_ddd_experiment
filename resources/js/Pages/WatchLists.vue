<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import List from '@/Components/Movies/List.vue';
import {defineProps} from 'vue'

const props = defineProps({
  movies: Array,
});

console.log(props.movies);
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Watch Lists
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <List :movies="movies"/>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
