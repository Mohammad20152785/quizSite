<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" >
</head>
<body>

<div class="container">
    <br>
    <h1 class="text-center text success">  Welcome to Quiz World</h1>
    <br>
<div class="row">
<div class="col-lg-6">
    <div class="card">
<h2 class="card-header"> Login form </h2>

<form action="validation.php" method="POST">
<div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control">
</div>
<div class="form-group">
    <label>password</label>
    <input type="Password" name="password" class="form-control">
</div>
<button  type="submit" class="btn btn-primary">Login</button>
</div>
</div>
</form>
<div class="col-lg-6">
    <h2 class="card-header"> Signup form </h2>
    <form action="registration.php" method="POST">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control">
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="Password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">signup</button>
</form>
</div>
</div>


</body>
</html