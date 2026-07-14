<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Create</title>
</head>

<body>
    <form action="{{ route('productStore') }}" method="post">
        @csrf
        <input type="text" name="product_name" placeholder="product Name">
        <input type="text" name="product_image_url" placeholder="product image">
        <input type="text" name="product_price" placeholder="price">
        <button type="submit">create-product</button>
    </form>
</body>

</html>