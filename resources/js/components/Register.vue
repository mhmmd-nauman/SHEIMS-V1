<template>
    <div>
        <h3 class="text-center">Register</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="registerUser">
                    <div class="form-group">
                        <label for="email">Your Email Address</label>
                        <input type="text"
                            id="email"
                            class="form-control"
                            v-model="userData.email">
                    </div>
                    <div class="form-group">
                        <label for="password">Enter Password</label>
                        <input type="password"
                            id="password"
                            class="form-control"
                            v-model.lazy="userData.password">
                    </div>
                    <div class="form-group">
                        <label for="satisfaction">Satisfaction (10 for best, 1 for worst)</label>
                        <input min="1"
                            max="10"
                            type="number"
                            id="satisfaction"
                            class="form-control"
                            v-model.number="userData.satisfaction">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message"
                                rows="5"
                                class="form-control"
                                v-model="message"></textarea>
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                userData: {
                    email: '',
                    password: '',
                    satisfaction:'',
                },
                message: 'Describe your review...'
            }
        },
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/post/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.post = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            registerUser() {
                this.axios
                    .post(`http://127.0.0.1:8000/api/post/update/${this.$route.params.id}`, this.post)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>