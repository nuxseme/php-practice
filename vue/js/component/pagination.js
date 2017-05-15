/*
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * Created by Administrator on 2017/05/15.
 */
(function () {
    //v-on 绑定多个事件
    var template = '<div class="page-bar">'+
        '<ul>'+
        '<li v-if="current!=1"><a v-on:click="current--;btnClick(current--)" >上一页</a></li>'+
        '<li v-for="index in indexs"  v-bind:class="{ active: current == index}">'+
        '<a v-on:click="btnClick(index)">{{ index }}</a>'+
        '</li>'+
        '<li v-if="current!=allpage"><a v-on:click="current++;btnClick(current++)">下一页</a></li>'+
        '<li><a>共<i>{{all}}</i>页</a></li>'+
        '</ul>'+
        '<p>{{message_from_parent}}</p></div>';

    var pagination =  Vue.extend({
        template: template,//模板
        props: ['message_from_parent', 'cur','all'],//父组件数据
        data:function () {
          return {
              'current':this.cur,
              'allpage':this.all
          };
        },
        //分页数据由计算获取
        computed: {
            indexs: function(){
                var left = 1
                var right = this.allpage
                var ar = []
                if(this.all>= 11){
                    if(this.current > 5 && this.current < this.allpage-4){
                        left = this.current - 5
                        right = this.current + 4
                    }else{
                        if(this.current<=5){
                            left = 1
                            right = 10
                        }else{
                            right = this.allpage
                            left = this.allpage -9
                        }
                    }
                }
                while (left <= right){
                    ar.push(left)
                    left ++
                }
                return ar
            }
        },
        methods: {
            btnClick: function(data){
                if(data != this.current){
                    this.current = data
                    //向上传播事件
                    //this.$dispatch('btn-click',data)
                    this.$emit('child-click',data);

                }
            }
        }
    });

    window.paginationComponent = pagination;
})();
