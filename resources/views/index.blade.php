<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
     <h1>ALL posts</h1>

     <table >
        <tr>

            <th>Title</th>
            <th>Text</th>
        </tr>

        @foreach ($posts as  $post)
            
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
        </tr>
        @endforeach
     </table>
</body>
</html>