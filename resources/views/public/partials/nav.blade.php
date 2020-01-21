				<!-- HEADER -->
				<div class="top-header hor-topheader" >
                        <div class="header hor-header">
                            <div class="container">
                                <div class="d-flex">
                                    <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                                    <div class="">
                                        <a class="header-brand1" href="{{ route('welcome') }}">
                                            <img src="/assets/images/brand/logo-3.png" class="header-brand-img main-logo" alt="logo">
                                            <img src="/assets/images/brand/logo.png" class="header-brand-img light-logo" alt="logo">
                                        </a><!-- LOGO -->
                                    </div>

                                   <!-- SEARCH -->
                                   @include('public.partials.search')


                                   <!-- NOTIFICATIONS -->
                                   @include('public.partials.notifications')


                                    <!-- MESSAGE-BOX -->
                                    @include('public.partials.messages')
    
                                    <a class="header-brand2 d-none d-lg-block  align-items-center justify-content-center" href="{{ route('welcome') }}">
                                        <img src="/img/logonuevo.png" class="header-brand-img desktop-logo" alt="logo">
                                    </a>
                                    <div class="d-flex  ml-auto header-right-icons header-search-icon">

                                       <!-- FULL-SCREEN -->
                                       @include('public.partials.full_screen')

                                        @guest
                                        <li class="nav-item" aria-haspopup="true">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item" aria-haspopup="true">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                            
                                        @include('public.partials.aside_profile_w')
                                       @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End HEADER -->