<div class="container">
    <div class="text">
        <form autocomplete="off" action="/view" style="background-color: transparent;">
            @csrf
            <input name="title" class="search" id="search" type="text" style="background-color: transparent;" onclick='grow()' oninput='expandWithText()'>
        </form>

        <h1 style="background-color: transparent; margin-left: 50px; font-size: 1em; display: flex; justify-content: center;">{{ Auth::user()->name; }}</h1> 

        <form action="/logout" style="background-color: transparent;">
            @csrf
            <input class="logout" type="submit" value="Logout" style="background-color: transparent;">
        </form>

    </div>   
    
</div>