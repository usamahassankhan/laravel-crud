<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

   
    <div class="container-fluid">

        <table
            class="table table-striped table-primary table-striped  table-hover  table-hover table-bordered-secondary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">title</th>
                    <th scope="col">time</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach($datas as $data1)
                <tr>



                    <td> {{$data1->id}}</td>
                    <td> {{$data1->name}}</td>
                    <td> {{$data1->title}}</td>
                    <td>{{$data1->created_at}}</td>
                    <td><a href="{{'edit/'.$data1->id}}" class="btn btn-primary">Edit</td>
                    <td><a href="{{'delete/'.$data1->id}}" class="btn btn-danger">Delete</td>

                </tr>
                @endforeach
    </div>

    </tbody>
    </table>
</body>

</html>