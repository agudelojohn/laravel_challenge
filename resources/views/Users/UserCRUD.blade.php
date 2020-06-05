<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container-md " style="margin-top:50px;">
        <form method="POST" action="/UserProfile">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" id='name' name=name type="text">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name=email type="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name=password type="password">
            </div>
            <div class="form-group">
                <label for="passwordConfirm">Confirm Password:</label>
                <input class="form-control" name=passwordConfirm type="password">
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>
