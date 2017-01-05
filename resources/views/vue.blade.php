<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>hello vue2 && vue-router 2</title>
    </head>

    <body>
        
        <h2>Hello Vue</h2>

        <div id="app" class="container">
            <a href="http://l.com/">Home</a>

            <!-- 使用 router-link 组件来导航. -->
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>

            <!-- 路由匹配到的组件将渲染在这里 -->
            <router-view class="view"></router-view>
        </div>

        <h3>step</h3>
        <ul>
            <li>配置路由web.php及模板vue.blade.php</li>
            <li>配置package.json</li>
            <li>安装依赖 npm install</li>

            <li>引入vue及vue-router開發，見js/app.js</li>

            <li>编译合并 JS/CSS 代码，gulp，如需实时编译，可输入 gulp watch</li>
            <li>http://l.com/vue</li>
        </ul>

        <h3>參考資料</h3>
        <ul>
            <li><a href="https://cn.vuejs.org/v2/guide/" target="_blank">vue2</a></li>
            <li><a href="https://router.vuejs.org/zh-cn/" target="_blank">vue-router 2</a></li>
            <li><a href="http://laravelacademy.org/post/5962.html" target="_blank">laravel elixir</a></li>
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