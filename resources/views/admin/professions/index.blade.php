@extends('admin.layouts.admin')

@section('page_header')

@include('admin.partials.page_header',[
    'title' =>  'Facultades'
])

@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Profesiones/Titulos</h3>
                <a class="btn btn-outline-success btn-sm mb-auto ml-auto" href="{{ route('dashboard.professions.create') }}">Crear Profesion/Titulo <i class="ti-angle-double-right"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th class="wd-15p">Nombre</th>
                                
                                <th class="wd-25p">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($professions as $profession)
                            <tr>
                                <td>{{ $profession->name }}</td>

                              

                                <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.professions.edit', $profession) }}"><i class="fa fa-edit"></i> Editar</a>

                                        <a class="btn btn-sm btn-info" href="{{ route('dashboard.professions.show', $profession) }}"><i class="fa fa-edit"></i> Ver </a>

                                        <a class="btn btn-sm btn-danger" href="#" data-token="{{ csrf_token() }}" data-id="{{ $profession->id }}" id="deleteprofessions" ><i class="fa fa-trash"></i> Eliminar</a>

                                       {{--  <form id="delete-project"
                                            class="d-none"
                                            method="POST" action="{{ route('dashboard.professions.destroy', $profession) }}">
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