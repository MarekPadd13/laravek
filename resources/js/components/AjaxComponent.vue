<template>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row" >
                <div class="col-md-12">
                    <button @click="update" v-if="!is_refresh" class="btn btn-primary">Обновить {{id}}...</button>
                    <span v-if="is_refresh" class="badge badge-info">Обновлено</span>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4" v-for="post in dataitem">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>{{post.title}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                            <p class="card-text">{{post.title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a  class="btn btn-sm btn-outline-secondary">View</a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data :function () {
           return {
               id: 0,
               is_refresh:false,
               dataitem:[]
           };
       },
        mounted() {
            this.update()
        },
        methods: {
            update : function () {
                this.is_refresh = true;
                axios.get('/posts/json').then((responce) => {
                    console.log(responce);
                    this.dataitem = responce.data;
                    this.is_refresh = false;
                    this.id++;
                })
            }
        }
    }
</script>
