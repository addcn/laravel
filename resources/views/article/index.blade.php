<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/dashboard.css') }}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>

        <div id="app">
            <h4>Article</h4>
            <p><a href="http://l.com/article/index">Index</a>&nbsp;
                <a href="http://l.com/article/list">List</a>&nbsp;
                <a href="http://l.com/article/detail">Detail</a>&nbsp;
                <a href="http://l.com/article/create">Create</a>&nbsp;
                <a href="http://l.com/article/edit">Edit</a>&nbsp;
                <a href="http://l.com/article/delete">Delete</a>
            </p>
            <hr/>
            

            <div class="content"> 
                index
            </div>
            
            <hr/>
            <h4>Laravel5.3 + Vue2 + Bootstrap3 学习系列</h4>
            <ul>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day1 <a href="http://l.com">环境配置及基本概念</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day2 <a href="http://l.com/vue">Hello Vue</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day3 <a href="http://l.com/dashboard">Vue单页面项目开发</a></li>
                <li>Laravel5.3 + Vue2 + Bootstrap3 学习 Day4 <a href="http://l.com/article/index">文章发布系统</a></li>
            </ul>
        </div>

        <!-- Scripts -->
        <script src="{{ elixir('js/home.js') }}"></script>

        <script>
            hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
