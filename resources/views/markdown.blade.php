<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <!-- style -->
        <style>
            body {
                margin: 10px;
            }
        </style>
        
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
        
        <div id="app">
            <div class="content">                
                <parse :content="{&quot;raw&quot;:&quot;Dolores velit et ipsa. Reiciendis vero ipsam eos reiciendis modi. Quis id nesciunt pariatur animi.&quot;,&quot;html&quot;:&quot;&lt;p&gt;Dolores velit et ipsa. Reiciendis vero ipsam eos reiciendis modi. Quis id nesciunt pariatur animi.&lt;\/p&gt;&quot;}"></parse>
                <parse :content="{{ $article->content }}"></parse>
            </div>
            
        </div>

        <!-- Scripts -->
        <script src="{{ elixir('js/simple.js') }}"></script>

        <script>
            hljs.initHighlightingOnLoad();
        </script>

    </body>
</html>
