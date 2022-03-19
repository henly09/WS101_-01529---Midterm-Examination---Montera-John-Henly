<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<center>
<body style="background-color:#e8bee3">
        <form class="" action="{{ route('loginvalidation') }}" method="get">
            @csrf 
            <h1 style="margin-top: 100px" > Login ATM </h1>
            <div>
                <label> USERNAME </label>
                <input type="text" name="username" class="form-control" value="{{ old('username')}}" required>
            </div>
            <h1> </h1>
            <div>
                <label> PASSWORD </label>
                <input type="password" name="password" class="form-control" value="" required>
            </div>
            <input style="margin-top: 20px;" type="submit" name="login" class="btn btn-danger" value="login"/>
        </form>
        <a> Don't Have an Account? <a href="{{ route('signup')}}"> Sign Up </a></a>
</body>
</center>
</html>