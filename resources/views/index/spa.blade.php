<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" >
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/simple.css') }}">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>        
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>

    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav simple-navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand"><span class="glyphicon glyphicon-tree-conifer"></span>进击的程序员</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('article/index') }}">Blog</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header><!-- /header -->    

    <div class="container">
        <div id="app">
            <router-view class="view"></router-view>
        </div>

        <div>
            <hr/>
            <p>Laravel5.3 + vue2 学习 Day3</p>
            <h3>vue单页面项目开发</h3>
            <p>构建可运行在生产环境，从零开始开发vue单页面项目。</p>
            <p>假设开发一个spa模块，模块有3个功能：默认首页（http请求当前时间，见Home.vue）、系统配置页、链接管理页（其中链接管理包含列表显示页、增加页面、修改页面）。项目进来显示默认首页{{ url('spa') }}，点击各链接分别导航至对应功能页面。</p>

            <h4>步骤：</h4>
            <ul>
                <li>增加js及css资源文件。resources\assets\js\spa.js、resources\assets\sass\spa.scss</li>
                <li>增步骤1的js及css资源构建。gulpfile.js增加mix.sass('spa.scss').webpack('spa.js');</li>

                <li>php增加路由及模板文件。routes\web.php、resources\views\spa.blade.php</li>

                <li>前端js入口及路由文件。resources\assets\js\spa.js、resources\assets\js\routes.js</li>
                <li>功能页面文件resources\assets\js\views</li>
                <li>编译合并 JS/CSS 代码，gulp，如需实时编译，可输入 gulp watch</li>
                <li>{{ url('spa') }}</li>
            </ul>

        </div>
        
        <div>
            <hr/>
            <h4>Laravel5.3 + Vue2 + Bootstrap3 学习系列</h4>
            <ul>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day1 <a href="{{ url('/') }}">环境配置及基本概念</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day2 <a href="{{ url('hellovue') }}">Hello Vue</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day3 <a href="{{ url('spa') }}">Vue单页面项目开发</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day4 <a href="{{ url('article/index') }}">文章发布系统</a></li>
            </ul>
        </div>
    </div> <!-- /container -->

    

    <script type="text/javascript">
        var Laravel = {
            // 设置 csrfToken
           csrfToken: '{{ csrf_token() }}' 
        };
    </script>
    <script src="{{ asset('js/spa.js') }}"></script>
</body>
</html>