<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>かんたん備忘録</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body>
        <div class="header"> 
            <h1>@yield('title')</h1>
        </div>
        <div class="pageTitle">
            <h2>@yield('pageTitle')</h2>
        </div>
        @yield('contents')
        <div class="footer">
            <div class="footTitle">
                <ul>
                    <li><a href="https://www.youtube.com/channel/UCZf__ehlCEBPop-_sldpBUQ"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://twitter.com/ginginjiAIT"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://github.com/gingin33/simple_notebook"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
            <p><small>&copy; 2022 gingin33 かんたん備忘録</small></p>
        </div>
    </body>
</html>