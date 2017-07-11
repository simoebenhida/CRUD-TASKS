<nav class="navbar ">
  <div class="navbar-brand">


    <div class="navbar-burger burger" data-target="navMenuExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item " href="/">
        Home
      </a>
       @if (Auth::guest())
      <a class="navbar-item " href="{{ route('register') }}">
        Register
      </a>
      <a class="navbar-item " href="{{ route('login') }}">
        Login
      </a>
      @else
       <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="/documentation/overview/start/">
          {{ Auth::user()->name }}
        </a>
        <div class="navbar-dropdown ">
          <a class="navbar-item " href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </div>
      </div>
      @endif
    </div>
    @if (!Auth::guest())
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button is-primary" href="{{ route('createTask') }}">
              <span>Add Task</span>
            </a>
          </p>
        </div>
      </div>
      </div>
    @endif
  </div>
</nav>