<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ URL::asset('images/logo-light.png') }}" alt="">
                </a>
            
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav">
                <li class=" dropdown dropdown-hover">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Games
                        
                        <span class="caret"></span>
                        <span class="label">Stuff we play</span>
                    </a>
                    <div class="dropdown-menu">
            
                        <ul role="menu">
                            <li>
                                <a href="">
                                    World of Warcraft
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Elder Scrolls Online
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Eve Online
                                </a>
                            </li>
                        </ul>
                    
                        <ul role="menu">
                            <li>
                                <a href="">
                                    Minecraft
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Warhammer
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Something else
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                <a href="{{ route('blogetc.index') }}">
                        Blog
                        <span class="label">Latest updates</span>
                    </a>
                </li>
                <li>
                    <a href="">
                            Forum
                            <span class="label">Discussions</span>
                        </a>
                    </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                @auth
                <li class=" dropdown dropdown-hover">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ \Auth::user()->name }}
                        <span class="badge bg-default">8</span>
                        <span class="caret"></span>
                        <span class="label">user</span>
                    </a>
                        <div class="dropdown-menu">
                            <ul role="menu">                                                
                                <li>
                                    <a href="user-activity.html">
                                        Activity
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="user-messages.html">
                                        Messages
                                        <span class="badge bg-default">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-messages-compose.html">
                                        Messages Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="user-settings.html">
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                </li>
                @else
                <li class="dropdown dropdown-hover dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <i class="fa fa-user"></i>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <form class="navbar-login-form" action="{{ route('login') }}" method="post">
                                @csrf
                                <p>{{ __('E-Mail Address') }}</p>
                                <div class="youplay-input">
                                    <input id="levi-email" type="email" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <p>{{ __('Password') }}</p>
                                <div class="youplay-input">
                                    <input id="levi-password" type="password" @error('password') is-invalid @enderror required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="youplay-checkbox mb-15 ml-5">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                </div>

                                <button class="btn btn-sm ml-0 mr-0" type="submit">{{ __('Login') }}</button>
                                <br>

                                <p>
                                    <a class="no-fade" href="#">Lost password?</a> | <a href="#" class="no-fade" data-toggle="modal" data-target="#nav-registration">Register</a>
                                </p>
                            </form>
                        </div>
                    </li>
                 @endauth
                @endif
            </ul>
    </div>
</nav>

<!-- Registration Form -->
<div id="nav-registration" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div>
                            <p>{{ __('Name') }}</p>
                            <div class="youplay-input">
                                <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <p>{{ __('E-Mail Address') }}</p>
                            <div class="youplay-input">
                                <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <p>{{ __('Password') }}</p>
                            <div class="youplay-input">
                                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <p>{{ __('Confirm Password') }}</p>
                            <div class="youplay-input">
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button class="btn ml-3" name="submit">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Registration Form -->
                                