@extends('layouts.master')
    @section('content')
        
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" style="background-color:white;">
            <input type="text" name="password" placeholder="Password" style="background-color:white;">
            <input type="submit">
        </form>

        <form action="/signup" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" style="background-color:white;">
            <input type="text" name="password" placeholder="Password" style="background-color:white;">
            <input type="submit">
        </form>

    @endsection