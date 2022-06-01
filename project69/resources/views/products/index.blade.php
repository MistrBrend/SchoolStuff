<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="buttons">
    <li><a href="{{ route('products.create') }}">Create</a></li>
    </div>
    <table class="centerTable">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
            <th>option</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td> <a class="button" href="{{ route('products.show', $product->id) }}">Show</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>