<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks:</h1>
    <div>index</div>
    <div>
        <table border="1">
            <tr>
                <th>Sl.No</th>
                <th>Tasks</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->tasks}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>