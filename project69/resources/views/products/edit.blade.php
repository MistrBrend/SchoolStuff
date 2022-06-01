@extends('layouts.app')

@section('content')

<h1>Products Update</h1>

<form action="{{ route('products.update' , $product->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" class="nameClass" placeholder="Product nane" value="{{ $product->name }}"/>
    <input type="text" name="price" class="priceClass" placeholder="Price" value="{{ $product->price }}"/>
    <textarea name="description" class="descriptionClass" rows="4" placeholder="Description">{{ $product->description }}</textarea>

    <button type="submit">Submit</button>

</form>

@endsection