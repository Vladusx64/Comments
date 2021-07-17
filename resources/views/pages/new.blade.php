<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .column {
            -webkit-column-width: 200px;
            -moz-column-width: 200px;
            column-width: 200px;
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 30px;
            -moz-column-gap: 30px;
            column-gap: 30px;
            -webkit-column-rule: 1px solid #ccc;
            -moz-column-rule: 1px solid #ccc;
            column-rule: 1px solid #ccc;
        }

    </style>

    <title>Comments new</title>
</head>

<body>

    <style>
        img {
            width: 120px;
            height: 90px;
            object-fit: contain;
        }

    </style>
    <div class="container">
        <div class="row">


            <h2>New comments</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Update at</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>{{ $comment->status }}</td>
                            <td><img src="{{ $comment->file_path }}" alt=""></td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>
                            <td><a class="link-success" href="{{route('form.edit',[$comment->id])}}">To_confirmed</a></td>
                            <td><a class="link-danger" href="{{route('form.delete',[$comment->id])}}">Delete</a></td>
                            <td><a class="link-danger" href="{{route('form.blocked',[$comment->id])}}">Blocked</a></td>
                        </tr>

                    @endforeach
            </table>

              <h2>Confirmed</h2>
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Update at</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commentsConf as $comment)
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>{{ $comment->status }}</td>
                            <td><img src="{{ $comment->file_path }}" alt=""></td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>
                            <td><a class="link-success" href="{{route('form.new',[$comment->id])}}">To_New</a></td>
                            <td><a class="link-danger" href="{{route('form.delete',[$comment->id])}}">Delete</a></td>
                            <td><a class="link-danger" href="{{route('form.blocked',[$comment->id])}}">Blocked</a></td>
                        </tr>

                    @endforeach
            </table>
              <h2>Blocked</h2>
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Update at</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commentsBlock as $comment)
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->message }}</td>
                            <td>{{ $comment->status }}</td>
                            <td><img src="{{ $comment->file_path }}" alt=""></td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>
                            <td><a class="link-success" href="{{route('form.edit',[$comment->id])}}">To_confirmed</a></td>
                            <td><a class="link-success" href="{{route('form.new',[$comment->id])}}">To_New</a></td>
                            <td><a class="link-danger" href="{{route('form.delete',[$comment->id])}}">Delete</a></td>
                        </tr>

                    @endforeach
            </table>
        </div>
    </div>
</body>

</html>
