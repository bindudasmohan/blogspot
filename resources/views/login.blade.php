<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Blog Spot</title>
</head>
<body>
    <div class="container">
        <div class="row"><a href="/">Back</a></div>
        <div class="row justify-content-md-center">
        
            <div class="col col-lg-3">
<div class="card">
<div class="card-header bg-info"><h1 class="text-white">Login</h1></div>
<div class="card-body">
<form action="{{ url('login') }}" method="POST">
{{ csrf_field() }}
UserName:<input type="text"name="Username"value="" class="form-control" required><br>
Password:<input type="password" name="Password" value="" class="form-control" required><br>
<span color="red">{{$err }}</span>
<br>
<input type="submit" name="btnSubmit" value="Login" class="btn btn-info float-right">
<a href="{{ url('createaccount') }}">New Account</a>
</form>
</div>
</div>
</div>
</div>
</div>
​</body>
</html>