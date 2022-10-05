@extends('layouts.master')
    @section('content')
        <x-search></x-search>
        <img class="poster" src="{{ url("images/posters/$search") }}" width="400px" style="border: 15px solid black; border-radius: 15px; margin-left: 350px; margin-top: 50px;">
    @endsection

@push('script')
    <script type="text/javascript" src="{{ url('js/search.js') }}"></script>
@endpush