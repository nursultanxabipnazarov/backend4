<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('postStore')}}" method="post">
     @csrf
     name:   <input type="text" name="title" ><br>
     email:   <input type="text" name="body" ><br>
        <input type="submit" value="OK">
    </form>
</body>
</html>