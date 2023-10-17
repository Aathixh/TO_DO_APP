<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks:</h1>
    <div>
        @if(session()->has('success'))
            {{session('success')}}
        @endif
    </div>
    <div>
        <table border="1">
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
                    <td><a href="{{route('tasks.edit',['task' => $task -> id])}}">Edit</a></td>
                    <td>
                        <form action="{{route('tasks.destroy',['task' => $task])}}" method="post">
                        @csrf 
                        @method('delete')   
                        <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('tasks.create')}}"><input type="submit" value="Add New Task"></a>
        </div>        
    </div>
</body>
</html>