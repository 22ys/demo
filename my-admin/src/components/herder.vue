<template>
    <div class="myHeader">
      <ul>
          <li>
              <router-link to="/blog">首页</router-link>
          </li>
          <li>
              <router-link to="/issue">发布</router-link>
          </li>
          <li >
              <router-link to="/login">登录</router-link>
          </li>
      </ul>
    </div>
</template>

<script>
    export default {
        name: 'myHeader',
        data(){
            return{

            }
    }
    }
</script>

<style scoped lang="less">
  ul{
      width: 100%;
      height: 40px;
      background: #0a0a0a;
      display: flex;
      align-items: center;
      justify-content: center;

  }
  li{
      width: 60px;
      height: 100%;
      margin-left: 15px;


      a{
          width: 60px;
          height: 100%;
          color: #fff;
          font-size: 13px;
          display: flex;
          justify-content: center;
          align-items: center;
      }
  }

</style>
