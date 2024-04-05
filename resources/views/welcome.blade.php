@extends('layouts.header')

@section('content')
<link rel="stylesheet" href="css/header.css">

<header class="header">
<section class="flex">
<a href="#" class="logo">Scent Hub</a>

<nav class="navbar">
 
    <a href="search.php">Roll-on</a>

    <a href="Travel.php">perfume</a>

    <a href="profile.php">Order</a>
    <a href="Logout.php">Login</a>
</nav>
</section>
</header>
<a href="/input/create">make order</a>

<img src="img/okay.jpg" alt="faerga">

<p class="mssg">{{ session('mssg') }}</p>

    </a>
@endsection



