<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('ex1')}}" method="get">
  
  <label for="name">Name</label><br>
  <input type="text" id="name" name ="name" ><br>

  <label for="password">Password</label><br>
  <input type="password" id="password" name="password" ><br><br>

  <input type="submit" value="Login">

</form> 
</body>
</html>