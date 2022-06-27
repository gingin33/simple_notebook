<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>かんたん備忘録</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="header"> 
            <h1>@yield('title')</h1>
        </div>
        <div class="pageTitle">
            <h2>@yield('pageTitle')</h2>
        </div>
        @yield('contents')
    </body>
</html>