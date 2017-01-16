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
                    <a href="{{ url('article/index') }}" class="navbar-brand">Article</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('article/create') }}">Create</a></li>
                        <li class="active"><a href="{{ url('article/contact') }}">Contact</a></li>
                        <li><a href="{{ url('article/about') }}">About</a></li>
                    </ul>
                </nav>
            </div>
        </header>

    <!-- Body -->
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
    </div>

        <footer>
          <div class="container">
            <hr/>
            <p>Copyrights &copy; 2017 dodo. All Rights Reserved.</p>
          </div>
        </footer> <!-- /footer -->


        <div id="app"></div>

        <!-- Scripts -->
        <script src="{{ elixir('js/home.js') }}"></script>

        <script>
            //hljs.initHighlightingOnLoad();
        </script>
        
    </body>
</html>
