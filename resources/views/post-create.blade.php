<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   @if (Session::has('message'))
        <h3 style="color: green" >{{Session::get('message')}} </h3>
   @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('store')}}" method="post">
        @csrf
        Title : <input type="text" name="title" ><br>
        Text : <input type="text" name="text" ><br>
            <input type="submit" value="OK">

        
    </form>
</body>
</html>