@extends('layouts.header')

@section('content')

<h1>Order for {{ $scent->name }}</h1>
<p class="type">Type - {{ $scent->type }}</p>
<p class="type">Amount - {{ $scent->amount }}</p>
<p class="type">Type - {{ $scent->price}}</p>

<form action="/body/{{ $scent->id}}" method="POST">
@csrf
@method('DELETE')
<button>Delete Order</button>

</form>
@endsection


