
    <div class="container">
      <div class="header_box">
         <div class="logo"><a href="#"><img src="{{ asset('inc/img/logo.png') }}" alt="logo"></a></div> 
        @if(isset($menu))
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="main-nav" class="collapse navbar-collapse navStyle">
                <ul class="nav navbar-nav" id="mainNav">
                  @foreach($menu as $item)
                  <li><a href="#{{$item ['aliases']}}" class="scroll-link">{{ $item['title'] }}</a></li>
                  @endforeach
            
            @auth
            <li><a href="{{ route('pages') }}">Панель администратора</a></li>
            <li><a href="#">Пользователь: {{ auth()->user()->name }}</a></li>
            <li><a href="{{ route('log_out') }}">Log out</a></li>
            @endauth
            @guest
            <li><a href="{{ route('register.create') }}">Регистрация</a></li>
            <li><a href="{{ route('login.create') }}">Login</a></li>
            @endguest
            </ul>
          </div>
         
         </nav>
        @endif
      </div>
    </div>
