<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>Post List</h4>
        <a class="btn btn-success" href="{{url('blog/create')}}">Add New post</a>
        <table class="table table-bordered">
            <tr>
                <th>Sl</th>
                <th>Title</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
           @foreach($post as $key=>$item)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('blog/show/'.$item->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{url('blog/edit/'.$item->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('blog/delete/'.$item->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>