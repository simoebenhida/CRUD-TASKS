@extends('partials.main')
@section('title','Edit Task')
@section('content')
	
	<form action="{{ route('updateTask',$task->id)}}" method="post">
	{{ csrf_field() }}
							@if(Session::has('success'))
							<div class="notification is-primary">
							{{ Session::get('success')}}
							</div>
							@endif

						<div class="field">
                            <label class="label">Name</label>
                            <p class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="name" name="name" placeholder="Name" value="{{ $task->name }}">
                            </p>

                            @if ($errors->has('name'))
                            <p class="help is-danger">
                            {{ $errors->first('name') }}
                             </p>
                             @endif

                        </div>

                        <div class="field">
                            <label class="label">Description</label>
                            <p class="control">
                        <textarea class="textarea is-hovered{{ $errors->has('description') ? ' is-danger' : '' }}" placeholder="Description" name="description">{{ $task->description }}</textarea>
                           </p>

                            @if ($errors->has('description'))
                            <p class="help is-danger">
                            {{ $errors->first('description') }}
                            </p>
                             @endif

                        </div>

                        <div class="field">
                                <button type="submit" class="button is-primary">
                                    Update
                                </button>
                        </div>
	</form>

@endsection