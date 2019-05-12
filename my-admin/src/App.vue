<template>
   <div id="app">
       <router-view :title='title'></router-view>
   </div>
</template>
<script>

  export default{
    name:'app',
      data(){
        return{
            title:"后台管理"
        }
      },
    components: {
     
    },

  }
</script>
<style lang="less">
  *{
    margin: 0;
    padding: 0;
  }
  ul{
    list-style: none;
  }

  a{

    text-decoration: none;
  }

#app {

}

.content{
    width: 1000px;
  margin: 15px auto;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
    align-items: center;
  background: #999;

    h1{
      margin: 10px auto;
      height: 100px;
      text-align: center;
      display: flex;
      align-items: center;

    }
  p{
      width: 90%;
    text-align: center;
    display: flex;
    align-items: center;
      height: 200px;
      overflow: hidden;
  }
  }
</style>
