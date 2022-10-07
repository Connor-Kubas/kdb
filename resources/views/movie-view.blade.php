@extends('layouts.master')
    @section('content')
        <x-search></x-search>
        <img class="poster" src="{{ url("/storage/posters/$movie_id") }}" width="400px">
    @endsection

@push('script')
    <script type="text/javascript" src="{{ url('js/search.js') }}"></script>
@endpush