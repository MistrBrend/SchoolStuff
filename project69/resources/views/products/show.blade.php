@extends('layouts.app')

@section('content')
    <h1>Products show</h1>

    <div>
        <h5>Name</h5>
        <p>{{ $product->name }}</p>

        <h5>Price</h5>
        <p>{{ $product->price }}</p>

        <h5>Description</h5>
        <p>{{ $product->description }}</p>
        
        <a class="button" href="{{ route('products.edit', $product->id) }}">edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection