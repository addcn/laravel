<!DOCTYPE html>
<html lang="zh">
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
            <div class="content">                
                <parse :content="{&quot;raw&quot;:&quot;Dolores velit et ipsa. Reiciendis vero ipsam eos reiciendis modi. Quis id nesciunt pariatur animi.&quot;,&quot;html&quot;:&quot;&lt;p&gt;Dolores velit et ipsa. Reiciendis vero ipsam eos reiciendis modi. Quis id nesciunt pariatur animi.&lt;\/p&gt;&quot;}"></parse>
                <parse :content="{{ $article->content }}"></parse>
            </div>
        </div>
    </div>

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
