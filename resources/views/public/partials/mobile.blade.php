				<!-- Mobile Header -->
				<div class="mobile-header hor-mobile-header">
                        <div class="container">
                            <div class="d-flex">
                                <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                                <a class="header-brand" href="index.html">
                                    <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                                    <img src="/assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light" alt="logo">
                                </a>
                                <div class="d-flex order-lg-2 ml-auto header-right-icons">
                                    <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                                    </button>
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
                                    @include('public.partials.aside_profile_m')
                                    @endguest
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ml-auto">

                                <!-- SEARCH -->
                                @include('public.partials.search')


                               <!-- FULL-SCREEN -->
                               @include('public.partials.full_screen')

                                <!-- NOTIFICATIONS -->
                                @include('public.partials.notifications')


                                <!-- MESSAGE-BOX -->
                                @include('public.partials.messages')


                            </div>
                        </div>
                    </div>
                    <!-- /Mobile Header -->