@extends('layout.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('tasks/create') }}">
        @csrf
        <div class="form-group">
          <label>Ttre de la tâche</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label>Description de la tâche</label>
          <textarea rows="4" class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</div>

@endsection