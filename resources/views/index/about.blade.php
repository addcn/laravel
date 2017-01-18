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

    <footer>
      <div class="container">
        <hr/>
        <p>Copyrights &copy; 2017 dodo. All Rights Reserved.</p>
      </div>
    </footer> <!-- /footer -->

    <div class="container">
        <div id="app"></div>
    </div>

    <!-- Scripts -->
    <script src="{{ elixir('js/simple.js') }}"></script>

    <script>
        //hljs.initHighlightingOnLoad();
    </script>

    </body>
</html>
