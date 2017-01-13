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

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
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
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top</a></li>
              </ul>
            </div><!--/.nav-collapse -->

          </div>
        </nav>

        <div class="container">

          <!-- Main component for a primary marketing message or call to action -->
          <div class="jumbotron">
            <h1>Navbar example</h1>
            <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>To see the difference between static and fixed top navbars, just scroll.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
            </p>
          </div>


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
                    <parse :content="{{ $article->content }}"></parse>
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





        </div> <!-- /container -->



        <footer>
          <div class="container">
            <hr/>
            <p>Copyrights &copy; 2017 dodo. All Rights Reserved.</p>
          </div>
        </footer> <!-- /footer -->



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster 
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>-->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->


        <!-- Scripts -->
        <script src="{{ elixir('js/home.js') }}"></script>

        <script>
            //hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
