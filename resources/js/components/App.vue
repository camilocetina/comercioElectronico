<template>
  <div>
      <div class="navbar" v-if="this.$store.state.token !== ''">
        <div>
          <router-link to="/dashboard">Dashboard</router-link>
        </div>
        <div>
            <button class="btn btn-info" @click.prevent="logout">Salir</button>
        </div>
      </div>
      <router-view></router-view>
    </div>

</template>

<script>
export default {
  name: "App",

  mounted(){
      if(this.$store.state.token === '')
      {

      }else{

      }
      console.log(this.$store.state.token)
  },
  methods:
  {
      
      logout(){
          axios.post('/api/logout',{ token: this.$store.state.token })
          .then(res=>{
              this.$store.commit('clearToken');
              this.$router.push('/');
            
          })
      }
  }
};
</script>

<style scoped>
    .navbar{
        display:flex;
        justify-content: center;
        align-items:center;
        background-color:rgb(219, 217, 217);
        border-bottom:1px solid #eee;
    }
    .navbar div{
        padding: 5px, 20px;
        margin:5px;

    }
</style>
