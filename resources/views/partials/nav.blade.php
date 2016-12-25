<div class="container pdh0">
    <div class="text-center wd100P mgv20">
        <div style="display: flex; padding: 0 50px;">
            <div class="text-right" style="width: 30%;">
                <img src="{{ asset('/img/TheAngelite.png') }}" style="height: 100px; flex: 1;">                
            </div>
            <div class="fc-red text-left" style="font-size: 70px; width: 70%; font-family: arongrotesque">THE ANGELITE</div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top bgc0 bd0">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="fs17 pdl0"><a class="fc-black" href=" {{ url('/') }} ">HOME</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('news.index') }} ">NEWS</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('opinion.index') }} ">OPINION</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('features.index') }} ">FEATURES</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('humors.index') }} ">HUMOR</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('sports.index') }} ">SPORTS</a></li>
                <li class="fs17 pdh15"><a class="fc-black" href=" {{ route('artworks.index') }} ">ARTWORK</a></li>
                <li class="fs17 pdh15 hidden"><a class="fc-black" href=" {{ route('editors.index') }} " class="fc-black fs17 pdh15">EDITOR'S NOTE</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                    <li class="mgr10">
                        <div style="display: flex;">
                            <input type="text" name="" class="form-control" placeholder="Search.." style="flex: 1;">
                            <span class=""><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </li>
                @if (Auth::guest())
                    <li class="mg15"><a href="{{ url('/login') }}" class="pdv0 pdh15 mgh15 bdb0"><button class="btn-red-o bd-rad10 fc-white pd15"><i class="glyphicon glyphicon-user"></i> Log In</button></a></li>
                    <li class="hidden"><a href="{{ url('/register') }}" class="fc-black">Register</a></li>
                @else
                    <li class="dropdown mgr15">
                        <a href="#" class="dropdown-toggle fc-black" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('create') }}">Add New Post</a></li>
                            <li><a href="{{ url('create/announcement') }}">Make Announcement</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>        
</div>