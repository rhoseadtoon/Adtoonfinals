@extends('pages.home')


@section('content')

<style>

    body{
        background-color: rgba(21, 152, 239, 0.963);
    }
    h2 {
        margin-left: 20px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: bold;
        position: center;
        margin-top: 38px;
    }
    .welcome-container {
        text-align: center;
        margin-top: 20px;
    }

    .welcome-container img {
        max-width: 53%;
        height: auto;
    }
</style>

<div class="welcome-container">
    <img src="https://www.pushengage.com/wp-content/uploads/2022/02/Best-Website-Welcome-Message-Examples.png" alt="Welcome Image">
    <h2>Welcome to Guidance System!</h2>
    <p>Set an Appointment Now.</p>
</div>

<div class="container mt-5">
    @yield('content')
</div>


@endsection