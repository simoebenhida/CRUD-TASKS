@extends('partials.main')

@section('content')
@if(Session::has('success'))
                            <div class="notification is-primary">
                            {{ Session::get('success')}}
                            </div>
                            @endif
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  @foreach($tasks as $task)
    <tr>
      <th>{{ $task->id }}</th>
      <td>{{ $task->name }}
      </td>
      <td>{{ $task->description }}</td>
      <td>{{ $task->created_at }}</td>
      <td>{{ $task->updated_at }}</td>
      <td>
      <a href="{{ route('editTask',$task->id)}}"><span class="icon">
        <i class="fa fa-pencil"></i>
      </span></a>
    </td>
    <td>
        <a href="{{ route('destroyTask',$task->id)}}" onclick="event.preventDefault(); document.getElementById('destory-task').submit();">
        <span class="icon">
        <i class="fa fa-trash-o"></i>
      </span>
      </a>
      <form id="destory-task" action="{{ route('destroyTask',$task->id)}}" method="POST" style="display: none;">
         {{ csrf_field() }}
     </form>
     
    </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection