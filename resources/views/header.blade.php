<header class="fixed_header menu_v4 submenu_version">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <a href="/" class="logo_normal">
                    <img src="\img\Echowood logo white.png" width="145" height="auto" alt="Logo">
                </a>
                <a href="/" class="logo_sticky">
                    <img src="\img\Echowood logo Black.png" width="145" height="auto" alt="Sticky Logo">
                </a>
            </div>
            <div class="col-9">
                <div class="main-menu">
                    <nav id="mainNav">
                        <ul>
                            <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                            <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                            <li><a href="/buy" class="{{ Request::is('buy') ? 'active' : '' }}">Buy</a></li>
                            <li><a href="/rent" class="{{ Request::is('rent') ? 'active' : '' }}">Rent</a></li>
                            <li><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a>
                            </li>
                            <li><a href="/contacts" class="{{ Request::is('contacts') ? 'active' : '' }}">Contacts</a>
                            </li>
                            <li><a href="#enquiry_section" class="btn_1">Send an Inquiry</a></li>
                        </ul>
                        <style>
                            .active {
                                color: gold;
                                font-weight: bold;
                            }
                        </style>

                    </nav>
                </div>
                <div class="hamburger_2 open_close_menu float-end">
                    <div class="hamburger__box">
                        <div class="hamburger__inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
