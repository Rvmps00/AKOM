
<style>
    .navbar {
        background-color: #333;
        overflow: hidden;
    }

    .navbar .back-button {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar .back-button:hover {
        background-color: #ddd;
        color: black;
    }
    h1{
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
    }
</style>



<nav class="navbar ">
    <a href="{{route('portofolio.dashboard')}}" class="back-button">Back</a> 
    <h1>page ini hanya preview</h1>
</nav>
<div>

    {{ $slot }}
</div>