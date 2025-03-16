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
      @if(session('success_edit'))
      <div class="alert alert-success text-center container mt-5">
          {{ session('success_edit') }}
        @endif
        </div>
    <div class="container text-center mt-5">
        <h1 class="text-info">Task {{ $task->name }}</h1>
        <div class="mb-5">
        <h1 class="display-4">Tasks</h1>
        <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">Back to All Tasks</a>
    </div>
        <div class="card mx-auto" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $task->name }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$task->description}}</h6>
              <p class="card-text">{{$task->long_description}}</p>
              <a href="#modal" class="card-link btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
              <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('PUT')
                <input type="hidden" name="completed" value="{{ $task->completed ? 0 : 1 }}">
             <button type="submit" class="card-link text-decoration-none btn {{ $task->completed ? 'btn-outline-danger' : 'btn-outline-success' }}">
            Mark as  {{ $task->completed ? 'Un Completed' : 'Completed' }} 
            </button>  
            </form>
            </div>
          </div>
    </div>

    <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route ('tasks.editUpdate') }}" method="POST">
            @csrf
          <div class="modal-body">
            <input type="hidden" name="id" value="{{ $task->id }}">
            <label for="name">Task Name</label>
            <input type="text" name="name" id="name" value="{{ $task->name }}" class="form-control mb-2">
            <label for="description">Task Description</label>
            <input type="text" name="description" id="description" value="{{ $task->description }}" class="form-control mb-2">
            <label for="long_description">Task Long Description</label>
            <input type="text" name="long_description" id="long_description" value="{{ $task->long_description }}" class="form-control mb-2">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>