<div class="container">
    <div class="text">
        <form autocomplete="off" action="/view" style="background-color: transparent;">
            @csrf
            <input name="search" id="search" type="text" style="background-color: transparent;" onclick='grow()' oninput='expandWithText()'>
        </form>
    </div>    
</div>