<template>
    <form action="#">
    
    <div class="form-group">
      <label>Cliente:</label>
      <select name="client_id" id="client_id" class="select" v-model="vars.client_id">
        <option v-for="client in clients" :value="client.id" v-bind:key="client.id">{{ client.name }}</option>
      </select>
    </div>

    <div class="form-group" :class="{'has-error': errors.name}">
      <label>Nombre:</label>
      <input type="text" class="form-control" placeholder="Nombre de la regla" v-model="vars.name" v-on:keyup="resetErrors('name')">
      <transition enter-active-class="animated fadeIn" mode="out-in" leave-active-class="animated fadeOut">
        <span ref="errors.name" v-if="errors.name" class="help-block text-danger">{{ errors.name[0] }}</span>
        <span ref="noerrors.name" v-else class="help-block">Escribe el nombre de la regla de acumulación</span>
      </transition>
    </div>

    <div class="text-right">
      <a class="btn" href="/vars"><i class=" icon-arrow-left15 left"></i> Regresar</a>
      <button v-if="vars.id>0" @click.prevent="updateVar" class="btn btn-success">Guardar <i class="icon-checkmark4 position-right"></i>
      </button>
      <button v-else @click.prevent="createVar" class="btn btn-success">Crear <i class="icon-checkmark4 position-right"></i></button>
      <button v-if="vars.id>0" @click.prevent="deleteVar" class="btn btn-danger">Eliminar <i class="icon-trash position-right"></i>
      </button>
    </div>
    
  </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
