@extends('admin.layouts.admin')

@section('page_header')

@include('admin.partials.page_header',[
    'title' =>  'Usuarios'
])

@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Usuarios</h3>
                <a class="btn btn-outline-success btn-sm mb-auto ml-auto" href="{{ route('dashboard.users.create') }}">Crear Usuario <i class="ti-angle-double-right"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th class="wd-15p">Nick</th>
                                <th class="wd-15p">Nombre</th>
                                <th class="wd-20p">Apellido</th>
                                <th class="wd-15p">Roles</th>
                                <th class="wd-10p">Email</th>
                                <th class="wd-25p">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>

                                @if ( $user->first_name ||  $user->last_name)
                                <td><span class="badge badge-success mt-2">{{ $user->first_name }}</span></td>
                                <td><span class="badge badge-success mt-2">{{ $user->last_name }}</span></td>
                                    
                                @else
                                <td><a href="" class="badge badge-light">No especificado</a></td>
                                <td><a href="" class="badge badge-light">No especificado</a></td>
                                @endif

                                <td><span class="badge badge-info mt-2">{{ $user->getRoleNames()->implode(', ') }}</span></td>
                                <td>{{ $user->email }}</td>
                                <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.users.edit', $user) }}"><i class="fa fa-edit"></i> Editar</a>

                                        <a class="btn btn-sm btn-info" href="{{ route('dashboard.users.show', $user) }}"><i class="fa fa-edit"></i> Ver </a>

                                        <a class="btn btn-sm btn-danger" href="#" data-token="{{ csrf_token() }}" data-id="{{ $user->id }}" id="deleteuser" ><i class="fa fa-trash"></i> Eliminar</a>

                                       {{--  <form id="delete-project"
                                            class="d-none"
                                            method="POST" action="{{ route('dashboard.users.destroy', $user) }}">
                                            @csrf @method('DELETE')
                                        </form> --}}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- TABLE WRAPPER -->
        </div>
        <!-- SECTION WRAPPER -->
    </div>
</div>
    
@endsection

    @push('styles')
        <!-- DATA TABLE CSS -->
        <link href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <!--SWEET ALERT CSS-->
		<link href="/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
    @endpush

    @push('scripts')
        <!-- DATA TABLE JS-->
		<script src="/assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="/assets/plugins/datatable/datatable.js"></script>
		<script src="/assets/plugins/datatable/datatable-2.js"></script>
        <script src="/assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <!-- SWEET-ALERT JS -->
		<script src="/assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="/assets/js/sweet-alert.js"></script>
    @endpush