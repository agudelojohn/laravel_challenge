<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/User">
        @csrf
        <label for="name">Name:</label>
        <input name='name' type="text">
        <label for="email">Email:</label>
        <input name=email type="text">
        <label for="password">Password:</label>
        <input name=password type="text">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>