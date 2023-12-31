<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href = "{{ asset('css/index.css') }}" rel="stylesheet" >
</head>
<body class="background-image">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1>Tasks</h1>
    
    <div class = "container">
        <div class="table_div">
            <table class="table table-dark table-hover">
                <tr>
                    <th>Sl.No</th>
                    <th>Tasks</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($tasks as $key => $task)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$task->tasks}}</td>
                        <td><a href="{{route('tasks.edit',['task' => $task -> id])}}">
                                <button type="button" class="btn btn-outline-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('tasks.destroy',['task' => $task])}}" method="post">
                            @csrf 
                            @method('delete')   
                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>        
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success row" role="alert">
        <div class="col-11">
            {{session('success')}}
        </div>
        <div class="col-1">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
        </div>
    </div>
    @endif

    <div class="button-container ">
            <a href="{{route('tasks.create')}}"><input type="submit" class="btn btn-outline-success" value="Add New Task"></a>
    </div>
</body>
</html>