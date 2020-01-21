				<!-- Mobile Header -->
				<div class="mobile-header">
                        <div class="container-fluid">
                            <div class="d-flex">
                                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                                <a class="header-brand" href="index.html">
                                    <img src="/img/pucesesi.gif" class="header-brand-img desktop-logo" alt="logo">
                                    <img src="/img/pucesesi.gif" class="header-brand-img desktop-logo mobile-light" alt="logo">
                                </a>
                                <div class="d-flex order-lg-2 ml-auto header-right-icons">
                                    <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                                    </button>

                                    @include('admin.partials.aside_profile_m')
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ml-auto">


                                <!-- SEARCH -->
                                @include('admin.partials.search')


                                <!-- FULL-SCREEN -->
                                @include('admin.partials.full_screen')


                                <!-- NOTIFICATIONS -->
                                @include('admin.partials.notifications')


                                <!-- MESSAGE-BOX -->
                                @include('admin.partials.messages_box')


                            </div>
                        </div>
                </div>
                    <!-- /Mobile Header -->