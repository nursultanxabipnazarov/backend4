<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('update')}}" method="post">
        @csrf
        Title : <input type="text" name="title" value="{{$post->title}}" ><br>
        Text : <input type="text" name="text"  value="{{$post->text}}" ><br>
        <input type="hidden" name="id" value="{{$post->id}}" >
            <input type="submit" value="OK">

        
    </form>
</body>
</html>