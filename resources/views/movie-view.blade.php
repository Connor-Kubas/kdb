@extends('layouts.master')
    @section('content')
        <x-search></x-search>
        <img class="poster" src="{{ url("/storage/posters/$movie_id") }}.jpg" width="400px">

        <form action="/rating" method="POST">
            @csrf
            <input type="text" name="rating" value="{{ $rating + 0}}"style="background-color: white; float: right; height: 100px; width: 100px; margin-right: 500px; margin-top: -300px; font-size: 2em; text-align: center;">
            <input type="hidden" name="movie_id" value="{{ $movie_id }}">
        </form>

    @endsection

@push('script')
    <script type="text/javascript" src="{{ url('js/search.js') }}"></script>
@endpush