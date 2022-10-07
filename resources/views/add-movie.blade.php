@extends('layouts.master')

@section('content')

    <form action="/add/create" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="box-container">
        <div class="box">
            
            <div class="box-items">

                <h1 class="transparent">Add a Film to the Database</h1>

                <input class="transparent text-add" name="title" type="text" placeholder="Title">

                <select class="transparent dropdown-add" name="year">
                    @for ($i = date('Y'); $i >= 1900; $i--) 
                        <option class="transparent" value="{{ $i }}">{{ $i }}</option>
                    @endfor

                <input class="transparent option-add" type="file" name="upload">

                <input class="transparent submit-add" type="submit" value="Add Movie">
            
            </div>
        </div>
        </div>
    </form>

@endsection