<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION</title>
</head>
<center>
<nav>
        <a href="{{ route('dashboard')}}"> Dashboard </a>   
        <a style="margin:20px;" href="{{ route('login')}}"> Logout </a>
</nav>
</center>
<center>
<body style="background-color:#e8bee3">
        <h1 style="margin-top: 100px"> TRANSACTION </h1>
        <h1> Name: {{ $name }} </h1>
        <h1> Balance: PHP {{ $balance }} </h1>  
        <form class="" action="{{ route('withdraw') }}" method="get">
            @csrf 
            <h3> Withdraw ATM </h3>
            <div>
                <label> How Much?  </label>
                <input type="number" name="withdraw" class="form-control" value="0" required>
            </div>
            <input style="margin-top: 20px" type="submit" name="withdraw" class="btn btn-danger" value="Withdraw"/>
        </form>

        <form class="" action="{{ route('deposit') }}" method="get">
            @csrf 
            <h3> Deposit ATM </h3>
            <div>
                <label> How Much? </label>
                <input type="number" name="deposit" class="form-control" value="0" required>
            </div>
            <input style="margin-top: 20px" type="submit" name="deposit" class="btn btn-danger" value="Deposit"/>
        </form>
</body>
</center>
</html>