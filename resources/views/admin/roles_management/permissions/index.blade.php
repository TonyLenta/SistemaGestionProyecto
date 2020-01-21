<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de los Permisos</h3>
                <a class="btn btn-outline-success btn-sm mb-auto ml-auto" href="{{ route('dashboard.permissions.create') }}">Crear Permiso <i class="ti-angle-double-right"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tbl_id-2" class="table table-striped table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
								<th class="wd-15p">Nombre</th>
								<th class="wd-15p">Roles</th>
								<th class="wd-15p">Descripcion</th>						
								<th class="wd-25p">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
								<td>{{ $permission->roles->pluck('name')->implode(', ') ? $permission->roles->pluck('name')->implode(', ') : 'Unspecified' }}</td>
								<td>{{ $permission->description ? $permission->description : 'Unspecified' }}</td>
                                                        
								<td>
									<a class="btn btn-sm btn-primary" href="{{ route('dashboard.permissions.edit', $permission) }}"><i class="fa fa-edit"></i> Editar</a>
									<a class="btn btn-sm btn-info" href="{{ route('dashboard.permissions.show', $permission) }}"><i class="fa fa-edit"></i> Ver </a>
									<a class="btn btn-sm btn-danger" href="#" data-id="{{ $permission->id }}" data-token="{{ csrf_token() }}" id="deletepermission" ><i class="fa fa-trash"></i> Eliminar</a>
															
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

<script>
$(document).ready(function() {
    $('#tbl_id-2').dataTable({
        "aLengthMenu": [[5, 15, 25, -1], [5, 15, 25, "All"]],
        "iDisplayLength": 5
    });
} );
</script>
@endpush