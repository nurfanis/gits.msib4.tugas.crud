@extends('layouts.master')

@section('content')
<div class="container my-3">
    <h1>Welcome To Fanis SHOP</h1>
    <h2>Kami menyediakan ......</h2>


    @auth
        <p>{{ Auth()->user()->name }}</p>
    @endauth

    @guest
        Anda Belum Login
    @endguest
</div>
@endsection