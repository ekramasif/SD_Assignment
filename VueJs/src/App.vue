<template>
  <div id="app">
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item"> <router-link class="nav-link" to="/">Home</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/about-us">About</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/history">History</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/team">Team</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/parent">Parent</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/product">Product List</router-link></li>
        <li class="nav-item"> <router-link class="nav-link" to="/create">Create-Product</router-link></li>
      </ul>
    </nav>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
</style>
