<template>

    <div id="home">
        <myheader></myheader>
        <router-view></router-view>
    </div>

</template>

<script>
    import header from '../components/herder'
    export default {
        name: 'home',
        components: {
            "myheader":header,
        }
        ,
    }
</script>

<style scoped lang="less">


</style>
