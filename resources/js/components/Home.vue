<template>
    <div class="home">
        <img src="img/imghome.jpg" id="imgHome" alt="">
        <div class="head-text">
            <div class="title-principal">
                ¿listo para remodelar tu hogar?
            </div>
            <div class="title-secondary">
                <h3>Aquí encontrarás todo lo que necesitas</h3>
            </div>
            <div class="button-principal">
                <a href="/login" class =" btn button-home-color btn-block">Revisa todos los pedidos</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        name:"HomeComponent",
       data(){
            return {
                loading : true
        }
       },
       mounted(){

       }
    }
</script>

<style scoped>
    
    #imgHome{
        width:100%;
        height:100vh;
    }
    .head-text{
        
        border-radius:10px;
        width:40%;
        height:300px;
        padding:10px;
        position:absolute;
        top:100px;
        left:100px;
    }
    .head-text .title-principal
    {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 700;
        font-size:50px;
        color:rgb(70, 16, 16);
    }
    .head-text .title-secondary{
        color:#000;
    }
    .button-home-color{
        background-color:rgb(70, 16, 16);
        color:#fff;
    }

 
</style>