<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>hello vue2 & vue-router 2</title>
    </head>

    <body>

        <div id="app" class="container">

            <h2>Hello Vue</h2>

            <a href="/vue">Home</a>

            <!-- 使用 router-link 组件来导航. -->
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>

            <!-- 路由匹配到的组件将渲染在这里 -->
            <router-view class="view"></router-view>
        </div>

        <hr/>
        <div>
            <h2>Hello Vue</h2>

            <h3>詳步驟</h3>
            <ul>
                <li>配置package.json</li>
                <li>安装依赖 npm install</li>

                <li>配置路由web.php及模板vue.blade.php</li>
                <li>引入vue及vue-router開發，見js/app.js</li>

                <li>编译合并 JS/CSS 代码，gulp，如需实时编译，可输入 gulp watch</li>
                <li>http://l.com/vue</li>
            </ul>

            <h3>技術棧</h3>
            <ul>
                <li><a href="https://cn.vuejs.org/v2/guide/" target="_blank">vue2</a><br/> Vue.js是一套构建用户界面的 渐进式框架。</li>            
                <li><a href="https://vuex.vuejs.org/zh-cn/intro.html" target="_blank">vuex</a><br/> Vuex 是一个专为 Vue.js 应用程序开发的状态管理模式。</li>
                <li><a href="https://router.vuejs.org/zh-cn/" target="_blank">vue-router 2</a><br/> vue-router是Vue.js官方的路由插件，它和vue.js是深度集成的，适合用于构建单页面应用。</li>
                <li><a href="http://laravelacademy.org/post/5962.html" target="_blank">laravel elixir</a><br/>Laravel Elixir 提供 API 用于定义基本的Gulp任务。其支持一些通用的 CSS 和 JavaScript 预处理器，甚至测试工具。</li>

            </ul>
        </div>
        
        <hr/>
        <h4>Laravel5.3 + vue2 学习系列</h4>
        <ul>
                <li>Laravel5.3 + vue2 学习 Day1 <a href="http://l.com">环境配置及基本概念</a></li>
                <li>Laravel5.3 + vue2 学习 Day2 <a href="http://l.com/vue">Hello Vue</a></li>
                <li>Laravel5.3 + vue2 学习 Day3 <a href="http://l.com/dashboard">vue单页面项目开发</a></li>
        </ul>


        <script type="text/javascript">
            var Laravel = {
                // 设置 csrfToken
               csrfToken: '{{ csrf_token() }}' 
            };
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>