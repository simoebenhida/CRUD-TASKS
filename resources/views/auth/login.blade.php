@extends('partials.main')
@section('title','Login')
@section('content')
            <div class="panel">
                 <p class="panel-heading">
                Login
                </p>
                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label">E-Mail Address</label>
                            <p class="control">
                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                         
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
                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" placeholder="Password">
                            </p>

                            @if ($errors->has('password'))
                            <p class="help is-danger">
                            {{ $errors->first('password') }}
                             </p>
                             @endif

                        </div>
                            
                    <div class="field">
                     <p class="control">
                      <label class="checkbox">
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember me
                    </label>
                        </p>
                        </div>

                        <div class="field">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
