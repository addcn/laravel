<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>dashboard</title>
    </head>

    <body>      

        <div id="app" class="container">
            <router-view class="view"></router-view>
        </div>

        <hr/>
        <div>
            <p>Laravel5.3 + vue2 学习 Day3</p>
            <h3>vue单页面项目开发</h3>
            <p>参考成熟线上开源项目结构，从零开始vue单页面项目。</p>
            <p>假设开发一个dashboard模块，模块有3个功能：默认首页、系统配置页、链接管理页（其中链接管理包含列表显示页、增加页面、修改页面）。项目进来显示默认首页http://l.com/dashboard，点击各链接分别导航至对应功能页面。</p>

            <h4>步骤：</h4>
            <ul>
                <li>增加js及css资源文件。resources\assets\js\dashboard.js、resources\assets\sass\dashboard.scss</li>
                <li>增步骤1的js及css资源构建。gulpfile.js增加mix.sass('dashboard.scss').webpack('dashboard.js');</li>

                <li>php增加路由及模板文件。routes\web.php、resources\views\dashboard.blade.php</li>

                <li>前端js入口及路由文件。resources\assets\js\dashboard.js、resources\assets\js\routes.js</li>
                <li>功能页面文件resources\assets\js\views</li>
            </ul>

        </div>
        

        <script type="text/javascript">
            var Laravel = {
                // 设置 csrfToken
               csrfToken: '{{ csrf_token() }}' 
            };
        </script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>
</html>