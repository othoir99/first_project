<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories-Create</title>
</head>

<body>
    <form action="{{ route('categoriesStore') }}" method="post">
        @csrf
        <input type="text" name="categories_name" placeholder="categories Name">
        <input type="text" name="categories_image_url" placeholder="categories image">
        <button type="submit">create-categories</button>
    </form>
</body>

</html>