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
                            <input disabled class="form-control" type="text" v-model="p.category">
                        </div>
                        <div class = "form-group">
                            <label for="">Product</label>
                            <input class="form-control" type="text" v-model="p.product">
                        </div>
                        <div class = "form-group">
                            <label for="">Details</label>
                            <input class="form-control" type="text" v-model="p.details">
                        </div>
                        <div class = "form-group">
                            <label for="">Price</label>
                            <input class="form-control" type="text" v-model="p.price">
                        </div>
                        <div class = "form-group">
                            <input class="btn btn-success" type="submit" value="Update">
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
            p: []           
        }
    },
    created(){
         const baseURI = 'http://127.0.0.1:8000/api/get-product/'+`${this.$route.params.id}`
         this.$http.get(baseURI)
         .then((result) => {
            this.p = result.data.product,
            console.log(this.p)
        })
    },
    methods:{
        submitfnc(e){
            e.preventDefault();
            const pushApi = 'http://127.0.0.1:8000/api/push-product/'+`${this.$route.params.id}`
            this.$http.post(pushApi, {
                    name: this.p.product,
                    details: this.p.details,
                    price: this.p.price,
                    status: this.p.status,
                    category_id: this.p.cat_id
                })
                .then(function (response) {
                    console.log(response.data.product)
                    alert(response.data.msg);
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