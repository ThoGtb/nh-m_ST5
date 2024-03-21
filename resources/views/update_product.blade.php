<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{url('/product/20')}}" method="post">
        @method('PUT')
        @csrf
        
        <h1>Cap Nhap</h1><br>
        Name <input type="text" id="name" name="name"><br><br>


        <input type="submit" value="AddProduct">
    </form>
</body>

</html>