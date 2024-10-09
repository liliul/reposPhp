<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="body-todolist">
    <section class="container-todolist">
        <h1>To-Do List</h1>

        <div class="todolist-center">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Nova tarefa" required>
                <button type="submit">Adicionar</button>
            </form>

            <ul>
                @foreach ($tasks as $task)
                    <li>
                        {{ $task->title }}
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remover</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</body>
</html>
