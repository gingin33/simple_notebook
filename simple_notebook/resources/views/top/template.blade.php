<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>かんたん備忘録</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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