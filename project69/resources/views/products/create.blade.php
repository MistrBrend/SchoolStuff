@extends('layouts.app')

@section('content')
<title>Products creation</title>
<link rel="stylesheet" href="style2.css">
<h1>Products creation</h1>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name" class="nameClass" placeholder="Product nane">
    <input type="text" name="price" class="priceClass" placeholder="Price">
    <textarea name="description" class="descriptionClass" rows="4" placeholder="Description"></textarea>

    <button class="buttonClass" type="submit">submit</button>
</form>

@endsection