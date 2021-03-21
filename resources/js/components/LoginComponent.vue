<template>
  <div>
    <div v-if="loading === true">
      <div class="d-flex justify-content-center">
        <div class="spinner-grow" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <div class="login" v-else>
      <form class="form">
        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            class="form-control"
            placeholder="Email"
            v-model="credentials.email"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            placeholder="Password"
            v-model="credentials.password"
          />
        </div>
        <button class="btn button-home-color btn-block" @click.prevent="login">
          Ingreso Admin
        </button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "LoginComponent",

  data() {
    return {
      credentials: {
        email: "",
        password: "",
      },
      
      loading: true,
    };
  },
  mounted() {
    if (this.$store.state.token !== "") {
      axios
        .post("/api/checkToken", { token: this.$store.state.token })
        .then((res) => {
          if (res) {
            this.loading = false;
            this.$router.push("/dashboard");
          }
        })
        .catch((err) => {
          this.loading = false;
          this.$store.commit("clearToken");
        });
    } else {
      this.loading = false;
    }
  },
  methods: {
    login() {
      axios
        .post("/api/login", this.credentials)
        .then((res) => {
          if (res.data.success) {
            this.$store.commit("setToken", res.data.token);
            this.$router.push("/dashboard");
          }
        })
        .catch((err) => {});
    },
  },
};
</script>

<style scoped>
.login {
  width: 500px;
  border: 1px solid #eee;
  padding: 20px;
  margin: 50px auto;
  border-radius: 10px;
}
.button-home-color {
  background-color: rgb(70, 16, 16);
  color: #fff;
}
</style>
