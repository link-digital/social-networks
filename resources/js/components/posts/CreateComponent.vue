<template>
    <form action="#">
    
    <div class="form-group">
      <label>ID:</label>
      <input type="text" name="id" id="id" class="form-control" placeholder="Id del post" v-model="post.id" v-on:keyup="resetErrors('name')">
    </div>

    <div class="form-group">
      <label>Social network</label>
      <input type="text" name="network_id" id="network_id" class="form-control" placeholder="Id del post" v-model="post.network_id" v-on:keyup="resetErrors('name')">
    </div>

     <!-- <div class="form-group">
      <label>Follower ID:</label>
      <select name="follower_id" id="follower_id" class="select" v-model="post.follower_id">
        <option v-for="follower in followers" :value="follower.id" v-bind:key="follower.id">{{ follower.id }}</option> 
      </select>
    </div> -->

    <div class="form-group">
        <label>Type:</label>
        <input type="text" name="type" id="type" class="form-control" placeholder="Tipo de post" v-model="post.type" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Message:</label>
        <input type="text" name="message" id="message" class="form-control" placeholder="Mensaje del post" v-model="post.message" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Link:</label>

        <input type="text" name="link" id="link" class="form-control" placeholder="Link del post" v-model="post.link" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Shares:</label>

        <input type="text" name="shares" id="shares" class="form-control" placeholder="Shares del post" v-model="post.shares" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Likes:</label>

        <input type="text" name="likes" id="likes" class="form-control" placeholder="Likes del post" v-model="post.likes" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Post Date:</label>

        <input type="text" name="post_date" id="post_date" class="form-control" placeholder="comment del post" v-model="post.post_date" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Active:</label>

        <input type="text" name="active" id="active" class="form-control" placeholder="comment del post" v-model="post.active" v-on:keyup="resetErrors('name')">
    </div>
    
    <div class="form-group">
        <label>Points:</label>

        <input type="text" name="points" id="points" class="form-control" placeholder="puntos del post" v-model="post.points" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Download Likes:</label>

        <input type="text" name="download_likes" id="download_likes" class="form-control" placeholder="Download Likes" v-model="post.download_likes" v-on:keyup="resetErrors('name')">
    </div>
    <div class="form-group">
        <label>Download Comments:</label>

        <input type="text" name="download_comments" id="download_comments" class="form-control" placeholder="Download Comments" v-model="post.download_comments" v-on:keyup="resetErrors('name')">
    </div>


    <!-- <div class="form-group" :class="{'has-error': errors.name}">
      <label>Nombre:</label>
      <input type="text" class="form-control" placeholder="Nombre de la regla" v-model="posts.name" v-on:keyup="resetErrors('name')">
      <transition enter-active-class="animated fadeIn" mode="out-in" leave-active-class="animated fadeOut">
        <span ref="errors.name" v-if="errors.name" class="help-block text-danger">{{ errors.name[0] }}</span>
        <span ref="noerrors.name" v-else class="help-block">Escribe el nombre de la regla de acumulación</span>
      </transition>
    </div> -->

    <div class="text-right">
      <!-- <a class="btn" href="/posts"><i class=" icon-arrow-left15 left"></i> Regresar</a> -->
      <button @click.prevent="create" class="btn btn-success">Guardar <i class="icon-checkmark4 position-right"></i>
      </button>
      
    </div>
    
  </form>
</template>

<script>
    export default {
        data(){
            return {
                post: {},
                followers:{ },
                errors: {},
                adittionaldata: {
                    '_token': window.axios.defaults.headers.common['X-CSRF-TOKEN'],
                    'ajax': true,
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            resetErrors(field){
                Vue.delete(this.errors, field);
            },
            create() {
                // window.vm.active++;
                axios.post('/posts', this.post).then(
                  ({data}) => {
                      console.log(data);
                      if (data.message) new PNotify({
                          text: data.message,
                          addclass: 'bg-' + data.status,
                          type: data.status,
                          animation: 'fade',
                          delay: 2000
                      });
                    //   window.vm.active--;
                  }
                ).catch(function (error) {
                    window.vm.active--;
                    if (error.response) {
                        if (error.response.status == 422) {
                            var data = error.response.data;
                            this.errors = data;
                        } else {
                            console.log(error.response.status);
                        }
                    } else {
                        console.log('Error', error.message);
                    }
                }.bind(this));
            },
        }
    }
</script>
