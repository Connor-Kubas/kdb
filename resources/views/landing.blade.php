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
                {{-- <h1>Welcome to Kubas DB</h1> --}}

                <form action="/view" style="background-color: transparent;">
                    @csrf
                    <input name="search" id="search" type="text" style="background-color: transparent;" onclick='grow()'>
                </form>
            </div>    
        </div>

    </body>
</html>

<script src="{{ url('js/search.js') }}"></script>