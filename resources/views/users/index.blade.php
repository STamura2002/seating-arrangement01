<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>User List</h1>{{Auth::user()}}
        <a href="/users/create">create</a>
        <div class='posts'>
            @foreach ($users as $user)
                <div class='post'>
                    <h2 class='title'>{{ $user->name }}</h2>
                    <p class='body'>{{ $user->email }}</p>
                    
                    <form action="/users/{{ $user->id }}" id="form_{{ $user->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="button" onclick="deleteUser({{ $user->id }})">delete</button> 
                </form>
                    
               
                </div>
            @endforeach
        </div>
        <script>
            function deleteUser(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>