
    <div class="container">
        <div class="header_box">
            <div class="logo"><a href="#"><img class="logo" src="{{ asset('assets/img/logo3.png') }}" alt="logo"></a></div>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Головна</a></li>
                        <li><a href="#portfolio" class="scroll-link">Каталог</a></li>
                        <li><a href="#advantage" class="scroll-link">Переваги</a></li>
                        <li><a href="#aboutUs" class="scroll-link">Про компанію</a></li>

                        <!--
                        <li><a href="#aboutUs" class="scroll-link">Каталог</a></li>
                        <li><a href="#service" class="scroll-link">Переваги</a></li>
                        <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
                        <li><a href="#clients" class="scroll-link">Clients</a></li>
                        <li><a href="#team" class="scroll-link">Team</a></li>
                        <li><a href="#contact" class="scroll-link">Contact</a></li>
                        -->

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @include('site.errors')
