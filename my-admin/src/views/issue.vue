<template>
    <div class="issue">
        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
            <el-form-item label="标题" prop="title">
                <el-input v-model="ruleForm.title"></el-input>
            </el-form-item>
            <el-form-item label="类容" prop="body">
                <el-input type="textarea" v-model="ruleForm.body" :rows="10"></el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click="submitForm('ruleForm')">立即发布</el-button>
                <el-button @click="resetForm('ruleForm')">重置</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>
    import qs from 'qs'
    export default {

        name: 'issue',
        data() {
            return {
                ruleForm: {
                    title: '',
                    success:'',
                    action:"1",
                    body: ''
                },
                rules: {
                    title: [
                        { required: true, message: '请输入标题名称', trigger: 'blur' },
                        { min: 3, max: 20, message: '长度在 3 到 20 个字符', trigger: 'blur' }
                    ],
                    body: [
                        { required: true, message: '请填写类容', trigger: 'blur' }
                    ]
                }
            };
        },

        methods:{

            submitForm(formName) {
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        let Arr=qs.stringify(this.ruleForm)
                        this.axios.post('https://www.hzbiz.net/1203/vueapi/blogadd.php',Arr
                        ).then((data)=>{
                            this.$message({
                                message: '发布成功',
                                type: 'success'
                            });

                        })
                    } else {
                        return false;
                    }
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }

        }

    }
</script>

<style scoped lang="less">
.issue{
    width:1200px;
     margin: 25px auto;
}

</style>
