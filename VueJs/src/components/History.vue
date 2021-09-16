<template>
    <div>
        <h2>{{ title }}</h2>
        <p>{{ text }}</p>
        <hr>
        <team></team>
    </div>
</template>
<script>
import Team from './Team'
export default {
    data(){
        return{
            title: 'History page',
            text: 'This is our history page'
        }
    },
    components: {
        'team' : Team
    }
}
</script>
<style scoped>

</style>