<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="{{ asset('csss/main.css') }}">
</head>
<body>
<div class="card_div-info">
<h2>{{ $product->name }}</h2>
<p class="card_div__prise">Ціна: {{ $product->price }}</p>
<p>{{ $product->description }}</p>
<img src="{{ asset($product->photo) }}" alt="{{ $product->name }}">
</div>
</body>
</html>