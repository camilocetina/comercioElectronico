<template>
  <div>
    <div v-if="this.loading">
      <div class="d-flex justify-content-center">
        <div class="spinner-grow" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>

    <div v-else>Bienvenido</div>
    <button class="btn btn-info" @click.prevent="logout">Logout</button>
  </div>
</template>

<script>
export default {
  name: "DashboardComponent",

  data() 
  {
    return {
    
      loading: true,
    }
  },
  mounted()
  {
    if(this.$store.state.token !== '')
    {
        axios.post('/api/checkToken', { token : this.$store.state.token })
        .then(res => {
            this.loading = false;
            if(!res.data.success)
            {
                this.$store.commit('setToken',res.data.token);
            }else{
                this.$store.commit('setToken',res.data.token);
            }
            
        })
        .catch(err => {
            this.loading = false;
            this.$store.commit('clearToken');
            this.$router.push('/login');
        })
    }else{
        this.loading = false;
        this.$router.push('/login');
    }
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
</style>
