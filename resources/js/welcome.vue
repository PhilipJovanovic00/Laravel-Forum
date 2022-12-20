<template>
    <div v-bind:style="{backgroundColor: color }">
        <h1>Welcome to vuejs</h1>
    
    </div>
    <div>
        <h1>Blade</h1>
        <div v-html="blade('resources/views/login.blade.php')"></div>
  </div>
</template>

<script>
// TODO : This throws an error, but it works with the import statement
// import { blade } from 'laravel-blade';

export default {
  methods: {
    blade
  }
}
</script>
