<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='posts'>
                <div class='post'>
                    <h2 class='title'>{{ $user->name }}</h2>
                    <p class='body'>{{ $user->email }}</p>
                </div>
        <div class='成績登録'>
            
        </div>
        </div>
    </body>
</html>