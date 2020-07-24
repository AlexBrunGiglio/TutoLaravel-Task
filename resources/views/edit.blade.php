@extends('layout.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('tasks/edit/'.$tasks->id) }}">
        @csrf
        <div class="form-group">
          <label>Titre de la tâche</label>
          <input type="text" class="form-control" name="name" value="{{ $tasks->name }}">
        </div>
        <div class="form-group">
          <label>Description de la tâche</label>
          <textarea rows="4" class="form-control" name="description">{{ $tasks->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <form action="{{ url('tasks/delete/'.$tasks->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
    </form>
</div>

@endsection