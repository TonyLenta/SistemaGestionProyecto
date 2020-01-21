<div class="dropdown profile-1">
        <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
            <span>
                <img src="{{ Auth::user()->avatar ? Auth::user()->avatar : Gravatar::get(Auth::user()->email) }}" alt="profile-user" class="avatar  profile-user brround cover-image" style="object-fit: scale-down;">
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <div class="drop-heading">
                <div class="text-center">
                    <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                    <small class="text-muted">{{ Auth::user()->getRoleNames()->implode(', ') }}</small>
                </div>
            </div>
            <div class="dropdown-divider m-0"></div>
            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">
                <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon  mdi mdi-settings"></i> Settings
            </a>
            <a class="dropdown-item" href="#">
                <span class="float-right"></span>
                <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
            </a>
            <div class="dropdown-divider mt-0"></div>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
               </form>
        </div>
    </div>