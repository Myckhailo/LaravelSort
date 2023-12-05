<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('csss/main.css') }}">
</head>
<body>
   <div style="max-width: 1240px; margin: 0 auto; margin-bottom: 100px;">
   <a href="{{ route('products.home', ['sort_by' => 'created_at', 'sort_order' => 'desc']) }}"><button class="card_div__add_det">Сортувати за датою (нові)</button></a>
<a href="{{ route('products.home', ['sort_by' => 'created_at', 'sort_order' => 'asc']) }}"> <button class="card_div__add_det"> Сортувати за датою (старі)</button></a>
<a href="{{ route('products.home', ['sort_by' => 'price', 'sort_order' => 'asc']) }}"> <button class="card_div__add_det"> Сортувати за ціною (зростання)</button></a>
<a href="{{ route('products.home', ['sort_by' => 'price', 'sort_order' => 'desc']) }}"> <button class="card_div__add_det"> Сортувати за ціною (спадання)</button></a>
   </div> 

@foreach($products as $product)

<div class="border">
<a href="{{ route('products.show', ['id' => $product->id]) }}"><div class="card_div">
        <h2>{{ $product->name }}</h2>
        <p class="card_div__prise">Ціна: {{ $product->price }}</p>
        <p>{{ $product->description }}</p>
        <img src="{{ $product->photo }}" alt="{{ $product->name }}">
        <button class="card_div__add_det">
            <a href="{{ route('products.show', ['id' => $product->id]) }}"><p class="card_div__text_on_button">Детальніше</p> </a>
        </button>
        
    </div></a>
</div>    

@endforeach
</body>
</html>