<template>
    <div>
        <h3 class="text-center">City</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCity">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text"
                            id="country"
                            class="form-control"
                            v-model="cityData.country">
                    </div>
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text"
                            id="region"
                            class="form-control"
                            v-model="cityData.region">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text"
                            id="title"
                            class="form-control"
                            v-model="cityData.title">
                    </div>
                    

                   
                    <button type="submit" class="btn btn-primary">Add City</button>
                </form>
            </div>
        </div>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                cityData: {
                    country: '',
                    region: '',
                    title:'',
                }
            }
        },
        
        methods: {
            addCity() {
                console.log(this.cityData);
                this.axios
                    .post(`http://127.0.0.1:8000/api/city/add`, this.cityData)
                    .then((response) => {
                        //this.$router.push({name: 'home'});
                    })
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false);
            }
        }
    }
</script>