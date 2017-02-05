<div class="row">

    <!-- menu ordinateur -->
    <div id="menu">

        <div class="col-xs-4">
            <div class="accueil">

                <a href="{{ route('index') }}">quel électeur suis-je ?</a>

            </div>
        </div>

        <div class="col-xs-4">
            <div class="logo">
                <a href="{{route('index')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="mission">

                <a href="{{ route('mission') }}">notre mission</a>

            </div>
        </div>
    </div>

    <!-- menu mobile -->

    <div id="menu-mobile">

        <div class="col-xs-4">
            <div class="accueil" id="accueil">

                <i id="nav" class="fa fa-bars" aria-hidden="true"></i>

            </div>
        </div>

        <div class="col-xs-4">
            <div class="logo">
                <a href="{{route('index')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-xs-4"></div>

    </div>

    <div class="col-xs-12" id="sous-menu">
        <div class="sous-menu">
            <div class="quel-electeur">
                <a href="{{ route('index') }}">quel électeur suis-je ?</a>
            </div>
            <div class="mission">
                <a href="{{ route('mission') }}">notre mission</a>
            </div>
        </div>
    </div>

</div>