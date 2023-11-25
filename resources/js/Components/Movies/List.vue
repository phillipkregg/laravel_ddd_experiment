<script setup>
import {defineProps} from 'vue';

defineProps({
  movies: Array,
});
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
          <h2 class="text-2xl">Movies</h2>

          <ul>
            <li v-for="movie in movies" :key="movie.id">
              {{ movie.name }}
            </li>
          </ul>


        </div>
      </div>
    </div>
  </AppLayout>
</template>
