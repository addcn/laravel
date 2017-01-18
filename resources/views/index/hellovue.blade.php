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
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
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
            <h2>Hello Vue</h2>
            <a href="{{ url('hellovue') }}">Home</a>
            
            <!-- 使用 router-link 组件来导航. -->
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>

            <!-- 路由匹配到的组件将渲染在这里 -->
            <router-view class="view"></router-view>
        </div>

        <div>
            <hr/>
            <h3>Hello Vue</h3>

            <h4>详步骤</h4>
            <ul>
                <li>配置package.json</li>
                <li>安装依赖 npm install</li>

                <li>配置路由web.hellovue.blade.php</li>
                <li>引入vue及vue-router开发，见js/hellovue.js</li>

                <li>编译合并 JS/CSS 代码，gulp，如需实时编译，可输入 gulp watch</li>
                <li>{{ url('hellovue') }}</li>
            </ul>

            <h4>技术栈</h4>
            <ul>
                <li><a href="https://cn.vuejs.org/v2/guide/" target="_blank">vue2</a><br/> Vue.js是一套构建用户界面的 渐进式框架。</li>            
                <li><a href="https://vuex.vuejs.org/zh-cn/intro.html" target="_blank">vuex</a><br/> Vuex 是一个专为 Vue.js 应用程序开发的状态管理模式。</li>
                <li><a href="https://router.vuejs.org/zh-cn/" target="_blank">vue-router 2</a><br/> vue-router是Vue.js官方的路由插件，它和vue.js是深度集成的，适合用于构建单页面应用。</li>
                <li><a href="http://laravelacademy.org/post/5962.html" target="_blank">laravel elixir</a><br/>Laravel Elixir 提供 API 用于定义基本的Gulp任务。其支持一些通用的 CSS 和 JavaScript 预处理器，甚至测试工具。</li>

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

    <script src="{{ asset('js/hellovue.js') }}"></script>
    
    </body>
</html>