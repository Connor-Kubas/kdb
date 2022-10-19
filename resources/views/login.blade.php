@extends('layouts.master')
    @section('content')
        
        <div class="cred">
            <div class="log">
                <form action="/login" method="POST">
                    @csrf
                    <h2 style="color: white;">Sign In</h2>
                    <input class="log--input" type="text" name="name" placeholder="Name" style="background-color:white;">
                    <input class="log--input" type="text" name="password" placeholder="Password" style="background-color:white;">
                    <input class="log--input" type="submit" value="Submit">
                </form>
            </div>

            <div class="sign">
                <form action="/signup" method="POST">
                    @csrf
                    <h2 style="color: white;">Sign Up</h2>
                    <input class="log--input" type="text" name="name" placeholder="Name" style="background-color:white;">
                    <input class="log--input" type="text" name="password" placeholder="Password" style="background-color:white;">
                    <input class="log--input" type="submit" value="Submit">
                </form>
            </div>
        </div>

    @endsection