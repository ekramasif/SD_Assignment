<template>
    <div>
        <h2>{{ title }}</h2>
        <p>{{ text }}</p>
        <hr>
        <child v-bind:empname="name" v-bind:empemail="email" ></child>
        <hr>
        <h4>Employess</h4>
        <ul>
            <list v-for="employee in employees"
            v-bind:key="employee.id"
            v-bind:emp="employee"></list>
        </ul>
    </div>
</template>
<script>
import Child from './Child'
import List from './List'
export default {
    data(){
        return{
            title: 'Parent component',
            text: 'Details of parent component',
            name: 'Srabosthy',
            email: 'srabosthy@gmail.com',
            employees:[
                {id: 1, name: 'prama'},
                {id: 2, name: 'mohsin'},
                {id: 3, name: 'tonmoy'}
            ]
        }
    },
    components: {
        'child': Child ,
        'list': List
    }
}
</script>
<style scoped>

</style>