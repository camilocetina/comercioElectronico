<template>
  <div>
    <div v-if="this.loading">
      <div class="d-flex justify-content-center">
        <div class="spinner-grow" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <div class="container">
      <h3>Inventario</h3>

      <form class="form-inline my-2 my-lg-0">
        <input
          class="form-control mr-sm-2 buscador"
          type="search"
          placeholder="Buscar por codigo"
          aria-label="Search"
          v-model="getData.id"
          
        /> 
        <input type="date" class="form-control" v-model="getData.date_delivery"/>
      </form>
      <br />
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
        
            <th scope="col">Cod Producto</th>
            <th scope="col">Cantidad</th>
            
          </tr>
        </thead>
        <tbody>
          <tr v-for="(inventory, id) in inventorys" :key="id">
            <th scope="row">{{inventory.id}}</th>
          
            <td>{{inventory.product_id}}</td>
            <td>{{inventory.amount}}</td>
            <td>{{inventory.value}}</td>
           
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "InventoryComponent",

  data() {
    return {
       getData:{
            id: "",
            date_delivery: "",
       },
        setTimeOutOrder: "",
        loading: true,
        inventorys:[]
    };
  },
  mounted() {
    this.uploadAllInventory();
 
    if (this.$store.state.token !== "") {
      axios
        .post("/api/checkToken", { token: this.$store.state.token })
        .then((res) => {
          this.loading = false;
          if (!res.data.success) {
            this.$store.commit("setToken", res.data.token);
          } else {
            this.$store.commit("setToken", res.data.token);
          }
        })
        .catch((err) => {
          this.loading = false;
          this.$store.commit("clearToken");
          this.$router.push("/login");
        });
    } else {
      this.loading = false;
      this.$router.push("/login");
    }
  },
  methods: {

    logout() {
      axios
        .post("/api/logout", { token: this.$store.state.token })
        .then((res) => {
          this.$store.commit("clearToken");
          this.$router.push("/");
        });
    },

   
    uploadAllInventory()
    {
      let data;
      axios.get('/api/inventario/todos')
      .then(res =>{
        data = res.data
        this.inventorys = data;
      })
      .catch(err =>{
        console.log(err)
      })
    }
  
    
  },
};
</script>

<style scoped>
</style>
