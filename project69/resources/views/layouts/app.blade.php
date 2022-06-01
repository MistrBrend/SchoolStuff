<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h1>heloooooooooooooo CSS???</h1>
    <div class="container">
        <ol>
            <li><a href="{{ route('products.index') }}">Home</a></li>
            <li><a href="{{ route('products.create') }}">Create</a></li>
        </ol>
            @yield('content')
    </div>
</body>
</html>