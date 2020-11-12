<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Task List</h1>
    <form action="/create" method="post">
    @csrf
        <div>
            <h2>New Task</h2>
            <label for="task">Task</label>
            <input id="task" name="task" type="text">
            <button type="button" id="addTask">Add Task</button>
        </div>
    
    </form>
    <div>
    <h2>Current tasks</h2>
    <h3>Task</h3>
        @foreach($tasks as $task)

        @endforeach
    </div>
</body>
</html>