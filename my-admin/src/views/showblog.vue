<template>
    <div class="showblog">
        <div class="content" v-for="i in arr ">
            <h1>{{i.title}}</h1>
            <p>{{i.body}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'showblog',
        data(){
            return{
                arr:[],
                id:this.$route.params.id
            }
        },

        created() {
            this.axios.get(`https://www.hzbiz.net/1203/vueapi/showBlogs.php/?id=${this.id}`)
                .then((data)=>{
                    this.arr=data.data.message
                })

        }
    }
</script>

<style scoped lang="less">


</style>
