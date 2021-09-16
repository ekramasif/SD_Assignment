<template>
    <div  class="container" style="margin-top:60px">
        <div class = "col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="display-4">Create Product:</h1>
                </div>
                <div class="card-body">
                    <form @submit="submitfnc">
                        <div class = "form-group">
                            <label for="">Category</label>
                            <select class="form-control"  v-model="category">
                                <option v-for="category in categories" :key="category.id" 
                                :value="category.id"> {{ category.name }} </option>
                            </select>
                        </div>
                        <div class = "form-group">
                            <label for="">Product</label>
                            <input class="form-control" type="text" v-model="name">
                        </div>
                        <div class = "form-group">
                            <label for="">Price</label>
                            <input class="form-control" type="text" v-model="price">
                        </div>
                        <div class = "form-group">
                            <input class="btn btn-success" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            categories: [],
            category: null,
            name: null,
            price: null
        }
    },
    created(){
         const baseURI = 'http://127.0.0.1:8000/api/categories'
         this.$http.get(baseURI)
         .then((result) => {
            this.categories = result.data.categories
    })
    },
    methods:{
        submitfnc(e){
            e.preventDefault(),
            this.$http.post('http://127.0.0.1:8000/api/insert-product', {
                    pname: this.name,
                    pcategory: this.category,
                    pprice: this.price,
                    status: true
                })
                .then(function (response) {
                    alert(response.data.msg);
                    // console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>
<style scoped>

</style>