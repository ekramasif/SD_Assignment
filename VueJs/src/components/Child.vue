<template>
    <div>
        <h2>{{ title }}</h2>
        <p>{{ text }}</p>
        <p>Name from parent : {{ empname }}</p>
        <p>Email from parent : {{ empemail }}</p>
    </div>
</template>
<script>
export default {
    props:['empname','empemail'],
    data(){
        return{
            title: 'Child component',
            text: 'Details of Child component'
        }
    }
}
</script>
<style scoped>

</style>