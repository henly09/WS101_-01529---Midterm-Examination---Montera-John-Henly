<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<center>
<nav>
        <a href="{{ route('transaction')}}"> Transaction </a>   
        <a style="margin:20px;" href="{{ route('login')}}"> Logout </a>
</nav>
</center>
<center>
<body style="background-color:#e8bee3">
        <h1 style="margin-top: 100px"> DASHBOARD </h1>
        <h1> </h1>
        <h1> Transaction History </h1>
@foreach($history as $key => $data)
    <tr>    
      <th>Name: {{$data->name}}</th>
      <th>UserName: {{$data->username}}</th>
      <th>Type: {{$data->type}}</th>
      <th>Money: {{$data->transacmoney}}</th>
      <th>Created_at: {{$data->created_at}}</th>
      <th>Updated_at: {{$data->updated_at}}</th>                   
    </tr>
    <h1> </h1>
    <br>
@endforeach
        <h1> </h1>
        <h1> ATM Users </h1>
        @foreach($atmuser as $key => $data)
    <tr>    
      <th>Name: {{$data->name}}</th>
      <th>UserName: {{$data->username}}</th>
      <th>Balance: {{$data->balance}}</th>
      <th>Created_at: {{$data->created_at}}</th>
      <th>Updated_at: {{$data->updated_at}}</th>                 
    </tr>
    <h1> </h1>
    <br>
@endforeach
</body>
</html>