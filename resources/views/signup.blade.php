<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<center>
<body style="background-color:#e8bee3">
        <form class="" action="{{ route('signupvalidation') }}" method="get"> 
            @csrf 
            <h1 style="margin-top: 100px"> Sign Up ATM </h1>
            <div>
                <label> NAME </label>
                <input style="margin-top: 20px;" type="text" name="name" class="form-control" value="{{ old('username')}}" required>
            </div>
            <div>
                <label> USERNAME </label>
                <input style="margin-top: 20px;" type="text" name="username" class="form-control" value="{{ old('username')}}" required>
            </div>
            <div>
                <label> PASSWORD </label>
                <input style="margin-top: 20px;" type="password" name="password" class="form-control" value="" required>
            </div>
            <input style="margin-top: 20px" type="submit" name="signup" class="btn btn-danger" value="Sign Up"/>
        </form>
        <a> Already have an Account <a href="{{ route('login')}}"> Login Already! </a></a>
</body>
</center>
</html>