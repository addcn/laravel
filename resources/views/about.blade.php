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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="active"><a href="about.html">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Body -->
    <div class="container">
        <h1>About Me</h1>               

        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img class="img-thumbnail img-responsive photo" src="http://placehold.it/300x350" />
            </div>
            <div class="col-md-9 col-sm-9">
                <p>
                     Hi my real name is John Rumour. I've been learning astrology for last 20 years. Yeah, that's true. Sometimes I used to think this is all bullshit. But still I love doing more research on this. Do you know why? I don't know. May be I don't know how to pass time other ways. I've predicted the future for Bill Clinton, George Bush and Osama Binladen. Everything happened as I said. I've even predicted the future for me and unfortunately it's not going like that way.. he hee.
                </p>

                <p>
                    I don't know how to fill this paragraph more, so, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                </p>
            </div>
        </div>  

        <p class="social-buttons text-center">
          <button type="button" class="btn btn-primary btn-lg">Visit my Facebook page</button> &nbsp;
          <button type="button" class="btn btn-default btn-lg">Follow me on Twitter</button>
        </p>

        <br />

        <p class="lead text-center">
            For my sin, I've written the following interesting books. 
        </p>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/300x450" class="img-responsive" />
                    </a>
                    <div class="caption text-center">
                        <h4>Signs and compatabilities</h4>
                        <p>
                            Rs. 1200 only
                        </p>
                        <button class="btn btn-sm btn-success">buy now!</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/300x450" class="img-responsive" />
                    </a>
                    <div class="caption text-center">
                        <h4>All About Astrology</h4>
                        <p>
                            Rs. 1200 only
                        </p>
                        <button class="btn btn-sm btn-success">buy now!</button>
                    </div>                              
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#">
                        <img src="http://placehold.it/300x450" class="img-responsive" />
                    </a>
                    <div class="caption text-center">
                        <h4>Why believe in astrology?</h4>
                        <p>
                            Rs. 1200 only
                        </p>
                        <button class="btn btn-sm btn-success">buy now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /footer -->
        <footer class="footer ">
          <div class="container">
            <hr/>
            <p>Copyrights &copy; 2017 dodo. All Rights Reserved.</p>
          </div>
        </footer> 



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

        <!-- Scripts -->
        <script src="{{ elixir('js/home.js') }}"></script>

        <script>
            hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
