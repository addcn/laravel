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


        <!-- Header -->
        <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav simple-navbar" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ url('article/index') }}" class="navbar-brand"><span class="glyphicon glyphicon-tree-conifer"></span>进击的程序员</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('article/create') }}">Create</a></li>
                        <li><a href="{{ url('article/contact') }}">Contact</a></li>
                        <li><a href="{{ url('article/about') }}">About</a></li>
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
        </header>


        <div class="container">
            
              <h4>Article</h4>
              <p><a href="{{ url('article/index/') }}">Index</a>&nbsp;
                    <a href="{{ url('article/list/') }}">List</a>&nbsp;
                    <a href="{{ url('article/detail/1') }}">Detail</a>&nbsp;
                    <a href="{{ url('article/create/') }}">Create</a>&nbsp;
                    <a href="{{ url('article/edit/') }}">Edit</a>&nbsp;
                    <a href="{{ url('article/delete/') }}">Delete</a>
              </p>

              <hr/>
              <div id="app">
                    <div class="content">
                        Create
                    </div>
              </div>

              <hr/>
              <h4>Laravel5.3 + Vue2 + Bootstrap3 学习系列</h4>
              <ul>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day1 <a href="http://l.com">环境配置及基本概念</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day2 <a href="{{ url('vue') }}">Hello Vue</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day3 <a href="{{ url('dashboard') }}">Vue单页面项目开发</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day4 <a href="{{ url('article/index') }}">文章发布系统</a></li>
              </ul>

        </div> <!-- /container -->


        <footer>
          <div class="container">
            <hr/>
            <p class="text-center">Copyrights &copy; 2017 dodo. All Rights Reserved.</p>
          </div>
        </footer> <!-- /footer -->

        <!-- Scripts -->
        <script src="{{ elixir('js/simple.js') }}"></script>

        <script>
            hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
        