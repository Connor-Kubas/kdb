@extends('layouts.master')
    @section('content')
        <x-search></x-search>
    @endsection

@push('script')
    <script type="text/javascript" src="{{ url('js/search.js') }}"></script>
@endpush