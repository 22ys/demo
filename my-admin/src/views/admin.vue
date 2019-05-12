<template>
    <div class="admin" >
    <div class="top">
        <h1>
       {{title}}
        </h1>
    </div>
     <div v-height class="conTent">

         <div class="left">
             <el-tree
                     :data="data"
                     :props="defaultProps"
                     accordion
                     @node-click="handleNodeClick">
             </el-tree>
         </div>
         <div class="right">
             <router-view></router-view>
         </div>
     </div>
    </div>
</template>

<script>
    export default {
        name: 'admin',
        props:[
           "title"
        ],
        data() {
            return {
                register:true,
                data: [{
                    label: '管理员',
                    children: [
                        {
                            label: '管理员添加',
                            url:'/admin/add'
                        } ,
                        {
                            label: '管理员列表',
                            url:'/admin/list'
                        },
                        {
                            label: '退出登录',
                            url:'/blog'
                        }
                    ]
                }, {
                    label: '一级 2',
                    children: [{
                        label: '二级 2-1',
                        children: [{
                            label: '三级 2-1-1'
                        }]
                    }, {
                        label: '二级 2-2',
                        children: [{
                            label: '三级 2-2-1'
                        }]
                    }]
                }, {
                    label: '一级 3',
                    children: [{
                        label: '二级 3-1',
                        children: [{
                            label: '三级 3-1-1'
                        }]
                    }, {
                        label: '二级 3-2',
                        children: [{
                            label: '三级 3-2-1'
                        }]
                    }]
                }],
                defaultProps: {
                    children: 'children',
                    label: 'label'
                }
            };
        },
        methods: {
            handleNodeClick(data) {
                if(data.url!=undefined){
                    this.$router.push(data.url)
                }
            }
        },
        // created() {
        //     if(this.register){
        //           this.$router.push({path:'/login'})
        //
        //     }
        // }
    }
</script>

<style scoped lang="less">
.top{
    width: 100%;
    height: 50px;
    background: #000;
}
.conTent{
    width: 100%;
    display: flex;
    justify-content: space-between;
    .left{
        width: 13%;
        background: #e4e4e4;
        height: 100%;
    }
    .right{
        width:87%;
        background: #fff;
    }


}
.el-tree{
    width: 95%;
    margin: 0 auto;
    height: 100%;
}
h1{
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
