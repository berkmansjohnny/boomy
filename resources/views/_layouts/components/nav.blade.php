<nav class="nav">
    <div class="container">
        <div class="row menu-primary">
            <div class="column-3">
                <a href="{{ route('pages.home')}}" title="" class="logo">
                    <img src="{{ asset('assets/img/nav/logo.png') }}">
                </a>
            </div>
            <div class="nav-items column">
                <a href="{{ route('pages.honden')}}" title="" class="nav-item stretched">
                    <img src="{{ asset('assets/svg/dog.svg') }}" class="icon">
                    <div class="nav-item--title">
                        <h1>HONDEN</h1>
                        <span>Alle producten</span>
                    </div>
                </a>

                <a href="{{ route('pages.paarden')}}" title="" class="nav-item stretched">
                    <img src="{{ asset('assets/svg/horse.svg') }}" class="icon">
                    <div class="nav-item--title">
                        <h1>PAARDEN</h1>
                        <span>beloningsartikelen</span>
                    </div>
                </a>

                <a href="{{ route('pages.bedrijf')}}" title="" class="nav-item stretched">
                    <img src="{{ asset('assets/svg/love.svg') }}" class="icon">
                    <div class="nav-item--title">
                        <h1>Over ons</h1>
                        <span>Boomy Animal Crackers</span>
                    </div>
                </a>
            </div>
            <div class="menu-secondary row">
                <div class="menu-item column squished-s">
                    <a href="#">
                        <i class="fa fa-download"></i>
                        Downloads
                    </a>
                </div>
                <div class="menu-item column squished-s">
                    <a href="#">
                        <i class="fa fa-globe"></i>
                        Français
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>
