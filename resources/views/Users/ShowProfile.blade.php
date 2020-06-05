<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class=row >
        <div class="card  mx-auto" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/48px-User_icon_2.svg.png"
                class="card-img-top rounded-circle d-block" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $profile->name }}..{{ $profile->id }}</h5>
                <p class="card-text">{{ $profile->email }}</p>
                <a href="../index.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</body>

</html>
