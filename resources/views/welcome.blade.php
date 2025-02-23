<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Name" name="name"> <br><br>
            <input type="file" name="image"> <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
{{--<img src="/storage/images/s8C3SoEahMIxXqJAn3dYqwPQljnyUNdjYMysC6JE.jpg" alt="png">--}}
@foreach($categories as $data)
{{--    @dd($data)--}}
    <h1>{{$data->name}}</h1>
    <img src="{{'/storage/' . $data->image}}" alt="">
@endforeach
</body>
</html>
