<ul class="side-menu">

        <li><h3>Main</h3></li>
			<li>
				<a class="side-menu__item" href="{{ route('dashboard') }}"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>
			</li>
						
        
        <li><h3>Gestion de Administracion</h3></li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-stamp"></i><span class="side-menu__label">Usuarios</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('dashboard.users.create') }}" class="slide-item">Crear Usuario</a></li>
                <li><a href="{{ route('dashboard.users.index') }}" class="slide-item">Ver todos los usuarios</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layers"></i><span class="side-menu__label">Roles y Permisos</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('dashboard.roles.create') }}" class="slide-item">Crear un Role</a></li>
                <li><a href="{{ route('dashboard.permissions.create') }}" class="slide-item">Crear un permiso</a></li>
                <li><a href="{{ route('dashboard.management.index') }}" class="slide-item">Listado de Roles y permisos</a></li>
            </ul>
        </li>

        
        <li><h3>Gestion de Academica</h3></li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-triangle"></i><span class="side-menu__label">Universidades</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('dashboard.universities.create') }}" class="slide-item">Crear Universidad</a></li>
                <li><a href="{{ route('dashboard.universities.index') }}" class="slide-item">Ver todos las Universidades</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Facultades</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('dashboard.faculties.create') }}" class="slide-item">Crear Facultad</a></li>
                <li><a href="{{ route('dashboard.faculties.index') }}" class="slide-item">Listado de Facultades</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Profesiones</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('dashboard.professions.create') }}" class="slide-item">Crear Profesion/Titulo</a></li>
                <li><a href="{{ route('dashboard.professions.index') }}" class="slide-item">Listado de Profesiones</a></li>
            </ul>
        </li>

    </ul>