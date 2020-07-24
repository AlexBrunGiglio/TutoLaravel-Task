@extends('layout.master')

@section('content')
<div class="container mt-5">
    <div class="text-center"><a class="btn btn-primary mt-4" href="{{ url('tasks/create') }}" >Créer une tâche</a></div>
    <div class="row">
        @foreach ($tasks as $task)
        <div class="col-sm-4">
            <div class="card mt-5 mb-5" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">{{ $task->name }}</h5>
                  <p class="card-text">{{ $task->description }}</p>
                  <a class="btn btn-primary float-right mt-4" href="{{ url('tasks/edit/'.$task->id) }}" >Modifier</a>
                </div>
              </div>
            </div>
        @endforeach
    </div>
</div>
@endsection