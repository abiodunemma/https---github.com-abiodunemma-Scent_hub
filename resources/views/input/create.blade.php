@extends('layouts.header')

@section('content')
<div class="signup-form">
   
    <h1>add</h1>
 <form action="/body" method="POST">
    @csrf
    <input type="text" placeholder="type"  id="type" name="type">
    <input type="text" placeholder="name"  id="name " name="name">
    <input type="text" placeholder="amount"  id="amount " name="amount">
    <input type="text" placeholder="price" id="pice" name="price">

    <input type="submit" value="Order pef" >
 
 </form>

@endsection