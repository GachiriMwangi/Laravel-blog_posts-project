  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container ">
        <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse "
             id="navbarNavAltMarkup">
                <div class="navbar-nav"  >

            <!-- Right Side Of Navbar -->

                <!-- Authentication Links -->
                @guest
                <div class="float-end ">
                  <ul class="navbar-nav"  >
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                               {{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                {{ __('Register') }}
                               </a>
                        </li>
                   </ul>
                </div>
                    @endif

                @else

                <div class="navbar-nav ms-auto " style="float: right;">
                    <div class="nav-item dropdown" >
                        <a id="navbarDropdown" class="nav-link dropdown-item"
                        href="#" role="button"
                        data-bs-toggle="dropdown-toggle" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                    </div>
                   <a class="dropdown-item" href="/lsapp/public/dashboard">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                @endguest
                        </div>
            <!-- Example single danger button -->
        </div>
    </div>
</div>
</div>
</nav>

