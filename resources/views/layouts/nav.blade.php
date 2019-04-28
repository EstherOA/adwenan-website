<!--==========================
  Header
============================-->
<header id="header" class="header-scrolled">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            {{--<h1><a href="" class="scrollto">BizPage</a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
            {{--<a href="#intro"><img src="{{asset('img/logo.jpg')}}" alt="" title="" /></a>--}}
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class={{$routeVar['name']=='home' ? "menu-active": ""}}=><a href="/">Home</a></li>
                <li class={{$routeVar['name']=='about' ? "menu-active": ""}}><a href="/about">About Us</a></li>
                <li class={{$routeVar['name']=='products' ? "menu-active": ""}}><a href="/products">Products</a></li>
                <li class={{$routeVar['name']=='projects' ? "menu-active": ""}}><a href="/projects">Projects</a></li>
                <li class={{$routeVar['name']=='team' ? "menu-active": ""}}><a href="/team">Team</a></li>
                {{--<li class="menu-has-children"><a href="">Drop Down</a>--}}
                    {{--<ul>--}}

                        {{--<li><a href="#">Drop Down 1</a></li>--}}
                        {{--<li><a href="#">Drop Down 3</a></li>--}}
                        {{--<li><a href="#">Drop Down 4</a></li>--}}
                        {{--<li><a href="#">Drop Down 5</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class={{$routeVar['name']=='contact' ? "menu-active": ""}}><a href="/contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->