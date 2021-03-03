<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php /** @var \App\Models\Order $order */ ?>

@foreach($orders as $order)
    <h2>Заказ: {{ $order->id }}</h2>
    <p>Товар: {{ $order->product->name }}</p>
    <p>Сумма: {{ $order->sum }}</p>
@endforeach

</body>
</html>
