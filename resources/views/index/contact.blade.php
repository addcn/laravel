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
        <h1>Contact Me</h1>

        <div class="well">
            <p class="lead">
                Do you have any question? Please use the below contact form and send a message. I'll reply you as quick as possible.
            </p>
        </div>

        <div class="contact-form">
            <form class="form-horizontal col-md-8" role="form">

              <div class="form-group">
                <label for="name" class="col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label for="subject" class="col-md-2">Subject</label>
                <div class="col-md-10">
                    <input type="subject" class="form-control" id="subject" placeholder="Subject">
                </div>
              </div>

              <div class="form-group">
                <label for="message" class="col-md-2">Message</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="message" placeholder="Message"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-lg btn-primary">Submit your message!</button>
                </div>
              </div>
            </form> 
        </div>
    </div><!-- /body -->

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
