import Vue from 'vue'

Vue.directive('height',{
    bind:function (el) {
           let height=document.documentElement.clientHeight || document.body.clientHeight;
            el.style.height=height-50+'px';
       }

})