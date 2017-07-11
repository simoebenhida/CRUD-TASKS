@extends('partials.main')

@section('title','Register')

@section('content')
            <div class="panel">
                <p class="panel-heading">Register</p>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                          <div class="field">
                            <label class="label">Name</label>
                            <p class="control">
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="name" name="name" placeholder="name" value="{{ old('name') }}" autofocus>
                            </p>

                            @if ($errors->has('name'))
                            <p class="help is-danger">
                            {{ $errors->first('name') }}
                             </p>
                             @endif

                        </div>
                            
                         <div class="field">
                            <label class="label">email</label>
                            <p class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="email" value="{{ old('email') }}" >
                            </p>

                            @if ($errors->has('email'))
                            <p class="help is-danger">
                            {{ $errors->first('email') }}
                             </p>
                             @endif

                        </div>
                        
                         <div class="field">
                            <label class="label">Password</label>
                            <p class="control">
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" placeholder="password" value="{{ old('password') }}" >
                            </p>

                            @if ($errors->has('password'))
                            <p class="help is-danger">
                            {{ $errors->first('password') }}
                             </p>
                             @endif

                        </div>
                        
                        <div class="field">
                            <label class="label">Confirm Password</label>
                            <p class="control">
                        <input class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" name="password_confirmation" placeholder="Confirm Password" >
                            </p>

                            @if ($errors->has('password_confirmation'))
                            <p class="help is-danger">
                            {{ $errors->first('password_confirmation') }}
                             </p>
                             @endif

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="button is-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
