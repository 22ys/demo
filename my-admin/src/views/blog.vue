<template>
    <div class="mycontent">
        搜索:<input type="text" v-model="ss">
       <div class="content" v-for="(i,index) in ccc" :key="index">
           <h1><router-link :to="'/showblog/'+i.id">{{i.title}}</router-link></h1>
       </div>
    </div>
</template>

<script>
    export default {
        name: 'mycontent',
        data(){
            return{
                arr:[],
                ss:""
            }
        },
        computed:{
            ccc:function(){
              return this.arr.filter((text)=>{
                  return  text.title.match(this.ss)
              })

            }
        },
        created() {
           this.axios.get('https://www.hzbiz.net/1203/vueapi/showBlogs.php')
                .then((text)=>{
                   this.arr=text.data.message
                })

        }
    }
</script>

<style scoped lang="less">
    .mycontent{
        width: 1000px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        input{
            width: 50%;
        }
    }

</style>
