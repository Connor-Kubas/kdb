@extends('layouts.master')

@section('content')

    <form action="/add/{title, year}">
        @csrf
        <div class="box-container">
        <div class="box">
            <h1>Add a Film to the Database</h1>
            <div class="inputs">

                <input name="title" type="text" style="background-color: white;">

                <select name="year" style="background-color: white;">
                    @for ($i = date('Y'); $i >= 1900; $i--) 
                        <option style="background-color: white;" value="{{ $i }}">{{ $i }}</option>
                    @endfor


            </div>
        </div>
        </div>
    </form>

@endsection