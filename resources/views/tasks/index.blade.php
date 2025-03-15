<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Tasks Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

    
    <section>
    <div class="container text-center mt-5">
        <h1 class="text-info mb-5">All Tasks!</h1>
        @if(session('success_create'))
        <div class="alert alert-success">
          {{ session('success_create') }}
        </div>
        @endif
        <div class="mb-5">
        <a href="{{ route('tasks.create') }}" class="btn btn-outline-primary">Add Task</a>
      </div>
    <div>
        @foreach ($tasks as $task)
        <a class="text-decoration-none" href="{{ route('tasks.show', $task['id']) }}"><h3 class="lead text-info">{{ $task['name'] }}</h3></a>
        @endforeach
    </div>
    </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>