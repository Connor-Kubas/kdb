<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <link rel="icon" href="{{ url('images/favicon.ico') }}">

        <link href="{{ url('css/landing.css')}}" rel="stylesheet">

        <title>KDB</title>

    </head>
    <body>
        <div class="container">
            <div class="text">
                <form action="/view" style="background-color: transparent;">
                    @csrf
                    <input name="search" id="search" type="text" style="background-color: transparent;" onclick='grow()' oninput='expandWithText()'>
                </form>
            </div>    
        </div>

        <img src="{{ url("images/posters/$search") }}" width="400px" style="border: 15px solid black; border-radius: 15px; margin-left: 350px; margin-top: 50px;">

    </body>
</html>

<script src="{{ url('js/search.js') }}"></script>