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
        <h3>Tabla de pedidos </h3>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Doc Cliente</th>
            <th scope="col">Cod Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>1108456404</td>
            <td>123456</td>
            <td>10</td>
            <td>200.000</td>
            <td>baja</td>
            <td>Pendiente</td>
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
      loading: true,
    };
  },
  mounted() {
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
  },
};
</script>

<style scoped>
</style>
