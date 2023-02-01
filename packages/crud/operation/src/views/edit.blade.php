<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a class="btn btn-success" href="{{url('blog/list')}}">Back to list</a>
        <h4>Edit Post</h4>
        <form method="post" action="{{url('/blog/update/'.$post->id)}}">
            @csrf 
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>
            <button type="submit" class="btn btn-success">Update Post</button>
        </form>
    </div>
</body>
</html>