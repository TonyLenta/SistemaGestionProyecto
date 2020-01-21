				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.html">
							<img src="/img/pucesesi.gif" class="header-brand-img desktop-logo" alt="logo">
							<img src="/img/pucesesi.gif" class="header-brand-img toggle-logo" alt="logo">
							<img src="/img/pucesesi.gif" class="header-brand-img light-logo" alt="logo">
							<img src="/img/pucesesi.gif" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{ Auth::user()->avatar ? Auth::user()->avatar : Gravatar::get(Auth::user()->email) }}" alt="user-img" class="avatar-xl rounded-circle" style="object-fit: scale-down;">
							</div>
							<div class="user-info">
								<h6 class=" mb-0 text-dark">{{ auth()->user()->name }}</h6>
								<span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->getRoleNames()->implode(',') }}</span>
							</div>
						</div>
					</div>
				
                    
                    @include('admin.partials.aside')
                    
				</aside>
				<!--/APP-SIDEBAR-->