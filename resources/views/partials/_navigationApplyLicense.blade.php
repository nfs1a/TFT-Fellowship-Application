<div id="navbar">
    <nav role="navigation" class="navbar navbar-fixed-top navbar-default background_white">
        <div class="container-fluid"><!--Brand and toggle get grouped for better mobile display-->
            <ul id="navmain" class="nav navbar-nav navbar-left">
                <li><a href="/" class="navbar-brand">
                        <img src="/tittle-24.png" alt="">
                    </a>
                </li>
                @if(0)
                    <li><a href="/dashboard"
                           class="btn btn-success btn-lg btn-home">DASHBOARD</a></li>
                @endif
                <li><a href="http://www.teach4taiwan.org/faqs.html" target="_blank"
                       class="btn btn-success btn-lg btn-home">FAQ</a></li>
            </ul>
            <ul id="navmainright" class="nav navbar-nav navbar-right">
                @if(isset($loginUser))
                    <li><a href="/">{{ isset($loginUser)? $loginUser : '' }}</a></li>
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li><a href="/">尚未登入</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
