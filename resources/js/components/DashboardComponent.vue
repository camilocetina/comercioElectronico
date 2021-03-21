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
      <h3>Tabla de pedidos</h3>
      <form class="form-inline my-2 my-lg-0">
        <input
          class="form-control mr-sm-2 buscador"
          type="search"
          placeholder="Buscar por codigo"
          aria-label="Search"
          v-model="getData.id"
          @keyup="searchOrder"
        />
        <input type="date" class="form-control" v-model="getData.date_delivery" @change="searchOrderByDate"/>
      </form>
      <br />
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Doc Cliente</th>
            <th scope="col">Cod Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">Fecha de entrega</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(order, id) in orders" :key="id">
            <th scope="row">{{order.id}}</th>
            <td>{{order.client_id}}</td>
            <td>{{order.product_id}}</td>
            <td>{{order.cant}}</td>
            <td>{{order.value}}</td>
            <td>{{order.dateDelivery}}</td>
            <td>{{order.priority}}</td>
            <td>{{order.state}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "DashboardComponent",

  data() {
    return {
       getData:{
            id: "",
            date_delivery: "",
       },
        setTimeOutOrder: "",
        loading: true,
        orders:[]
    };
  },
  mounted() {
    this.uploadAllOrders();
 
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

    getOrders(){
        // ,this.getData
    const params = {
        'id' : this.getData.id,
        'date_delivery' : this.getData.date_delivery
    }
       axios.post("/api/pedidos",params)
        .then(res=>{
            this.orders = res.data;
        }).catch(err =>{
            console.log(err)
        })
        console.log(this.orders)
    },
    
    searchOrder(){
        clearTimeout( this.setTimeOutOrder )
        this.setTimeOutOrder = setTimeout(this.getOrders,360)

    },
    uploadAllOrders()
    {
      let data;
      axios.get('/api/pedidos/todos')
      .then(res =>{
        data = res.data
        this.orders = data;
      })
      .catch(err =>{
        consoel.log(err)
      })
    },
    searchOrderByDate()
    {
      const params = {
        'id' : this.getData.id,
        'date_delivery' : this.getData.date_delivery
    }
      console.log(params)
      axios.post('/api/pedidos',params)
      .then(res =>{
        this.orders = res.data
      })

    }
    
  },
};
</script>

<style scoped>
</style>
