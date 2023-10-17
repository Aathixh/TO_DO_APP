<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "{{ asset('css/index.css') }}" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1>Tasks</h1>
    <div>
        @if(session()->has('success'))
            {{session('success')}}
        @endif
    </div>
    <div class = "container">
        <div class="table_div">
            <table class="table table-dark table-hover">
                <tr>
                    <th>Sl.No</th>
                    <th>Tasks</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
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

    <div class="button-container">
            <a href="{{route('tasks.create')}}"><input type="submit" class="btn btn-outline-success" value="Add New Task"></a>
    </div>
</body>
</html>