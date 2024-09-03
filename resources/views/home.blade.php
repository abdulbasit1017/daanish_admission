@extends('layout')

@section('title', 'Home')

@section('content')
 <style>
   body, html {
        height: 100%;
        margin: 0;
    }

    .bg-img {
        background-image: url('/Images/danish school bg.jfif'); /* Use absolute path from the base URL */
        height: 1000px; /* Full viewport height */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed; //Fixed background attachment
        width: 100%;
    }
 </style>
    <div class="bg-img"></div>

@endsection
