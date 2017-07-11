@extends('partials.main')
@section('title','Add Task')
@section('content')
	
	<form action="{{ route('storeTask')}}" method="post">
	{{ csrf_field() }}

						<div class="field">
                            <label class="label">Name</label>
                            <p class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="name" name="name" placeholder="Name" value="{{ old('name') }}">
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
                        <textarea class="textarea is-hovered{{ $errors->has('description') ? ' is-danger' : '' }}" placeholder="Description" name="description">@if(old('description')) {{ old('description')}} @endif</textarea>
                           </p>

                            @if ($errors->has('description'))
                            <p class="help is-danger">
                            {{ $errors->first('description') }}
                            </p>
                             @endif

                        </div>

                        <div class="field">
                                <button type="submit" class="button is-primary">
                                    Create
                                </button>
                        </div>
	</form>

@endsection