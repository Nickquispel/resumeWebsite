<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="{{route('home')}}#page-top">
        <span class="d-block d-lg-none"> Nick Quispel </span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ URL::asset('img/profile.png') }}" alt="" /></span>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        @if(!Auth::check())
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#about">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#education">Education</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#interests">Interests</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}#login">Login</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.canva.com/design/DADVUQEex7U/7XPBVKBfuQCcWl7yyreZnw/view?utm_content=DADVUQEex7U&utm_campaign=designshare&utm_medium=link&utm_source=homepage_design_menu" target="_blank">CV</a></li>
        @else
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('admin') }}">admin</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endif
        </ul>
    </div>
</nav>
