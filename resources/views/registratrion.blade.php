<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>

<body>
    <form action="registratrion-data" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter User Name">
        <input type="email" name="email" id="email" placeholder="Enter your E-Mail">
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <button type="submit">Registration</button>
    </form>
</body>

</html>
