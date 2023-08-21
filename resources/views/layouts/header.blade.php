<!-- header start -->
<style>
 
    
    
</style>
<header class="header js-header">
    <div class="header__bar js-header-bar">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto z-5 js-header-item">
                <div class="header__item -margin-sm">
                    <div class="header__logo text-white js-header-logo">
                        <a data-barba href="/">
                            <img src="/img/general/logo-white.png" alt="Adwan Real Estate Logo" width="150">
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu js-menu">
                <div class="mobile__background js-mobile-bg"></div>

                <div class="menu__container">
                    <div class="mobile__back js-nav-list-back pointer-events-none">
                        <a data-barba href="{{route('home_path')}}">Home</a>
                    </div>

                    <ul class="nav js-navList">
                        <li class="text-white {{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
                            <a data-barba href="{{ route('home_path') }}">Home</a>
                        </li>
                        <li class="text-white {{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
                            <a data-barba href="{{ route('about_path') }}">About</a>
                        </li>
                        <li class="text-white {{ (Route::currentRouteName() == 'projects_path' || Route::currentRouteName() == 'azure_path' || Route::currentRouteName() == 'bluhorizon_path' || Route::currentRouteName() == 'illido_path') ? 'active' : '' }} drop-menu projects">
                            <a data-barba href="{{ route('projects_path') }}" >Projects</a>
                  
                                <div class="content">
                                            <div class="main">
                                                <h4 class="title-mega">Greece</h4>
                                                <ul class="mega-links">
                                                    <li><a class="link" href="{{route('damareos_path')}}">Damareos 59</a></li>
                                                    <li><a class="link" href="{{route('damagitou_path')}}">Damagitou 5</a></li>
                                                    <li><a class="link" href="{{route('frinis_path')}}">Frinis 38</a></li>
                                                    <li><a class="link" href="{{route('iliados_path')}}">Iliados 3</a></li>
                                                </ul>
                                            </div>
                                            <div class="main">
                                                <h4 class="title-mega">Cyprus</h4>
                                                <ul class="mega-links">
                                                    <li><a class="link" href="{{route('illido_path')}}">Il Lido</li></a>
                                                    <li><a     class="link"  href="{{route('downtown_path')}}">Down Town Views</li></a>
                                                    <li><a class="link"  href="{{route('bluhorizon_path')}}">PBlu Horizon</li></a>
                                                    <li><a class="link"  href="{{route('azure_path')}}">Azure</li></a>
                                                
                                                </ul>
                                            </div>
                                            <div class="main">
                                            
                                                <div class="image-mega">
                                                <img src="{{asset('img/damareos/01_Elevation.jpg')}}" alt="" width="180">
                                            </div>
                                            </div>
                                </div>


                                  <ul class="mobile-menu">
                                    <li class="link-submenu"><a href="{{route('projects_path')}}">Greece </a>
                                        <ul class="sub">
                                                <li><a href="{{route('damareos_path')}}">Damareos 59</a></li>
                                                <li><a href="{{route('damagitou_path')}}">Damagitou 5</a></li>
                                                <li><a href="{{route('frinis_path')}}">Frinis 38</a></li>
                                                <li><a href="{{route('iliados_path')}}">Iliados 3</a></li>
                                            </ul>
                                    </li>
                                    <li class="link-submenu"><a href="{{route('projects_path')}}">Cyprus </a>
                                        <ul class="sub">
                                                <li><a href="{{route('illido_path')}}">Il Lido</li></a>
                                                <li><a href="{{route('downtown_path')}}">Down Town Views</li></a>
                                                <li><a href="{{route('bluhorizon_path')}}">PBlu Horizon</li></a>
                                                <li><a href="{{route('azure_path')}}">Azure</li></a>
                                            </ul>
                                    </li>
                                  
                                </ul>
                 
                         
                       </li>
                        <li class="text-white {{ (Route::currentRouteName() == 'news_path' || Route::currentRouteName() == 'news_details_path') ? 'active' : '' }}">
                            <a data-barba href="{{ route('news_path') }}">News</a>
                        </li>
                        <li class="text-white {{ Route::currentRouteName() == 'work_path' ? 'active' : '' }}">
                            <a data-barba href="{{ route('work_path') }}">Work With Us</a>
                        </li>
                        <li class="text-white {{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
                            <a data-barba href="{{ route('contact_path') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="mobile__footer js-mobile-footer">
                    <div class="mobile__socials">
                        <a data-barba href="https://www.instagram.com/adwanrealestate/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a data-barba href="https://www.facebook.com/AdwanRealEstate/" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="mobile__copyright">
                        <p>© 2022 Adwan Real Estate. All rights reserved. <span>By<a href="http://webneoo.com" target="_blank">Webneoo</a>.</span></p>
                    </div>
                </div>
            </div>

            <div class="col-auto z-5 sm:pos-unset js-header-item">
                <div class="header__icons">
                    <div class="header__menu">
                        <button type="button" class="nav-button-open md:d-none js-sidebar-open">
                            <i class="icon text-white icon-menu"></i>
                        </button>

                        <button type="button" class="nav-button-open d-none md:d-block js-nav-open">
                            <i class="icon text-white icon-menu"></i>
                        </button>

                        <button type="button" class="nav-button-close d-none md:d-block pointer-events-none js-nav-close">
                            <i class="icon text-white icon-cross"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
<!-- header end -->