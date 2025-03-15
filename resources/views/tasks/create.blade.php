<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Tasks Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

<div class="container mt-5 text-success">
    <h1 class="display-4 text-primary text-center">Create a new Task!</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Task Name</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Task Description</label>
      <input type="description" name="description" class="form-control" id="description">
    </div>

    <div class="mb-3">
        <label for="long_description" class="form-label">Task Long Description</label>
        <input type="long_description" name="long_description" class="form-control" id="long_description">
      </div>

      <label for="completed" class="form-label">Task Status</label>
      <select class="form-select" name="completed" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="0">Completed</option>
        <option value="1">Not Completed</option>
      </select>
    
    <button type="submit" class="btn btn-outline-primary mt-4">Submit</button>
  </form>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>