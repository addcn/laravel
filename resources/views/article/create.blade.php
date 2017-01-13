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


        <style>

            body {
                margin-top: 75px;
            }


            footer {
                margin: 10px 0;
            }

            #comments, #comments li {
                margin: 0;
                padding: 0;
            }

            #comments li {
                list-style: none;
            }
                    
            .photo {
                margin-bottom: 10px;
            }

            .social-buttons button {
                margin-top: 5px;
            }
        </style>

    </head>

    <body>

        <!-- Header -->
        <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Astrospace</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <!-- Body -->
        <div class="container">
            <div class="dicussion row">
                <div class="col-md-9 col-md-offset-1">
                    <form class="form-horizontal" action="http://b.com/discussion" method="POST">
                        <input type="hidden" name="_token" value="od9xKv6fesONJnqe2Puux8GWlQs58OFsD6SwumKi">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tag</label>
                            <div class="col-sm-10">
                                <select class="select" multiple="multiple" name="tags[]" style="width: 100%">
                                                                        <option value="1">aac</option>
                                                                        <option value="2">non</option>
                                                                        <option value="3">adc</option>
                                                                        <option value="4">etd</option>
                                                                        <option value="5">ute</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Content</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="12" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn pull-right">发起新讨论</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                create
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
            //hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
