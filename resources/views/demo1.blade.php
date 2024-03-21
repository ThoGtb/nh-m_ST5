<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{url('process')}}" method="post">
  @csrf
  First Name <input type="text" id="fname" name ="fname" ><br><br>

  SuName <input type="text" id="sname" name ="sname" ><br><br>

Password <input type="password" id="password" name="password" ><br><br>

  <label for="date">Date of Birth</label><br><br>
  <input type="date" name="date" id="date"><br><br><br>
  


  <input type="submit" value="singup">

</form> 

</body>
</html>