<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{route('tasks.list')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Task:</label>    
            <input type="text" name="task" placeholder="Enter the Task">
        </div>
        <div>
            <input type="submit" value="submit" >
        </div>
    </form>
</body>
</html>